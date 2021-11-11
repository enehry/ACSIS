<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'table',
    'table_id',
    'is_viewed',
    'description',
    'title',
  ];

  public function unreadNotifications()
  {
    return $this->where('is_viewed', 0)->get();
  }

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function meeting()
  {
    return $this->belongsTo(Meeting::class, 'table_id')->with('user');
  }
}
