<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Trending;
use App\Cart;
use Session;
use App\Order;
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
   ->select('products.*','cart.id as cart_id')
   ->where('cart.user_id' , $userId)
   ->get();
   return  view('cartlist',['products'=>$data]);
}
 public function removeCart($id)
{
 $checkData =  Cart::find($id);
if($checkData){
   $checkData->delete();
}else{
   return redirect('cartlist');
}
return "successfully deleeted";
}
public function orderNow ()
{
   $userId=Session::get('user')['id'];
    $total=DB::table('cart')
   ->join('products','cart.product_id','products.id')
    ->where('cart.user_id' , $userId)
     ->sum('products.price');
      return view('ordernow',['total'=>$total]);
}
public function orderPlace(Request $req)
{
   $userId=Session::get('user')['id'];
   $allCart=Cart::where('user_id',$userId)->get();
   foreach($allCart as $cart)
   {
        $order= new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->address=$req->address;
        $order->status="pending";
        $order->payment_method=$req->PaymentMethod;
        $order->payment_status="pending";
        $order->save();
   }
   
   Cart::where('user_id',$userId)->delete();
   return redirect('');
}
public function myOrder()
{
   $userId=Session::get('user')['id'];
    $orders=DB::table('order')
   ->join('products','order.product_id','products.id')
    ->where('order.user_id' , $userId)
     ->get();
      return view('myorder',['order'=>$orders]);
}
}