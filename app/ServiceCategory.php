<?php

namespace App;

use App\BaseCategory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends BaseCategory
{
  protected static $singleTableType = 'service_category';

  public function quotations()
  {
    return $this->hasMany('App\Quotation');
  }

  public function contacts()
  {
    return $this->hasMany('App\Contact');
  }
}
