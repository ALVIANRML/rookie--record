<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaset extends Model
{
    use HasFactory, HasUuids;

    protected $primarykey = 'kaset_id';
    protected $fillable =
    [
        'artist',
        'album',
        'deskripsi',
        'harga',
        'gambar',
        'link_spotify',
    ];

    public function payments()
    {
        return $this->belongsTo(payment::class,'payment_id');
    }
}
