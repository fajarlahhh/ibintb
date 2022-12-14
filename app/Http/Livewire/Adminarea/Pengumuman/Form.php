<?php

namespace App\Http\Livewire\Adminarea\Pengumuman;

use App\Models\Kategori;
use App\Models\Posting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
  use WithFileUploads;
  public $key, $data, $back, $judul, $isi, $file;

  protected $listeners = [
    'set:setisi' => 'setIsi',
  ];

  public function setIsi($isi)
  {
    $this->isi = $isi;
  }

  public function submit()
  {
    if ($this->key) {
      $this->validate([
        'judul' => 'required',
        'isi' => 'required',
      ]);
    } else {
      $this->validate([
        'judul' => 'required',
        'isi' => 'required',
        'file' => 'required',
      ]);
    }
    $file = '';
    if ($this->key) {
      if ($this->file) {
        File::delete(public_path('storage/' . $this->data->file));
        $file = $this->file->store('public/file');
      }
    } else {
      $file = $this->file->store('public/file');
    }

    $this->data->judul = $this->judul;
    $this->data->isi = $this->isi;
    $this->data->jenis = 'pengumuman';
    if ($file) {
      $this->data->gambar = str_replace('public/', '', $file);
    }
    $this->data->save();
    session()->flash('success', 'Data saved successfully');
    redirect()->to($this->back);
  }

  public function mount()
  {
    $this->back = Str::contains(url()->previous(), ['tambah', 'edit']) ? '/admin-area/pengumuman/' : url()->previous();
    $this->dataKategori = Kategori::all();
    if ($this->key) {
      $this->data = Posting::findOrFail($this->key);
      $this->judul = $this->data->judul;
      $this->isi = $this->data->isi;
    } else {
      $this->data = new Posting();
    }
  }
  public function render()
  {
    $this->emit("reinitialize");
    return view('livewire.adminarea.pengumuman.form')
      ->extends('layouts.admin');
  }
}
