<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Order extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice()
    {
        $sum = 0;

        foreach($this->products as $product){
            $sum += $product->getPriceForCount();
        }

        return $sum;
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'comment',
    ];

    public static function getOrderId()
    {
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('home');
        } else{
            $order =self::find($orderId);
        }
        return $order;
    }

    public function saveOrder($array)
    {
      
        if ($this->status == 0) {
            $this->name =  $array['name'];
            $this->email =  $array['email'];
            $this->phone =  $array['phone'];
            $this->address =  $array['country'] .', '.  $array['city'] .', '. $array['address'];
            $this->comment =  $array['comment'];
            $this->status = 1;
            $this->save();

            return true;
        } else {
           return false;
        }
    }
}
