<?php

namespace App;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use Sortable;

    public $sortable = [
        'model',
        'ver',
        'num',
        'manufacturer',
        'vender_id',
        'year',
        'week',
    ];
}
