<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class checkoutController extends Controller
{
    public function check(Request $request){
        $items = DB:: select('SELECT * FROM `cart` JOIN `user` on cart.User_idUser = user.idUser JOIN `products` on products.idproducts = cart.products_idproducts');
        $carts1 = DB:: select('SELECT SUM(price) as total FROM `cart` JOIN `user` on cart.User_idUser = user.idUser JOIN `products` on products.idproducts = cart.products_idproducts');
        foreach($carts1 as $c)
        {
            $carts1 = $c;
            break;
        }
        $carts2 = DB::select('SELECT count(User_idUser) as NP FROM `cart` GROUP BY User_idUser');
        foreach($carts2 as $c)
        {
            $carts2 = $c;
            break;
        }
        return view('checkout', ['items' => $items, 'carts1'=> $carts1->total, 'carts2'=> $carts2->NP]);
    }
}
