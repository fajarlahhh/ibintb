<?php

namespace App\Http\Livewire\Adminarea;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
  public $uid, $kataSandi, $ingat = false;

  public function submit()
  {
    if (Auth::attempt(['uid' => $this->uid, 'password' => $this->kataSandi], $this->ingat)) {
      Auth::logoutOtherDevices($this->kataSandi, 'kata_sandi');
      return redirect('/admin-area');
    }

    session()->flash('danger', 'Login gagal. UID atau Kata Sandi salah');
    return redirect()->back()->withInput();
  }

  public function render()
  {
    return view('livewire.adminarea.login')
      ->extends('layouts.login');
  }
}
