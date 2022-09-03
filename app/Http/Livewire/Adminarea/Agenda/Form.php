<?php

namespace App\Http\Livewire\Adminarea\Agenda;

use App\Models\Agenda;
use Illuminate\Support\Str;
use Livewire\Component;

class Form extends Component
{
    public $key, $data, $back, $judul, $lokasi, $waktu;

    protected $listeners = [
        'set:setwaktu' => 'setWaktu',
    ];

    public function setWaktu($waktu)
    {
        $this->waktu = $waktu;
    }

    public function submit()
    {
        $this->validate([
            'judul' => 'required',
            'lokasi' => 'required',
            'waktu' => 'required',
        ]);
        $this->data->judul = $this->judul;
        $this->data->lokasi = $this->lokasi;
        $this->data->waktu = $this->waktu;
        $this->data->save();
        session()->flash('success', 'Data saved successfully');
        redirect()->to($this->back);
    }

    public function mount()
    {
        $this->back = Str::contains(url()->previous(), ['tambah', 'edit']) ? '/admin-area/agenda/' : url()->previous();
        if ($this->key) {
            $this->data = Agenda::findOrFail($this->key);
            $this->judul = $this->data->judul;
            $this->lokasi = $this->data->lokasi;
            $this->waktu = $this->data->waktu;
        } else {
            $this->data = new Agenda();
        }
    }

    public function render()
    {
        $this->emit("reinitialize");
        return view('livewire.adminarea.agenda.form')
            ->extends('layouts.admin');
    }
}
