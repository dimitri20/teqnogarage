<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function getProduct(int $id){
        $product = Products::query()->findOrFail($id);
        return response()->json([
            "name" => $product->name,
            "id" => $product->id,
            "quantity" => 1,
            "price_from" => $product->price_from,
            'price_to' => $product->price_to,
            "image" => Images::where('products_id', $id)->first()->image_1
        ]);
    }

    // public function index(){

    //     return view('cart')
    //         ->with('categories', Categories::all())
    //         ->with('subcategories', Subcategory::all());
    // }
    


    // public function addToCart(int $id){

    //     $product = Products::findOrFail($id);
        
    //     $cart = Session::get('cart', []);
   
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     } else {
    //         $cart[$id] = [
    //             "name" => $product->name,
    //             "id" => $product->id,
    //             "quantity" => 1,
    //             "price_from" => $product->price_from,
    //             'price_to' => $product->price_to,
    //             "image" => Images::where('products_id', $id)->first()->image_1
    //         ];
    //     }
        
    //     Session::put('cart', $cart);
        
    //     $total_price_from = 0.0;
    //     $total_price_to = 0.0;
    //     $cart_count = 0;

    //     if(Session::has('cart')){
    //         $cart_count = sizeof(session('cart'));

    //         foreach(Session::get('cart') as $id => $details){

    //             $total_price_from += $details['price_from'];
    //             $total_price_to += $details['price_to'];
    //         }
    //     }
        
    //     return redirect()->back();
    //     return response()->json([
    //         'total_count' => $cart_count,
    //         'total_price_from' => $total_price_from,
    //         'total_price_to' => $total_price_to,
    //         'cart_items' => Session::get('cart')
    //     ]);
        
    // }

    // public function getCart(){
    //     $total_price_from = 0.0;
    //     $total_price_to = 0.0;
    //     $cart_count = 0;

    //     if(session('cart')){
    //         $cart_count = sizeof(session('cart'));

    //         foreach(session('cart') as $id => $details){

    //             $total_price_from += $details['price_from'];
    //             $total_price_to += $details['price_to'];
    //         }
    //     }

    //     // dd(session()->get('cart', []));

    //     // return redirect()->back();
    //     return response()->json([
    //         'total_count' => $cart_count,
    //         'total_price_from' => $total_price_from,
    //         'total_price_to' => $total_price_to,
    //         'cart_items' => session('cart')
    //     ]);
    // }


    // public function update(Request $request){
    //     if($request->id && $request->quantity){
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Cart updated successfully');
    //     }
    // }
   

    // public function remove(int $id){
        
    //     if($id) {
    //         $id = $id;
    //         $cart = Session::get('cart');
    //         if(isset($cart[$id])) {
    //             unset($cart[$id]);
    //             Session::put('cart', $cart);
    //         }
    //     }
        
    //     $total_price_from = 0.0;
    //     $total_price_to = 0.0;
    //     $cart_count = 0;

    //     if(Session::has('cart')){
    //         $cart_count = sizeof(session('cart'));

    //         foreach(Session::get('cart') as $id => $details){

    //             $total_price_from += $details['price_from'];
    //             $total_price_to += $details['price_to'];
    //         }
    //     }
       
    //     return redirect()->back();
    //     return response()->json([
    //         'total_count' => $cart_count,
    //         'total_price_from' => $total_price_from,
    //         'total_price_to' => $total_price_to,
    //         'cart_items' => Session::get('cart')
    //     ]);
    // }

    
}
