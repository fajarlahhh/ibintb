<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posting extends Model
{
  use HasFactory, SoftDeletes;
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
