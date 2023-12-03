<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Network;
use App\Models\Order;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //paginate
        Paginator::useBootstrap();

        $networks = Network::all();
        $contact = Contact::first();


        View::share([
            'networks' => $networks,
            'contact' => $contact,
        ]);

        View::composer('web/layouts/nav', function ($view) {
            $order = null;
            $categories = Category::orderBy('id')->get();
            $orderId = session('orderId');
            if (!is_null($orderId)) {
                $order = Order::findOrFail($orderId);
            }
            $view->with(['categories' => $categories, 'order' => $order]);
        });


        View::composer('web/layouts/cart', function ($view) {
            $order = null;
            $orderId = session('orderId');
            if (!is_null($orderId)) {
                $order = Order::findOrFail($orderId);
            }
            $view->with('order', $order);
        });
    }
}
