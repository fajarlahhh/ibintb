<?php

namespace App\Http\Livewire\Adminarea\Carousel;

use App\Models\Carousel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
  use WithFileUploads;
  public $key, $data, $back, $keterangan, $file;

  public function submit()
  {
    if ($this->key) {
      $this->validate([
        'keterangan' => 'required',
      ]);
    } else {
      $this->validate([
        'keterangan' => 'required',
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

    $this->data->keterangan = $this->keterangan;
    if ($file) {
      $this->data->gambar = str_replace('public/', 'storage/', $file);
    }
    $this->data->save();
    session()->flash('success', 'Data saved successfully');
    redirect()->to($this->back);
  }

  public function mount()
  {
    $this->back = Str::contains(url()->previous(), ['tambah', 'edit']) ? '/carousel/' . strtolower(str_replace(' ', '', $this->jenis)) : url()->previous();
    if ($this->key) {
      $this->data = Carousel::findOrFail($this->key);
      $this->keterangan = $this->data->keterangan;
    } else {
      $this->data = new Carousel();
    }
  }
  public function render()
  {
    $this->emit("reinitialize");
    return view('livewire.adminarea.carousel.form')
      ->extends('layouts.admin');
  }
}
