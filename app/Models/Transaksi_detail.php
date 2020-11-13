<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_detail extends Model
{
    use HasFactory;

    protected $table = "transaksi_details";
    
    public function transaksi(){
        return $this->belongsTo('App\Models\Transaksi');
    }
    public function barang(){
        return $this->belongsTo('App\Models\Barang');
    }
}
