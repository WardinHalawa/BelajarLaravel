<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produks extends Model
{
    protected $table = 'tb_produk';

    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'nama_barang',
        'jenis_barang',
        'harga_barang'
    ];
}