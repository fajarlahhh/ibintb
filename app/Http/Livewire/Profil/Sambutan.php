<?php

namespace App\Http\Livewire\Profil;

use App\Models\Profil;
use Livewire\Component;

class Sambutan extends Component
{
  public function render()
  {
    return view('livewire.profil.sambutan', [
      'data' => Profil::where('jenis', 'sambutan')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
