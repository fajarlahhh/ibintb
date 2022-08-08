<?php

namespace App\Http\Livewire\Profil;

use App\Models\Profil;
use Livewire\Component;

class Visimisi extends Component
{
  public function render()
  {
    return view('livewire.profil.visimisi', [
      'data' => Profil::where('jenis', 'visimisi')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
