<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cmsText;

class Hero extends Component
{
    public cmsText $cmsText;
    public $showDiv = false;
    
    
    protected $rules = [
        'cmsText.title' => 'required|string|min:6',
    ];
 

    public function mount()
    {
        $this->cmsText = cmsText::first();
    }

    public function save()
    {
        $this->validate();
        
        $this->cmsText->save();
    }

   public function saveTitle(){
        
        $this->validate();
        $this->cmsText->save();
        $this->redirect('/');
       // dd($this);
   }
    
    
    public function render()
    {
        return view ('livewire.hero');
    }
}
