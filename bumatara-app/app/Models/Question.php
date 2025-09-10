<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    protected $primaryKey = 'id';
    public $timestamps = false; // karena kita pakai create_at custom

    protected $fillable = [
        'name',
        'question',
        'answer',
        'create_at',
        'create_user',
        'ip_address',
        'device_info',
        'active_sts'
    ];
}
