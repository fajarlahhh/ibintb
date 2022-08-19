<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
  use HasFactory;
  protected $table = 'posting';

  public function hit()
  {
    return $this->hasMany(Hit::class);
  }

  public function kategori()
  {
    return $this->belongsTo(Kategori::class);
  }
}
