<?php

namespace App\Http\Livewire;

use App\Models\Posting;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'kegiatan' => Posting::where('jenis', 'kegiatan')->withCount('hit')->orderBy('created_at', 'desc')->take(5)->get(),
            'berita' => Posting::where('jenis', 'berita')->withCount('hit')->orderBy('created_at', 'desc')->take(5)->get(),
            'pengumuman' => Posting::where('jenis', 'pengumuman')->withCount('hit')->orderBy('created_at', 'desc')->take(5)->get(),
        ])
            ->extends('layouts.app');
    }
}
