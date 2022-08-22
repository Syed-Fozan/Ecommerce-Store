<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;

use Stripe;

class StripeController extends Controller
{
    public function stripe()
   
        {
            $userId=Session::get('user')['id'];
             $total=DB::table('cart')
            ->join('products','cart.product_id','products.id')
             ->where('cart.user_id' , $userId)
              ->sum('products.price');
               return view('stripe', compact('total'));
         }




    public function stripePost(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose"
        ]);
   
        Session::flash('success', 'Payment successful!');
           
        return back();
        
    }
}

