<?php

namespace App\Http\Livewire\Kegiatan;

use App\Models\Kategori;
use App\Models\Posting;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
  use WithPagination;

  public $kategori, $arsip;

  protected $paginationTheme = 'bootstrap';

  protected $queryString = ['kategori', 'arsip'];

  public function render()
  {
    return view('livewire.kegiatan.index', [
      'data' => Posting::where('jenis', 'kegiatan')->when($this->arsip, fn($q) => $q->where('created_at', 'like', $this->arsip . '%'))->when($this->kategori, fn($q) => $q->where('kategori_id', $this->kategori))->orderBy('created_at', 'desc')->paginate(3),
      'terpopuler' => Posting::withCount('hit')->orderBy('hit_count', 'desc')->take(5)->get(),
      'dataKategori' => Kategori::withCount('posting')->orderBy('posting_count', 'desc')->take(5)->get(),
      'dataArsip' => Posting::select(DB::raw('left(created_at,7) as tanggal'))->groupBy(DB::raw('left(created_at,7)'))->orderBy('tanggal', 'asc')->get(),
    ])
      ->extends('layouts.app');
  }
}
