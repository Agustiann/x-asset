<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class XcodeAdmin extends Authenticatable
{
    use HasFactory;

    protected $table = 'xcode_admin';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
    ];
}
