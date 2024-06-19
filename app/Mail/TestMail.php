<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Headers;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'laravel Simple Txt email',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.simple-email',
            with: [
                'name' => $this->data["name"],
                'from' => $this->data["from"],
            ]
        );
    }

    //custom headers
    public function headers(): Headers
    {
        return new Headers(
            text: [
                'X-MY-CUSTOM HEADER' => "Welcome to laravel"
            ]
        );
    }
    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [
            Attachment::fromPath(public_path("4TK1 - Final exam schedual.pdf"))->as("newfile.pdf"),
            Attachment::fromPath(public_path("git-cheat-sheet-education.pdf"))->as("git-github.pdf"),
            Attachment::fromPath(public_path("IWT_Formate.pdf"))->as("IWT.pdf")

        ];
    }
}
