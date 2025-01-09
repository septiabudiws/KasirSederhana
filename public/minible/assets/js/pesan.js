document.addEventListener("DOMContentLoaded", function () {
    const pesananTable = document.querySelector("#pesanan-table tbody");
    const totalHargaElem = document.querySelector("#total-harga");
    const btnPesan = document.querySelector("#btn-pesan");

    // Fungsi untuk menghitung total harga
    function updateTotalHarga() {
        let total = 0;
        pesananTable.querySelectorAll("tr").forEach((row) => {
            const harga = parseFloat(
                row.querySelector(".harga-produk").textContent
            );
            const jumlah = parseInt(row.querySelector(".jumlah-input").value);
            const subtotalCell = row.querySelector(".subtotal");
            const subtotal = harga * jumlah;
            subtotalCell.textContent = subtotal.toLocaleString("id-ID"); // Format subtotal ke Rupiah
            total += subtotal;
        });
        totalHargaElem.textContent = total.toLocaleString("id-ID"); // Format total ke Rupiah
    }

    // Event listener untuk tombol Checkout
    document.querySelectorAll(".checkout-btn").forEach((button) => {
        button.addEventListener("click", function () {
            const nama = this.getAttribute("data-nama");
            const brand = this.getAttribute("data-brand");
            const harga = parseFloat(this.getAttribute("data-harga"));

            // Cek apakah produk sudah ada di tabel pesanan
            let existingRow = [...pesananTable.querySelectorAll("tr")].find(
                (row) => row.querySelector(".nama-produk").textContent === nama
            );

            if (existingRow) {
                // Jika sudah ada, tambahkan jumlah
                const jumlahInput = existingRow.querySelector(".jumlah-input");
                jumlahInput.value = parseInt(jumlahInput.value) + 1;
            } else {
                // Jika belum ada, tambahkan baris baru
                const newRow = document.createElement("tr");
                newRow.innerHTML = `
            <td class="nama-produk"><input type="hidden" name="nama_produk[]" value="${nama}">${nama}</td>
            <td><input type="hidden" name="brand[]" value="${brand}">${brand}</td>
            <td class="harga-produk"><input type="hidden" name="harga[]" value="${harga}">${harga}</td>
            <td>
              <input type="number" class="form-control jumlah-input" value="1" min="1" style="width: 80px;" name="jumlah[]">
            </td>
            <td class="subtotal">${harga.toLocaleString("id-ID")}</td>
            <td class="text-center">
              <button type="button" class="btn btn-danger remove-btn">Hapus</button>
            </td>
          `;
                pesananTable.appendChild(newRow);

                // Tambahkan event listener untuk kolom jumlah
                newRow
                    .querySelector(".jumlah-input")
                    .addEventListener("input", function () {
                        if (this.value < 1) this.value = 1; // Pastikan nilai tidak kurang dari 1
                        updateTotalHarga(); // Perbarui total harga saat jumlah berubah
                    });

                // Tambahkan event listener untuk tombol hapus
                newRow
                    .querySelector(".remove-btn")
                    .addEventListener("click", function () {
                        newRow.remove();
                        updateTotalHarga(); // Perbarui total harga setelah menghapus baris
                    });
            }
            updateTotalHarga(); // Perbarui total harga setelah menambahkan baris
        });
    });

    // Event listener untuk tombol Pesan
    btnPesan.addEventListener("click", function () {
        if (pesananTable.querySelectorAll("tr").length === 0) {
            alert("Pesanan kosong! Silakan tambahkan produk terlebih dahulu.");
            return;
        }

        // Kumpulkan data dari tabel
        const formData = new FormData();

        pesananTable.querySelectorAll("tr").forEach((row) => {
            formData.append(
                "nama_produk[]",
                row.querySelector(".nama-produk input").value
            );
            formData.append(
                "brand[]",
                row.querySelector("td:nth-child(2) input").value
            );
            formData.append(
                "harga[]",
                row.querySelector(".harga-produk input").value
            );
            formData.append(
                "jumlah[]",
                row.querySelector(".jumlah-input").value
            );
        });

        formData.append(
            "total_pesanan",
            totalHargaElem.textContent.replace(/\./g, "").replace(/,/g, "")
        ); // Format total tanpa simbol atau pemisah

        // Kirim data dengan AJAX
        fetch("/transaksi/store", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
            },
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    alert(data.message);
                    // Kosongkan tabel pesanan dan reset total
                    pesananTable.innerHTML = "";
                    updateTotalHarga();
                } else {
                    alert("Terjadi kesalahan. Silakan coba lagi.");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
                alert("Gagal mengirim pesanan. Silakan coba lagi.");
            });
    });

});
