<?php

namespace App\Http\Livewire\Bidan;

use App\Models\Bidan;
use Livewire\Component;

class Definisi extends Component
{
  public function render()
  {
    return view('livewire.bidan.definisi', [
      'data' => Bidan::where('jenis', 'definisi')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
