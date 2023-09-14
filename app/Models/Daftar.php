<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function prodi(){
        return $this->hasMany(Prodi::class);
    }
}
