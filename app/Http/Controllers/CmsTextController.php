<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsTextController extends Controller
{
    public $count = 0;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
