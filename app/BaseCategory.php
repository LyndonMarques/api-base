<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class BaseCategory extends Model
{
    use SingleTableInheritanceTrait;

    protected $table = "base_categories";

    protected static $singleTableTypeField = 'type';
    protected static $singleTableSubclasses = [ServiceCategory::class, ReportCategory::class];

    protected $fillable = ['type', 'name', 'slug'];
}
