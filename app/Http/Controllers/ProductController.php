<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function loadAllProducts(){
        $items = DB::select('SELECT * FROM `products` JOIN subcategory on  subCategory_idsubCategory = idsubCategory JOIN category on category_idcategory = idcategory');
       return view('all', ['items' => $items]);
    }

    public function loadAllSaleProducts(){
        $items = DB::select('SELECT * FROM `products` JOIN subcategory on  subCategory_idsubCategory = idsubCategory JOIN category on category_idcategory = idcategory JOIN sale ON idproducts =idsale ');
        return view('sale', ['items' => $items]);
    }

    public function loadHomeProducts(Request $request){
        $id = $request->input('categoryId');
        $items = DB::select('SELECT * FROM `products` JOIN subcategory on  subCategory_idsubCategory = idsubCategory JOIN category on category_idcategory = idcategory WHERE idsubCategory = 4');
        $bestProducts= DB::select('SELECT * FROM `products` JOIN subcategory on  subCategory_idsubCategory = idsubCategory JOIN category on category_idcategory = idcategory WHERE idsubCategory = 5');
        $homeCat = DB::select('SELECT * FROM `products` JOIN subcategory on subCategory_idsubCategory = idsubCategory JOIN category on category_idcategory =idcategory WHERE idcategory = ?',[$id]);
        return view('home', ['items'=> $items,'bestProducts'=> $bestProducts, 'homeCat'=> $homeCat]); 
    }

    public function women(Request $request){
        $id = $request->input('categoryId');
        $items = DB::select('SELECT * FROM `products` JOIN subcategory on subCategory_idsubCategory = idsubCategory JOIN category on category_idcategory =idcategory WHERE idcategory = ?', [$id]);
        return view('all', ['items' => $items]);
    }

    public function loadCategory(Request $request){
        $id = $request->input('subCategoryId');
        $items = DB::select('SELECT * FROM `products` JOIN subcategory on  subCategory_idsubCategory = idsubCategory JOIN category on category_idcategory = idcategory WHERE idsubCategory = ?', [$id]);
        return view('all', ['items' => $items]);
    }

    public function SingleProd(Request $request){
        $id = $request->input('id');
        $items =DB::select('SELECT * FROM `products` JOIN subcategory on  subCategory_idsubCategory = idsubCategory JOIN category on category_idcategory = idcategory join size on products_idproducts = idproducts  WHERE idproducts = ?',[$id]);
        return view('singleProduct', ['items' => $items]);
    }    

    public function singleProdSale(Request $request){
        $id =$request ->input('id');
        $items = DB:: select('SELECT * FROM `products` JOIN subcategory on  subCategory_idsubCategory = idsubCategory JOIN category on category_idcategory = idcategory join size on products_idproducts = idproducts join sale ON idproducts = idsale  WHERE idproducts = ?',[$id]);
        return view('singleProductSale', ['items' => $items]);
    }
}
