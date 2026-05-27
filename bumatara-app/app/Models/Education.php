<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Education extends Model
{
  
    public static function getVideo()
    {
         return DB::select("
            
         SELECT 
            e.judul, 
            e.link,
            pc.content AS kategori, 
            e.deskripsi,
            DATEDIFF(NOW(), e.created_at) AS time_ago_day,
            -- Query untuk generate URL Thumbnail YouTube otomatis
            CONCAT('https://img.youtube.com/vi/', SUBSTRING_INDEX(SUBSTRING_INDEX(e.link, 'v=', -1), '&', 1), '/maxresdefault.jpg') AS thumbnail
        FROM education e 
        LEFT JOIN prm_core pc ON pc.value = e.kategori
        WHERE e.sts_active = 1 
        AND pc.parameter = 'edukasi' 
        AND e.view_at_dashboard = 1;   
         ");
    }
}
