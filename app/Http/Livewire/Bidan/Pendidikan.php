<?php

namespace App\Http\Livewire\Bidan;

use App\Models\Bidan;
use Livewire\Component;

class Pendidikan extends Component
{
  public function render()
  {
    return view('livewire.bidan.pendidikan', [
      'data' => Bidan::where('jenis', 'pendidikan')->firstOrFail(),
    ])
      ->extends('layouts.app');
  }
}
