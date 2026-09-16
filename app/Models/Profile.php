<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kelas',
        'npm',
        'foto'
    ];

    public function getFotoUrlAttribute()
    {
        return $this->foto 
        ? asset('storage/' . $this->foto) 
        : asset('images/default-avatar.png');
    }
}
