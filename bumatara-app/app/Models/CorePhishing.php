<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorePhishing extends Model
{
    protected $table = 'core_phishings';

    protected $fillable = [
        'id_user',
        'create_ip',
        'url',
        'prediction',
        'confidence',
        'domain',
        'phishing_probability',
        'nameservers',
        'features',
        'extracted_content',
        'adjusted_confidence',
        'final_prediction',
        'final_confidence',
        'trusted_domain',
        'llm_analysis',
        'create_user',
    ];

    protected $casts = [
        'nameservers' => 'array',
        'features' => 'array',
        'extracted_content' => 'array',
    ];

    // Define relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
