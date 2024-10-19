<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelAndCategory extends Model
{
    protected $table = 'levels_and_categories';
    protected $primaryKey = 'level_and_category';
    public $incrementing = false;
    protected $keyType = 'string';

    public function unitOfMeasures()
    {
        return $this->hasMany(UnitOfMeasure::class, 'level_and_category');
    }

    public function unitOfMeasures2()
    {
        return $this->hasMany(UnitOfMeasure::class, 'level_and_category2');
    }
}
