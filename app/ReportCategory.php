<?php

namespace App;

use App\BaseCategory;
use Illuminate\Database\Eloquent\Model;

class ReportCategory extends BaseCategory
{
  protected static $singleTableType = 'service_category';
}