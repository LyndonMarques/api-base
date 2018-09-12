<?php

namespace App;

use App\Quotation;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Quotation
{
    protected static $singleTableType = 'sponsorship';

}
