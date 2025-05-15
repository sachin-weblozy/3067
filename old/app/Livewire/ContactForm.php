<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class ContactForm extends Component
{
    use WithFileUploads;

    public $name, $email, $phone, $subject, $message, $pageName, $file;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'nullable|string',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:1000',
        'file' => 'nullable|file|max:2048|mimes:jpg,jpeg,png,pdf,doc,docx,webp', // Adjust allowed file types
    ];

    public function submit()
    {
        $this->validate();

        $filePath = null;
        if ($this->file) {
            $filePath = $this->file->store('contact-attachments', 'public'); // Store file in 'public/contact-attachments'
        }

        Mail::to('sachin10157@weblozy.in')
            ->send(new ContactFormMail($this->name, $this->email, $this->phone, $this->subject, $this->message, $this->pageName, $filePath));

        $this->reset();
        session()->flash('success', 'Message sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
