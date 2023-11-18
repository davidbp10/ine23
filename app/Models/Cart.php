<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $htItem = [];
    public $iTotalItems = 0;
    public $dTotalPrice = 0;    

    public function __construct(Cart $cart = null) {
        if ($cart !== null) {
            $this->htItem = $cart->htItem;
            $this->iTotalItems = $cart->iTotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;
        }
     }
    
    public function Add(Product $product) {
        $productId = $product->id;
        $productInfo = [
            'id' => $productId,
            'name' => $product->name,
            'imgUrl' => $product->imgUrl,
            'price' => $product->price,
            'discount' => $product->discountPercent,
            'quantity' => 1
        ];
     
        if (!array_key_exists($productId, $this->htItem)) {
            $this->htItem[$productId] = $productInfo;
        } else {
            $this->htItem[$productId]['quantity'] += 1;
        }
     
        $this->iTotalItems += 1;

        if ($product->HasDiscount())
            $this->dTotalPrice += number_format($product->price * (1 - $product->discountPercent), 2, '.', '');
        else $this->dTotalPrice += $product->price;
    }
     
    public function Remove(Product $product) {
        $productId = $product->id;
      
        if (array_key_exists($productId, $this->htItem)) {
            if ($this->htItem[$productId]['quantity'] > 0) {
                $this->htItem[$productId]['quantity'] -= 1;
                $this->iTotalItems -= 1;
                if ($product->HasDiscount())
                    $this->dTotalPrice -= number_format($product->price * (1 - $product->discountPercent), 2, '.', '');
                else $this->dTotalPrice -= $product->price;
            }
        }
    }

    public function RemoveAll(Product $product) {
        $productId = $product->id;
      
        if (array_key_exists($productId, $this->htItem)) {
            $this->iTotalItems -= $this->htItem[$productId]['quantity'];
            $this->dTotalPrice -= $this->htItem[$productId]['quantity'] * $product->price;
            unset($this->htItem[$productId]);
        }
    }
}
