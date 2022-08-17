<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Trending;
use App\Cart;
use Session;
use Illuminate\Support\Facades\DB;


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
    $resultss=Trending::find($id);
   return view('details',['Product'=>$results,'Trending'=>$resultss]);
 }

public function search(Request $req){ 
    $data=Product::
   where('name','like','%'.$req->input('query').'%')
   ->get();
   return view ('search',['products'=>$data]);

}
public function addtoCart(Request $req)
{
   if($req->session()->has('user'))
   {
     $cart=new Cart;
     $cart->user_id=$req->session()->get('user')['id'];
     $cart->product_id=$req->product_id;
     $cart->save();
     return redirect ('/');
   }
   else 
   {
      return redirect('/login');
   }
}
static function cartItem()
{
$userId=Session::get('user')['id'];
return Cart::where('user_id',$userId)->count();
}
public function cartlist()
{
   $userId=Session::get('user')['id'];
   $data=DB::table('cart')
   ->join('products','cart.product_id','products.id')
   ->select('products.*')
   ->where('cart.user_id' , $userId)
   ->get();
   return  view('cartlist',['products'=>$data]);
}
}