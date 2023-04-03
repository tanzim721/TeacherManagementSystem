<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachersListModel extends Model
{
    public $table='teachers_list_models';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
