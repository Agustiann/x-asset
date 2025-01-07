<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'xcode_ruangan';

    public function assets()
    {
        return $this->hasMany(Asset::class, 'id_ruangan');
    }
}
