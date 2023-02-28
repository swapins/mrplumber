<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cmsText;

class Aboutus extends Component
{
    public $count = 0;
    public cmsText $cmsText;

    protected $rules = [
        'cmsText.aboutUsText' => 'required|string',
    ];
 
    public function increment()
    {
        dd($this);
        //$this->count = Str::length($value);
    }

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
        return view('livewire.aboutus');
    }
}
