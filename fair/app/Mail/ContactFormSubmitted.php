<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $pageUrl;
    /**
     * Create a new message instance.
     *
     * @param $user
     */
    public function __construct($user, $pageUrl)
    {
        $this->user = $user;
        $this->pageUrl = $pageUrl;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'You have a new lead from VrajHandicraft'
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->view('emails.conatct')
            ->subject('Contact Form Submission')
            ->with(['user' => $this->user,
             'pageUrl' => $this->pageUrl
            ]);
            // Pass the $user variable to the view
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
