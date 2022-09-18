<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request){
        DB::insert("INSERT INTO `cart`(`User_idUser`, `products_idproducts`) VALUES (?,?)",
        [$request->userID, $request->productID]);

        return "true";
    }

    public function addCart(Request $request){

        $carts = DB:: select('SELECT * FROM `cart` JOIN `user` on cart.User_idUser = user.idUser JOIN `products` on products.idproducts = cart.products_idproducts');
        $carts1 = DB:: select('SELECT SUM(price) as total FROM `cart` JOIN `user` on cart.User_idUser = user.idUser JOIN `products` on products.idproducts = cart.products_idproducts');
        foreach($carts1 as $c)
        {
            $carts1 = $c;
            break;
        }
        return view('shoppingcart', ['carts' => $carts, 'carts1'=> $carts1->total]);    

    }

    public function delfromcart(Request $request){
        $id = $request->userID;
        $pid = $request->productID;
        $carts = DB:: delete('DELETE FROM `cart` WHERE cart.User_idUser = ? AND cart.products_idproducts=?',[$id,$pid]);
        return "true";
    }


} 
