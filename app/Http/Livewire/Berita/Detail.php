<?php

namespace App\Http\Livewire\Berita;

use App\Models\Hit;
use App\Models\Kategori;
use App\Models\Posting;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Detail extends Component
{
  public $key, $data;

  public function mount($key)
  {
    $this->key = $key;
    $this->data = Posting::where('jenis', 'berita')->withCount('hit')->where('id', $this->key)->firstOrFail();
    Hit::insert([
      'posting_id' => $this->data->id,
      'created_at' => now(),
      'updated_at' => now(),
    ]);
  }

  public function render()
  {
    return view('livewire.berita.detail', [
      'terpopuler' => Posting::where('jenis', 'berita')->withCount('hit')->orderBy('hit_count', 'desc')->take(5)->get(),
      'dataKategori' => Kategori::where('jenis', 'berita')->withCount('posting')->whereHas('posting', fn($q) => $q->where('jenis', 'berita'))->orderBy('posting_count', 'desc')->get(),
      'dataArsip' => Posting::select(DB::raw('left(created_at,7) as tanggal'))->groupBy(DB::raw('left(created_at,7)'))->orderBy('tanggal', 'asc')->get(),
    ])
      ->extends('layouts.app');
  }
}
