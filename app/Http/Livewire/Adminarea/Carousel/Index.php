<?php

namespace App\Http\Livewire\Adminarea\Carousel;

use App\Models\Carousel;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Index extends Component
{
  public $cari, $status = 1, $key;
  protected $paginationTheme = 'bootstrap';
  protected $queryString = ['cari', 'status'];

  public function setKey($key = null)
  {
    $this->key = $key;
  }

  public function hapus()
  {
    $data = Carousel::findOrFail($this->key);
    File::delete(public_path('storage/' . $data->gambar));
    $data->forceDelete();
    $this->key = null;
    session()->flash('success', 'Data deleted successfully');
  }

  public function render()
  {
    $data = Carousel::all();
    return view('livewire.adminarea.carousel.index', [
      'data' => $data,
    ])
      ->extends('layouts.admin');
  }
}
