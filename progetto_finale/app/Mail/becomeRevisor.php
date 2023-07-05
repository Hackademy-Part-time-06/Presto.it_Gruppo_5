<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class becomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

    //dichiaro la variabile user che avvaloro con le proprità dell'utente che arrivano dal paramentro (nel costruttore)
    public $user;

    //sfrutto l'iniezione di dipendenza per ottenere tutti i dati precisi
    public function __construct(User $user)
    {
        $this->user=$user;
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('presto.it@notreply.com'),
            subject: 'diventa revisore',
        );
           
        
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.become_revisor',
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
