<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderController extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'article_code',
        'article_name',
        'order_code',
        'order_date',
        'total_amount_without_discount',
        'total_amount_with_discount'
    ];
}
