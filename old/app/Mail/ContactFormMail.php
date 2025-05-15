<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $phone, $subject, $message, $pageName, $filePath;

    public function __construct($name, $email, $phone, $subject, $message, $pageName, $filePath)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->message = $message;
        $this->pageName = $pageName;
        $this->filePath = $filePath;
    }

    public function build()
    {
        $email = $this->view('emails.contact-form')
                    ->subject('New Contact Form Submission')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'subject' => $this->subject,
                        'messageContent' => $this->message,
                        'pageName' => $this->pageName,
                    ]);

        if ($this->filePath) {
            $email->attach(Storage::disk('public')->path($this->filePath));
        }

        return $email;
    }
}

