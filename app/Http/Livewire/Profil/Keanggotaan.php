<?php

namespace App\Http\Livewire\Profil;

use App\Models\Profil;
use Livewire\Component;

class Keanggotaan extends Component
{
  public function render()
  {
    return view('livewire.profil.keanggotaan', [
      'data' => Profil::where('jenis', 'keanggotaan')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
