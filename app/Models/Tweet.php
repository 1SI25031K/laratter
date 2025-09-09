<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    /** @use HasFactory<\Database\Factories\TweetFactory> */
    use HasFactory;

    //一対多で自分が多の時

    protected $fillable = ['tweet'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  //テーブル作ったらモデル
  public function liked()
  {
      return $this->belongsToMany(User::class)->withTimestamps();
  }
}