<?php

namespace App\Http\Livewire\Adminarea\Agenda;

use App\Models\Agenda;
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
        Agenda::withTrashed()->findOrFail($this->key)->restore();
        $this->key = null;
        $this->resetPage();
        session()->flash('success', 'Data restored successfully');
    }

    public function hapus()
    {
        Agenda::findOrFail($this->key)->delete();
        $this->key = null;
        $this->resetPage();
        session()->flash('success', 'Data deleted successfully');
    }

    public function hapusPermanen()
    {
        $data = Agenda::findOrFail($this->key)->forceDelete();
        $this->key = null;
        $this->resetPage();
        session()->flash('success', 'Data deleted successfully');
    }
    public function render()
    {
        $data = Agenda::where('judul', 'like', '%' . $this->cari . '%');

        switch ($this->status) {
            case 2:
                $data = $data->onlyTrashed();
                break;
            case 3:
                $data = $data->withTrashed();
                break;
        }
        return view('livewire.adminarea.agenda.index', [
            'data' => $data->paginate(10),
        ])
            ->extends('layouts.admin');
    }
}
