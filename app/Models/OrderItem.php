<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'bracelet_id',
        'price',
        'qty'
    ];

    public function bracelet()
    {
        return $this->belongsTo(Bracelet::class);
    }
}
