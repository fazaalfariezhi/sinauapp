<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function pelajaran()
    {
        return $this->hasMany(Pelajaran::class);
    }
    public function materi()
    {
        return $this->hasMany(Materi::class);
    }

}
