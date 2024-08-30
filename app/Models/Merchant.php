<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'owner_nama_lengkap',
        'owner_no_hp',
        'owner_alamat_lengkap',
        'owner_no_ktp',
        'owner_ktp',
        'merchant_nama',
        'merchant_jenis',
        'slug',
        'merchant_alamat',
        'merchant_omzet',
        'merchant_foto',
        'merchant_usaha',
        'merchant_banner',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
