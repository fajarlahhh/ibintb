<?php

namespace App\Http\Livewire\Adminarea;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

  public function submit()
  {
    Auth::logout();
    return redirect('/login');
  }

  public function render()
  {
    return view('livewire.adminarea.logout')
      ->extends('layouts.admin');
  }
}
