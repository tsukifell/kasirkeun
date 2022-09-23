<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    //proses memanggil table
    protected $table = "transaksi";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'pelanggan_id', 'menu_id', 'jumlah',  'dibuat'];

    public function pesanan(){
        return $this->belongsTo(Pesanan::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class);
    }

}