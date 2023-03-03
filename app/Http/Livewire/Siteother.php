<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cmsText;

class Siteother extends Component
{
    public cmsText $cmsText;
    protected $listeners = ['refreshsave' => '$refresh'];
    
    protected $rules = [
        'cmsText.copyRight' => 'required|string|min:6',
        'cmsText.videourl' => 'required|string|min:6',
       
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
        return view('livewire.siteother');
    }
}
