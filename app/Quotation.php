<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event', 'guest', 'quoted_items',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'event' => 'array',
        'guest' => 'array',
        'quoted_items' => 'array'
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
