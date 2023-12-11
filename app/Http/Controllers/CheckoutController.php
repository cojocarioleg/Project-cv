<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $order = Order::getOrderId();
        return view('web.checkout.index', compact('order', 'user'));
    }

    public function confirm(Request $request)
    {
        $order = Order::getOrderId();
        $result = $order->saveOrder($request->all());

        if($result)
        {
            session()->forget('orderId');
            session()->flash('success', 'your order is processed successfully');
        } else{
            session()->flash('error', 'we are sorry, something went wrong, try again');
        }

        return redirect()->route('home');
    }
}
