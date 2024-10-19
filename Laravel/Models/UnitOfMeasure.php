<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitOfMeasure extends Model
{
    protected $table = 'units_of_measure';
    protected $primaryKey = 'common_code';
    public $incrementing = false;
    protected $keyType = 'string';

    public function levelAndCategory()
    {
        return $this->belongsTo(LevelAndCategory::class, 'level_and_category');
    }

    public function levelAndCategory2()
    {
        return $this->belongsTo(LevelAndCategory::class, 'level_and_category2');
    }
}
