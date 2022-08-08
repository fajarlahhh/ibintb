<?php

namespace App\Http\Livewire\Adminarea;

use Livewire\Component;

class Index extends Component
{
  public function render()
  {
    return view('livewire.adminarea.index')
      ->extends('layouts.admin');
  }
}
