<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
  use HasFactory;
  protected $fillable = [
    'who',
    'what',
    'where',
    'when',
    'how',
    'why',
    'description',
    'user_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
