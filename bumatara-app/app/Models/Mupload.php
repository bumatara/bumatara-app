<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mupload extends Model
{
    //
     public static function getkategorivideo()
    {
        return DB::select("
        select id,parameter,value,content 
        from prm_core pc 
        where parameter = 'edukasi' and sts_delete = 0
        ");
    }

     public static function getkategorisystem()
    {
        return DB::select("
        select id,parameter,value,content 
        from prm_core pc 
        where parameter = 'system' and sts_delete = 0
        ");
    }
}