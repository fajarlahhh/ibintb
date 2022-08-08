<?php

namespace App\Http\Livewire\Bidan;

use App\Models\Bidan;
use Livewire\Component;

class Filosofi extends Component
{
  public function render()
  {
    return view('livewire.bidan.filosofi', [
      'data' => Bidan::where('jenis', 'filosofi')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
