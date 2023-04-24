<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleModel extends Model
{
    public $table='schedule';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
    
}
