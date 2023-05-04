<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RollModel extends Model
{
    public $table='roll_models';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
