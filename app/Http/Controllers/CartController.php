<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
        return view('web.cart.index', compact('order'));
    }

    public function addBasket($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }
        $product = Product::find($productId);
        session()->flash('success', 'the product '.  $product->title .' is added');
        return redirect()->back();
    }

    public function removeBasket($productId)
    {
        $order = Order::getOrderId();

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        $product = Product::find($productId);
        session()->flash('error', 'the product '.  $product->title .' is removed of basket');
        return redirect()->back();
    }
}
