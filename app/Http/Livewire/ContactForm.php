<?php

namespace App\Http\Livewire;

use App\Mail\ContactSubmit;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $firstName, $lastName, $message, $phone, $email;

    protected $rules = [
        'firstName' => 'required|min:6',
        'lastName' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required|max:12',
        'message' => 'required|max:100',
    ];

    public function submit()
    {
        $this->validate();
        Mail::to('test@test.com')->send(new ContactSubmit());
        session()->flash('success', 'Message submitted successfully..!!');
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
