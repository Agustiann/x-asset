<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ruangan;

class Asset extends Model
{
    use HasFactory;
    protected $table = 'xcode_asset';

    public $timestamps = false;
    protected $fillable = [
        'nama_pc',
        'processor',
        'ram',
        'vga',
        'kapasitas_penyimpanan',
        'tipe_penyimpanan',
        'monitor',
        'status',
        'createdBy',
        'createdDate',
        'updatedBy',
        'updatedDate',
        'id_ruangan',
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }
}
