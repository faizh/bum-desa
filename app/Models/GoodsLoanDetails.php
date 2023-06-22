<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsLoanDetails extends Model
{
    use HasFactory;
    protected $table = 'goods_loan_details';
    protected $fillable = [
        'barang_id',
        'price',
        'goods_loan_id'
    ];
}
