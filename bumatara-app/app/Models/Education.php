<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Education extends Model
{
    protected $table = 'question'; // nama tabel

    /**
     * Ambil video / question berdasarkan status aktif
     */
    public static function getVideo($activeStatus)
    {
        return DB::select(
            "
            select e.judul, e.link,(pc.content) kategori, e.deskripsi 
            ,DATEDIFF(NOW(), e.created_at) AS time_ago_day
            from education e 
            left join prm_core pc 
            on pc.value = e.kategori
            where e.sts_active = 1 and pc.parameter = 'edukasi'
            ",
            [$activeStatus]
        );
    }
}
