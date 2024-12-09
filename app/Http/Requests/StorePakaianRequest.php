<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePakaianRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'color' => 'array',
            'color.*' => 'exists:warna,id',
            'size' => 'array',
            'size.*' => 'exists:ukuran,id',
            'deskripsi' => 'required',
            'color' => 'required|array|min:1',
            'color.*' => 'exists:warna,id',
            'size' => 'required|array|min:1',
            'size.*' => 'exists:ukuran,id',
            'kategori' => 'required'
        ];
    }

    public function messages(){
        return [
            'nama.required' => 'Nama pakaian wajib diisi',
            'brand.required' => 'Nama brand wajib diisi',
            'harga.required' => 'Harga pakaian Wajib diisi',
            'harga.numeric' => 'Harga pakaian harus berupa angka',
            'stok.required' => 'Stok pakaian wajib diisi',
            'stok.numeric' => 'Stok pakaian harus berupa angka',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'color.required' => 'Warna pakaian harus diisi setidaknya 1',
            'size.required' => 'Ukuran pakauan harus diisi setidaknya 1',
            'kategori.required' => 'Kategori pakaian wajib diisi'
        ];
    }
}
