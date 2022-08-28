<?php

namespace App\Http\Livewire\Profil;

use App\Models\Profil;
use Livewire\Component;

class Cabang extends Component
{
  public function render()
  {
    return view('livewire.profil.cabang', [
      'data' => Profil::where('jenis', 'cabang')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
