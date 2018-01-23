<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Auth;

class Cart extends Model
{
    public $items = null;
    public $totalQuantity = 1;
    public $totalPrice = 0;
    const tax = 13;
    public $taxAmount=0;
    public $totalAfterTax = 0;

    // public $Product_price=0;

    public function __construct($oldcart)
    {
        if ($oldcart) {
            $this->items = $oldcart->items;
            $this->totalQuantity = $oldcart->totalQuantity;
            $this->totalPrice = $oldcart->totalPrice;
            $this->taxAmount=$oldcart->taxAmount;
            $this->totalAfterTax=$oldcart->totalAfterTax;
        }

    }

    public function add($item, $id, $quantity)
    {
            $storedItem = ['qty' => $quantity, 'price' => $item->Product_price, 'item' => $item];
            $this->totalQuantity = count($this->items);
            if (!empty($this->items)) {
                if (array_key_exists($id, $this->items)) {
                    $storedItem = $this->items[$id];//overriding the value getting stored in fist storedItem variable and updating the quantities and price appropriatel
                    $storedItem['qty'] += $quantity;
                    if ($storedItem['qty'] >= 4) {
                        $storedItem['qty'] = 4;
                        $this->totalPrice = 0;
                        $this->taxAmount = 0;
                        $this->totalAfterTax = 0;
                    } else {
                        $this->ResetCart();
                    }

                }

                $this->totalQuantity++;
            } else {
                $this->items = null;
                $this->ResetCart();
            }
            $storedItem['price'] = $item->Product_price * $storedItem['qty'];
            $this->items[$id] = $storedItem;
            $this->totalQuantity = count($this->items);
            $this->totalPrice = $this->totalPrice + ($storedItem['price']);
            $this->taxAmount = ($this->totalPrice * 13) / 100;
            $this->totalAfterTax = $this->totalPrice + $this->taxAmount;
    }

    public function removeProduct($id, $item, $quantity)
    {
        if (!empty($this->items)) {
            if (array_key_exists($id, $this->items)) {
                $this->totalPrice = $this->totalPrice - ($item->Product_price * $quantity);
                //var_dump($quantity);
                //var_dump($this->totalPrice - ($item->Product_price * $quantity));
                //var_dump($this->totalPrice);
                unset($this->items[$id], $item);
                $this->totalQuantity = count($this->items);
                $this->taxAmount = ($this->totalPrice * 13) / 100;
                $this->totalAfterTax = $this->totalPrice + $this->taxAmount;
            }
        } else {
            $this->items = null;
            $this->ResetCart();
        }
    }

    public function ResetCart(){
        $this->totalPrice=0;
        $this->totalAfterTax=0;
        $this->taxAmount=0;
    }

}
