<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Quotation extends Model
{
  use SingleTableInheritanceTrait;

    protected $table = "quotations";

    protected static $singleTableTypeField = 'type';
    protected static $singleTableSubclasses = [Sponsorship::class, Conference::class];

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['type', 'fields'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'fields' => 'array'
    ];

    /**
     * Get the user that owns the quotation.
     */
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function category()
    {
      return $this->belongsTo('App\ServiceCategory', 'base_category_id');
    }
}
