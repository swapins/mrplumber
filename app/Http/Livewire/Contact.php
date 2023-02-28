<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\contactForm;

class Contact extends Component
{
    public contactForm $contact;

    public function mount()
    {
        $this->contact = new contactForm;
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
