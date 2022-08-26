<?php

namespace App\Http\Livewire\Pengumuman;

use App\Models\Posting;
use Livewire\Component;

class Detail extends Component
{
  public $key, $data;

  public function mount($key)
  {
    $this->key = $key;
    $this->data = Posting::where('jenis', 'pengumuman')->where('id', $this->key)->firstOrFail();
  }

  public function render()
  {
    return view('livewire.pengumuman.detail')
      ->extends('layouts.app');
  }
}
