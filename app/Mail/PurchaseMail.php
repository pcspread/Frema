<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PurchaseMail extends Mailable
{
    use Queueable, SerializesModels;

    // 必要な変数の定義
    protected $name;
    protected $email;
    protected $postcode;
    protected $address;
    protected $building;
    protected $method;
    protected $total;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $postcode, $address, $building, $method, $total)
    {
        $this->name = $name;
        $this->email = $email;
        $this->postcode = $postcode;
        $this->address = $address;
        $this->building = $building;
        $this->method = $method;
        $this->total = $total;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '購入詳細メール',
            to: $this->email,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'send_purchase',
            with: [
                'name' => $this->name,
                'postcode' => $this->postcode,
                'address' => $this->address,
                'building' => $this->building,
                'method' => $this->method,
                'total' => $this->total,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
