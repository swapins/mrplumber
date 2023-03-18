<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\contactForm;
use App\Models\services;

class Contact extends Component
{
    public contactForm $contact;
    public $services;

    public function mount()
    {
        $this->contact = new contactForm;
        $this->services = services::all();
    }

    protected $rules = [
        'contact.name' => 'required|string',
        'contact.email' => 'required|email|unique:contact_forms,name',
        'contact.subject' => 'required|string',
        'contact.message' => 'required|string',
    ];
    
    public function save()
    {
        $this->validate();
        $this->contact->save();
        session()->flash('message', true);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
