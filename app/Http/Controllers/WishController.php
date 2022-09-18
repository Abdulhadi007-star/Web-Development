<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishController extends Controller
{
    public function addToWish(Request $request){
        DB::insert("INSERT INTO `wishlist`(`User_idUser`, `products_idproducts`) VALUES (?,?)",
        [$request->userID, $request->productID]);

        return "true";
    }

    public function addtoWishlist(Request $request){
        $wishlist = DB:: select('SELECT * FROM `wishlist` JOIN `user` on wishlist.User_idUser = user.idUser JOIN `products` on products.idproducts = wishlist.products_idproducts');
        return view('wishlist', ['wishlist' => $wishlist]);
    }
    public function delfromWish(Request $request){
        $id = $request->userID;
        $pid = $request->productID;
        $carts = DB:: delete('DELETE FROM `wishlist` WHERE wishlist.User_idUser = ? AND wishlist.products_idproducts=?',[$id,$pid]);
        return "true";
    }
}
