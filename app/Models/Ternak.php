<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ternak extends Model
{
    use HasFactory;

    protected $table = 'ternak';

    protected $fillable = [
        'nomor_ring',
        'seri_burung',
        'jenis_kelamin',
        'tanggal_netas',
        'indukan_jantan',
        'seri_indukan_jantan',
        'indukan_betina',
        'seri_indukan_betina',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
