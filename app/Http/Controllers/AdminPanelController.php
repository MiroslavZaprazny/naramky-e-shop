<?php

namespace App\Http\Controllers;

use App\Models\Bracelet;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'bracelets' => Bracelet::select('id', 'title', 'price', 'created_at', 'qty_in_stock')->get(),
            'orders' => Order::all()
        ]);
    }
}
