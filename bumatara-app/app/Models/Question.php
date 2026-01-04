<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    protected $table = 'question';
    protected $primaryKey = 'id';
    public $timestamps = false;

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

    // ✅ METHOD AMBIL DATA (INI YANG DIPANGGIL CONTROLLER)
    public static function getActiveQuestion()
    {
        return DB::select("
            SELECT 
                name,
                question,
                answer,
                DATEDIFF(NOW(), create_at) AS time_ago_day
            FROM question
            WHERE active_sts = 1
        ");
    }
}
