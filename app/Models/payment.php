<?php

namespace App\Models;

use App\Models\Kaset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class payment extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'payments';
    protected $fillable =
    [
        'name',
        'address',
        'phone',
        'status',
        'quantity',
        'kaset_id',
        'compactdisk_id',
        'total_price',
    ];
    public function kaset()
    {
        return $this->hasMany(Kaset::class,'kaset_id');
    }

    public function compactdisk()
    {
        return $this->hasMany(compactdisk::class,'compactdisk_id');
    }
}
