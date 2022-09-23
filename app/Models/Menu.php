<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    //calling table manually
    protected $table = "menu";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama', 'kategori', 'harga'];

    public function pesanan(){
         return $this->hasMany(Pesanan::class);
    }

    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }

}
