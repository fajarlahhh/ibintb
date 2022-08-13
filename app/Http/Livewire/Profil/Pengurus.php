<?php

namespace App\Http\Livewire\Profil;

use App\Models\Profil;
use Livewire\Component;

class Pengurus extends Component
{
  public function render()
  {
    return view('livewire.profil.pengurus', [
      'data' => Profil::where('jenis', 'pengurus')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
