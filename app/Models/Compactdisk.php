<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compactdisk extends Model
{
    use HasFactory, HasUuids;

    protected $primarykey = 'compactdisk';
    protected $fillable =
    [
        'artist',
        'album',
        'deskripsi',
        'harga',
        'gambar',
        'spotify',
        
    ];
}
