<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    //設定Model到對應的資料表
    protected $table = 'applys';

    protected $fillable = [
        'class_id',
        'user_class',
        'user_name',
        'user_phone',
        'req_date',
        'req_start',
        'req_end',
        'req_reason',
    ];
}
