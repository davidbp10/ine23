<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function show(Request $request)
    {
        $cart = $request->session()->get('cart');
        return view('cart.show', compact('cart'));
    }
    public function add(Product $product){
        $cart = session('cart');
        $cart->add($product);
        session()->put('cart', $cart);
    }
      
    public function remove(Product $product){
        $cart = session('cart');
        $cart->remove($product);
        session()->put('cart', $cart);
    }
      
    public function removeAll(Product $product){
        $cart = session('cart');
        $cart->removeAll($product);
        session()->put('cart', $cart);
    }

    public function operate(string $sOperation, Product $product){
        switch ($sOperation) {
            case 'add':
                $this->add($product);
                break;
            case 'remove':
                $this->remove($product);
                break;
            case 'removeAll':
                $this->removeAll($product);
                break;
        }
        return $this->show(request());
    }
}
