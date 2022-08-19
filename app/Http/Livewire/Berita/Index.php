<?php

namespace App\Http\Livewire\Berita;

use App\Models\Posting;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
  use WithPagination;

  public $arsip;

  protected $paginationTheme = 'bootstrap';

  protected $queryString = ['arsip'];

  public function render()
  {
    return view('livewire.berita.index', [
      'data' => Posting::where('jenis', 'berita')->when($this->arsip, fn($q) => $q->where('created_at', 'like', $this->arsip . '%'))->orderBy('created_at', 'desc')->paginate(3),
      'terpopuler' => Posting::where('jenis', 'berita')->withCount('hit')->orderBy('hit_count', 'desc')->take(5)->get(),
      'dataArsip' => Posting::select(DB::raw('left(created_at,7) as tanggal'))->where('jenis', 'berita')->groupBy(DB::raw('left(created_at,7)'))->orderBy('tanggal', 'asc')->get(),
    ])
      ->extends('layouts.app');
  }
}
