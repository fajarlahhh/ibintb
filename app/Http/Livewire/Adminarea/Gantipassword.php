<?php

namespace App\Http\Livewire\Adminarea;

use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Gantipassword extends Component
{
  public $passwordLama, $passwordBaru;

  public function submit()
  {
    $this->validate([
      'passwordLama' => 'required',
      'passwordBaru' => 'required',
    ]);

    $id = Auth::id();
    $pengguna = Pengguna::findOrFail($id);
    if ($pengguna) {
      if (!Hash::check($this->passwordLama, $pengguna->kata_sandi)) {
        session()->flash('danger', 'Data saving failed. Wrong old password');
      } else {
        $pengguna->kata_sandi = Hash::make($this->passwordBaru);
        $pengguna->save();

        session()->flash('success', 'Data saved successfully');
      }
    } else {
      session()->flash('danger', 'Data saving failed. Data not found');
    }
  }

  public function render()
  {
    return view('livewire.adminarea.gantipassword')
      ->extends('layouts.admin');
  }
}
