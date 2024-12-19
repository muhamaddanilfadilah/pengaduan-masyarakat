<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseProgress extends Model
{
    use HasFactory;

    protected $fillable = [
        'response_id',
        'histories',
    ];

    protected $casts = [
        'histories' => 'array',
    ];

    // Relasi ke Response
    public function response()
    {
        return $this->belongsTo(Response::class);
    }
}
