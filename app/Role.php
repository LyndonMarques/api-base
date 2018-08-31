<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \TCG\Voyager\Models\Role
{
  public function users()
  {
      return $this->belongsToMany('App/User');
  }
}
