<?php

namespace App\Http\Livewire\Pengumuman;

use App\Models\Posting;
use Livewire\Component;

class Index extends Component
{
  public function render()
  {
    return view('livewire.pengumuman.index', [
      'data' => Posting::where('jenis', 'pengumuman')->get(),
    ])
      ->extends('layouts.app');
  }
}
