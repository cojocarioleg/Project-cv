<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CartController extends Controller
{
    public function index()
    {
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        return view('web.cart.index', compact('order'));
    }

    public function addBasket($productId)
    {
        $orderId = session('orderId');

        if(is_null($orderId)){
            $order = Order::create()->id;
            session(['orderId' => $order]);
        }else{
            $order = Order::find($orderId);
        }

        $order->products()->attach($productId);

        return redirect()->back();
    }
}
