<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KtpHistory extends Model
{
    protected $fillable = [
        'id_ktp', 'id_kuota', 'ip_address', 'device_info', 'last_update',
    ];

    protected $casts = [
        'last_update' => 'datetime',
    ];

    public function ktp()
    {
        // FK custom: core_ktps.id
        return $this->belongsTo(CoreKtp::class, 'id_ktp');
    }
}
