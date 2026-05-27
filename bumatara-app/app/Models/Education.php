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

    public static function getVideo_education($kategori = null, $cari = null)
    {
        // Menggunakan Query Builder agar fitur ->paginate() bawaan Laravel berfungsi normal
        $query = DB::table('education as e')
            ->select(
                'e.judul',
                'e.link',
                'e.kategori as value_kategori',
                'pc.content as kategori',
                'e.deskripsi',
                DB::raw('DATEDIFF(NOW(), e.created_at) AS time_ago_day'),
                DB::raw("CONCAT('https://img.youtube.com/vi/', SUBSTRING_INDEX(SUBSTRING_INDEX(e.link, 'v=', -1), '&', 1), '/maxresdefault.jpg') AS thumbnail")
            )
            ->leftJoin('prm_core as pc', 'pc.value', '=', 'e.kategori')
            ->where('e.sts_active', 1)
            ->where('pc.parameter', 'edukasi');

        // Filter Kondisional Kategori jika dipilih
        if (!empty($kategori)) {
            $query->where('e.kategori', $kategori);
        }

        // Filter Kondisional Pencarian Judul jika diisi
        if (!empty($cari)) {
            $query->where('e.judul', 'like', '%' . $cari . '%');
        }

        // Membatasi output maksimal 12 data per halaman dan mengaktifkan instance pagination
        return $query->paginate(12);
    }

   public static function getVideo_kategori()
    {
    return DB::select("
    SELECT
    DISTINCT
    (e.kategori ) value_kategori,
    pc.content AS kategori
    FROM education e
    LEFT JOIN prm_core pc ON pc.value = e.kategori
    WHERE e.sts_active = 1
    AND pc.parameter = 'edukasi' ;
    ");

    }








}
