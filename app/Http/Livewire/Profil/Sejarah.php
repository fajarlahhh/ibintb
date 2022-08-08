<?php

namespace App\Http\Livewire\Profil;

use App\Models\Profil;
use Livewire\Component;

class Sejarah extends Component
{
  public function render()
  {
    return view('livewire.profil.sejarah', [
      'data' => Profil::where('jenis', 'sejarah')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
