<?php

namespace App\Http\Livewire\Adminarea\Datamaster\Kategori;

use App\Models\Kategori;
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
    Kategori::findOrFail($this->key)->delete();
    $this->key = null;
    session()->flash('success', 'Data deleted successfully');
  }

  public function render()
  {
    $data = Kategori::all();
    return view('livewire.adminarea.datamaster.kategori.index', [
      'data' => $data,
    ])
      ->extends('layouts.admin');
  }
}
