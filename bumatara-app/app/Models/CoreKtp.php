<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreKtp extends Model
{   
    protected $fillable = [
        'nik','nama','tempat_lahir','tgl_lahir','jk',
        'alamat','desa','kec','agama','sts_kawin',
        'pekerjaan','warganegara','masa_berlaku','create_user','last_update',
    ];

    protected $casts = [
        'tgl_lahir'   => 'date',
        'last_update' => 'datetime',
    ];

    public function histories()
    {   
        // FK custom: ktp_histories.id_ktp
        return $this->hasMany(KtpHistory::class, 'id_ktp');
    }

    // scope pencarian
    public function scopeSearch($q, ?string $s)
    {
        if (!$s) return $q;
        return $q->where('nik','like',"%$s%")
                 ->orWhere('nama','like',"%$s%");
    }
}
