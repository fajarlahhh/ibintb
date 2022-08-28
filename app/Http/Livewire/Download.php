<?php

namespace App\Http\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Response;
use Livewire\Component;
use Livewire\WithPagination;

class Download extends Component
{
  use WithPagination;
  public $cari;

  protected $queryString = ['cari'];
  protected $paginationTheme = 'bootstrap';

  public function download($id)
  {
    $data = File::findOrFail($id);

    return Response::download(public_path('storage/' . $data->file), $data->nama . '.' . $data->jenis);
  }

  public function updated()
  {
    $this->resetPage();
  }

  public function render()
  {
    return view('livewire.download', ['i' => ($this->page - 1) * 10, 'data' => File::where('nama', 'like', '%' . $this->cari . '%')->paginate(10)])
      ->extends('layouts.app');
  }
}
