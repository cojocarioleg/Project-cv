<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $user = Auth::user();
        $order = Order::getOrderId();
        $result = $order->saveOrder($request->all());

        if($result)
        {
            session()->forget('orderId');
            Mail::to($user->email)->send(new OrderShipped($order));
            session()->flash('success', 'your order is processed successfully');
        } else{
            session()->forget('orderId');
            session()->flash('error', 'we are sorry, something went wrong, try again');
        }

        return redirect()->route('home');
    }
}
