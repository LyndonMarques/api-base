<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportData extends Model
{

    protected $fillable = ['filename', 'type', 'action', 'header', 'data'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'header' => 'boolean',
        'data' => 'array'
    ];
}
