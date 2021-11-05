<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceStratMngUnit extends Model
{
  use HasFactory;
  protected $fillable = [
    'position',
    'sector',
    'user_id',
    'other_title',
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
