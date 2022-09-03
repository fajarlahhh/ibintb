<?php

namespace App\Http\Livewire\Adminarea\File;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $data, $back, $nama, $file;

    public function submit()
    {
        $this->validate([
            'nama' => 'required',
            'file' => 'required',
        ]);
        $file = '';
        $file = $this->file->store('public/file');

        $this->data->nama = $this->nama;
        if ($file) {
            $this->data->gambar = str_replace('public/', 'storage/', $file);
        }
        $this->data->save();
        session()->flash('success', 'Data saved successfully');
        redirect()->to($this->back);
    }

    public function mount()
    {
        $this->back = Str::contains(url()->previous(), ['tambah', 'edit']) ? '/admin-area/file/' : url()->previous();
        $this->data = new \App\Models\File();
    }

    public function render()
    {
        $this->emit("reinitialize");
        return view('livewire.adminarea.file.form')
            ->extends('layouts.admin');
    }
}
