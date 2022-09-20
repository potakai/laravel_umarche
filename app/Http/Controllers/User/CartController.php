<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $itemIncart = Cart::where('product_id', $request->product_id)
        ->where('user_id', Auth::id())->first();

        if($itemIncart){
            $itemIncart->quantity += $request->quantity;
            $itemIncart->save();

        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }
        dd('テスト');
    }
}