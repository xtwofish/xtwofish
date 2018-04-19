<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //設定Model到對應的資料表
    protected $table = 'classrooms';

    protected $fillable = [
        'name',
        'type',
        'typename',
        'photo',
        'status'
    ];
}
