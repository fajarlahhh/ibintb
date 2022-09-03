<?php

namespace App\Http\Livewire\Adminarea\File;

use App\Models\File;
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

    public function hapus()
    {
        File::findOrFail($this->key)->delete();
        $this->key = null;
        $this->resetPage();
        session()->flash('success', 'Data deleted successfully');
    }

    public function render()
    {
        $data = File::where('nama', 'like', '%' . $this->cari . '%');
        return view('livewire.adminarea.file.index', [
            'data' => $data->paginate(10),
        ])->extends('layouts.admin');
    }
}
