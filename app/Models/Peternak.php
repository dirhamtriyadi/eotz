<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peternak extends Model
{
    use HasFactory;

    protected $table = 'peternak';

    protected $fillable = [
        'no_hp',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
