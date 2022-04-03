<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function mentor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class);
    }
    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }
}
