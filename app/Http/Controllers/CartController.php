<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\Images;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CartController extends Controller
{

    // public function index(){

    //     return view('cart')
    //         ->with('categories', Categories::all())
    //         ->with('subcategories', Subcategory::all());
    // }
    

    public function addToCart(int $id){

        $product = Products::findOrFail($id);
           
        $cart = session()->get('cart', []);
   
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price_from" => $product->price_from,
                'price_to' => $product->price_to,
                "image" => Images::where('products_id', $id)->first()->image_1
            ];
        }
           
        session()->put('cart', $cart);
        
        return redirect()->back();
    }


    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
   

    public function remove(Request $request)
    {
        // dd($request->id);
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        
        return redirect()->back();
    }

    
}
