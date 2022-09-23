<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    
    //proses memanggil table
    protected $table = "pelanggan";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama'];

    public function pesanan(){
         return $this->hasMany(Pesanan::class);
    }

    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }

}
