<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'subject', 'message',
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function category()
  {
    return $this->belongsTo('App\ServiceCategory', 'base_category_id');
  }
}
