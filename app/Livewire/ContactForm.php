<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name, $email, $phone, $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'nullable|string',
        'message' => 'required|string|max:1000',
    ];

    public function submit()
    {
        $this->validate();

        Mail::to('sachin10157@weblozy.in')
            ->send(new ContactFormMail($this->name, $this->email, $this->phone, $this->message));

        $this->reset();
        session()->flash('success', 'Message sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
