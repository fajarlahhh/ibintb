<?php

namespace App\Http\Livewire\Pengumuman;

use App\Models\Posting;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
  use WithPagination;

  protected $paginationTheme = "bootstrap";

  public function render()
  {
    return view('livewire.pengumuman.index', [
      'data' => Posting::where('jenis', 'pengumuman')->paginate(5),
    ])
      ->extends('layouts.app');
  }
}
