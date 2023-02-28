<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cmsText;

class Heroyoutube extends Component
{
    public cmsText $cmsText;
    public $showDiv = false;
    
    
    protected $rules =[  'cmsText.videourl' => array(
            'required',
            'regex:/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube(-nocookie)?\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/'
        )
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
        return view('livewire.heroyoutube');
    }
}
