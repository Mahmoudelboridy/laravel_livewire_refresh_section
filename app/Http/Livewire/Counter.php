<?php

namespace App\Http\Livewire;

use App\Models\type;
use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        $types=type::get();
        $count=$types->count();
        return view('livewire.counter',compact('count','types'));
    }
}