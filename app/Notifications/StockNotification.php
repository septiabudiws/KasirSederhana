<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StockNotification extends Notification
{
    use Queueable;

    private $nama_produk;
    private $stok;

    /**
     * Create a new notification instance.
     */
    public function __construct($nama_produk, $stok)
    {
        $this->nama_produk = $nama_produk;
        $this->stok = $stok;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

//     public function toDatabase($notifiable)
// {
//     return [
//         'title' => 'Stok Produk Rendah',  // Menambahkan title
//         'message' => "Stok Produk {$this->nama_produk} tersisa {$this->stok}, segera restok produk Anda"
//     ];
// }


    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Stok Produk Rendah',
            'message' => "Stok Produk {$this->nama_produk} tersisa {$this->stok}, Segera Restok Produk Anda."
        ];
    }
}
