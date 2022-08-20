<?php

namespace App\Http\Livewire\Adminarea\Pengumuman;

use App\Models\Posting;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
  use WithPagination;
  public $cari, $status = 1, $key;
  protected $paginationTheme = 'bootstrap';
  protected $queryString = ['cari', 'status'];

  public function updated()
  {
    $this->resetPage();
  }
  public function setKey($key = null)
  {
    $this->key = $key;
  }

  public function restore()
  {
    Posting::withTrashed()->findOrFail($this->key)->restore();
    $this->key = null;
    $this->resetPage();
    session()->flash('success', 'Data restored successfully');
  }

  public function hapus()
  {
    Posting::findOrFail($this->key)->delete();
    $this->key = null;
    $this->resetPage();
    session()->flash('success', 'Data deleted successfully');
  }

  public function hapusPermanen()
  {
    $data = Posting::findOrFail($this->key);
    File::delete(public_path('storage/' . $data->file));
    $data->forceDelete();
    $this->key = null;
    $this->resetPage();
    session()->flash('success', 'Data deleted successfully');
  }

  public function render()
  {
    $data = Posting::with('kategori')->where('judul', 'like', '%' . $this->cari . '%')->where('jenis', 'pengumuman');

    switch ($this->status) {
      case 2:
        $data = $data->onlyTrashed();
        break;
      case 3:
        $data = $data->withTrashed();
        break;
    }
    return view('livewire.adminarea.pengumuman.index', [
      'data' => $data->paginate(10),
    ])
      ->extends('layouts.admin');
  }
}
