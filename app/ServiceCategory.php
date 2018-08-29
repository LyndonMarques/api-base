<?php

namespace App;

use App\BaseCategory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends BaseCategory
{
  protected static $singleTableType = 'service_category';

  public function quotation()
  {
    return $this->hasMany('App\Quotation');
  }
}
