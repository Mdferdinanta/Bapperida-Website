<?php

namespace App\Livewire\Layout\Home;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3|max:255',
        'email' => 'required|email|min:3|max:255',
        'message' => 'required|string|min:3',
    ];

    public function render()
    {
        return view('livewire.layout.home.contact');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function send()
    {
        $validateData = $this->validate();

        try {

            Mail::to('m.ferdinanta@gmail.com')->send(New ContactMail($validateData));
            Session()->flash('success', 'Your message has been sent successfully.');

        } catch (\Throwable $th) {

            Session()->flash('error', 'Failed to send message. Please try again later.');
        }



        $this->reset();
    }
}
