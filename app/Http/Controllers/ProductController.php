<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    public function welcome()
    {
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();

        return view('welcome', compact('aProduct_offering', 'aProduct_new'));
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function addToCart(Product $product, Request $request)
    {
        $cart = new Cart($request->session()->get('cart', null));

        $cart->add($product);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.show', ['product' => $product])->with('success', 'El producto ha sido añadido al carro.');
    }
}
