<?php

namespace CEstados\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class States extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'initials',
        'historic'
    ];

}
