<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    //proses memanggil table
    protected $table = "pesanan";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'menu_id', 'pelanggan_id', 'jumlah', 'dibuat'];

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }

    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }
    
}
