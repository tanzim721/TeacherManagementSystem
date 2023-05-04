<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionModel extends Model
{
    public $table='session_models';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
