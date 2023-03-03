<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cmsText;

class Siteinfo extends Component
{
    
    public cmsText $cmsText;
    protected $listeners = ['refreshsave' => '$refresh'];
    
    protected $rules = [
        'cmsText.addressText' => 'required|string|min:6',
        'cmsText.phoneNo' => 'required|string|min:6',
        'cmsText.email' => 'required|email',
    ];
 

    public function mount()
    {
        $this->cmsText = cmsText::first();
    }

    public function save()
    {
        $this->validate();
        $this->cmsText->save();
        session()->flash('message', ' successfully updated.');
    }
    
    
    
    public function render()
    {
        return view('livewire.siteinfo');
    }
}
