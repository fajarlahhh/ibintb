<?php

namespace App\Http\Livewire\Profil;

use App\Models\Profil;
use Livewire\Component;

class Atribut extends Component
{
  public function render()
  {
    return view('livewire.profil.atribut', [
      'data' => Profil::where('jenis', 'atribut')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
