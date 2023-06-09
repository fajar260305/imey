<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id']; 

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id', 'id');
    }
}
