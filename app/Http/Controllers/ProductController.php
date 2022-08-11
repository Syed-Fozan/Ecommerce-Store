<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Trending;


class ProductController extends Controller
{
   // public function index()
    //{
      //  $data=product::all();
        //return view('product',['products'=>$data]);
        
  //  }
    public function trendingitem(){
        $ternding=trending::all();
        $data=product::all();
       return view('product',['trendings'=>$ternding,'products'=>$data]);
    }
 public function details($id){
    $results =Product::find($id);
   return view('details',['Product'=>$results]);
 }
}
