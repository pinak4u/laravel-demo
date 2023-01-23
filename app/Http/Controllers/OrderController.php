<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function testFunction(Request $request,Order $order)
    {
        return $order->items;
    }

    public function updateFunction(Request $request, Order $order)
    {
        return $order->load('items');
    }
}
