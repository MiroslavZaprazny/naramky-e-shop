<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCustomerPersonalInfo extends Model
{
    use HasFactory;

    protected $table = 'order_customer_personal_info';

    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'address',
        'zip',
        'town',
        'email',
        'phone_number'
    ];
}
