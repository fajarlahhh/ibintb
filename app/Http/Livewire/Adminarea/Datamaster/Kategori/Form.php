<?php

namespace App\Http\Livewire\Adminarea\Datamaster\Kategori;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Livewire\Component;

class Form extends Component
{

    public $key, $data, $back, $jenis = "kegiatan", $nama;

    public function submit()
    {
        $this->validate([
            'jenis' => 'required',
            'nama' => 'required',
        ]);

        $this->data->nama = $this->nama;
        $this->data->jenis = $this->jenis;
        $this->data->save();
        session()->flash('success', 'Data saved successfully');
        redirect()->to($this->back);
    }

    public function mount()
    {
        $this->back = Str::contains(url()->previous(), ['tambah', 'edit']) ? '/admin-area/datamaster/kategori/' : url()->previous();
        if ($this->key) {
            $this->data = Kategori::findOrFail($this->key);
            $this->nama = $this->data->nama;
            $this->jenis = $this->data->jenis;
        } else {
            $this->data = new Kategori();
        }
    }
    public function render()
    {
        $this->emit("reinitialize");
        return view('livewire.adminarea.datamaster.kategori.form')
            ->extends('layouts.admin');
    }
}
