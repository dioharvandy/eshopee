<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";

    public function transaksidetails(){
        return $this->hasMany('App\Models\Transaksi_detail');
    }
}
