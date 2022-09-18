<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addProductController extends Controller
{
    //
    public function addProd(Request $request){
        
        $name = $request->input('product_name');
        $productDetails = $request->input('product_name_fr');
        $type = $request->input('product_categorie');
        $subCat = $request->input('product_sub-categorie');
        $DateAdded = $request->input('online_date');
        $price = $request->input('available_quantity');

        $pic = $request->file('filebutton');
        $picName = $pic->getClientOriginalName();
        $picType = $pic->getClientOriginalExtension();
        $picSize = $pic->getSize();

        $pic->move('uploads',$picName);
        $destination = 'uploads/'.$picName;

        
        $pic2 = $request->file('filebutton');
        $picName = $pic2->getClientOriginalName();
        $picType = $pic2->getClientOriginalExtension();
        $picSize = $pic2->getSize();

        $pic2->move('uploads',$picName);
        $destination2 = 'uploads/'.$picName;

        DB::insert("insert into products (price, name, type, productDetails, image1, DateAdded) values (?, ?, ?, ?, ?, ?,?)", [$price, $name,$type, $productDetails, $destination,$destination2, $DateAdded]); 
        return redirect('/addProduct');

    }

}
