<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticeModel extends Model
{
    public $table='notice_models';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
