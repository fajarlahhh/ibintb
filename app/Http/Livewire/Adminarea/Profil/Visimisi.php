<?php

namespace App\Http\Livewire\Adminarea\Profil;

use App\Models\Profil;
use Livewire\Component;

class Visimisi extends Component
{
  public $isi, $data;

  protected $listeners = [
    'set:setisi' => 'setIsi',
  ];

  public function setIsi($isi)
  {
    $this->isi = $isi;
  }

  public function submit()
  {
    $this->validate([
      'isi' => 'required',
    ]);
    $this->data->isi = $this->isi;
    $this->data->jenis = 'visimisi';
    $this->data->save();

    session()->flash('success', 'Data saved successfully');
  }

  public function mount()
  {
    $this->data = Profil::where('jenis', 'visimisi')->get();
    if ($this->data->count() > 0) {
      $this->data = $this->data->first();
      $this->isi = $this->data->isi;
    } else {
      $this->data = new Profil();
    }
  }

  public function render()
  {
    return view('livewire.adminarea.profil.visimisi')
      ->extends('layouts.admin');
  }
}
