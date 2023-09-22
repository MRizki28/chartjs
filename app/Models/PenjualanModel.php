<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanModel extends Model
{
    use HasFactory;
    protected $table = 'tb_penjualan';
    protected $fillable = [
        'id' , 'total_penjualan' , 'created_at' , 'updated_at'
    ];
}
