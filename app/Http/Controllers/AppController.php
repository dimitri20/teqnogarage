<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Localization;
use App\Models\BannerImages;
use Illuminate\Http\Request;

use App\Models\Categories;
use App\Models\Contact;
use App\Models\Images;
use App\Models\ProductDetails;
use App\Models\Subcategory;
use App\Models\Products;

class AppController extends Controller
{

    public function index(){
        

        return view('app')
            ->with('categories', Categories::all())
            ->with('subcategories', Subcategory::all())
            ->with('bannerImages', BannerImages::all());
    }


    public function products(Request $request){

        $categories_id = [];
        foreach(Categories::select('id')->get() as $val){
            array_push($categories_id, $val->id);
        }
        
        $subcategories_id = [];
        foreach(Subcategory::select('id')->get() as $val){
            array_push($subcategories_id, $val->id);
        }
        
        $price_min = Products::select("price_from")->min('price_from');
        $price_max = Products::select("price_to")->max("price_from");

        //sorting
        $orderBy = ['id', 'desc'];
        if(array_key_exists('sortBy', $request->input())){
            if(str_contains($request->input('sortBy'), "-")){
                $orderBy[1] = "desc";
            } else if (str_contains($request->input('sortBy'), '+')){
                $orderBy[1] = 'asc';
            }

            switch(str_replace(['+', '-'], "", $request->input('sortBy'))){
                case "name":
                    $orderBy[0] = "name";
                case "price":
                    $orderBy[0] = "price_from";
            }
        }

        $products = new Products();
        //filter
        if(array_key_exists('categories', $request->input())){
            $categories_id = array_intersect($categories_id, $request->input()['categories']);
            if(sizeof($categories_id) > 0){
                $products = $products->whereIn('categories_id', $categories_id);
            }
        }

        if(array_key_exists('subcategories', $request->input())){
            $subcategories_id = array_intersect($subcategories_id, $request->input()['subcategories']);
            if(sizeof($subcategories_id) > 0){
                $products = $products->whereIn('subcategories_id', $subcategories_id);
            }
        }
        

        if(array_key_exists('price', $request->input())){

            if(array_key_exists('min', $request->input()['price'])){
                if($request->input()['price']['min'] != ""){
                    $price_min = $request->input()['price']['min'];
                }
            }

            if(array_key_exists('max', $request->input()['price'])){
                if($request->input()['price']['max'] != ""){
                    $price_max = $request->input()['price']['max'];
                }
            }
        }
        
        $products = $products                
                        ->where('price_from', '>=', (int)$price_min)
                        ->where('price_from', '<=', (int)$price_max)
                        ->orderBy($orderBy[0], $orderBy[1])
                        ->get();
        // $products = Products::whereIn('categories_id', $categories_id)
        //                 ->whereIn('subcategories_id', $subcategories_id)
                        // ->where('price_from', '>=', (int)$price_min)
                        // ->where('price_from', '<=', (int)$price_max)
                        // ->orderBy($orderBy[0], $orderBy[1])
                        // ->get();
        
        
                        
        return view("products")
            ->with('products', $products)
            ->with('images', Images::with('products')->get())
            ->with('categories', Categories::all())
            ->with('subcategories', Subcategory::all());
    }


    public function productsJson(Request $request){

        $categories_id = [];
        foreach(Categories::select('id')->get() as $val){
            array_push($categories_id, $val->id);
        }
        
        $subcategories_id = [];
        foreach(Subcategory::select('id')->get() as $val){
            array_push($subcategories_id, $val->id);
        }
        
        $price_min = Products::select("price_from")->min('price_from');
        $price_max = Products::select("price_to")->max("price_from");

        //sorting
        $orderBy = ['products.id', 'desc'];

        // if(array_key_exists('sortBy', $request->input())){
        //     if(str_contains($request->input('sortBy'), '-')){
        //         $orderBy[1] = 'desc';
        //     } else if(str_contains($request->input('sortBy'), '+')){
        //         $orderBy[1] = 'asc';
        //     }

        //     dd($orderBy[1]);
        // }

        if(array_key_exists('sortBy', $request->input())){
            if(str_contains($request->input('sortBy'), "-")){
                $orderBy[1] = "desc";
            }
            if (str_contains($request->input('sortBy'), '+')){
                $orderBy[1] = 'asc';
            }

            switch(str_replace(['+', '-'], "", $request->input('sortBy'))){
                case "name":
                    $orderBy[0] = "products.name";
                case "price":
                    $orderBy[0] = "products.price_from";
            }
        }
        
        $products = new Products();
        $products = $products->join('images', 'products.id', '=', 'images.products_id');
        
        //filter

        if(array_key_exists('categories', $request->input())){
            $categories_id = array_intersect($categories_id, $request->input()['categories']);
            if(sizeof($categories_id) > 0){
                $products = $products->whereIn('categories_id', $categories_id);
            }
        }

        if(array_key_exists('subcategories', $request->input())){
            $subcategories_id = array_intersect($subcategories_id, $request->input()['subcategories']);
            if(sizeof($subcategories_id) > 0){
                $products = $products->whereIn('subcategories_id', $subcategories_id);
            }
        }

        if(array_key_exists('price', $request->input())){

            if(array_key_exists('min', $request->input()['price'])){
                if($request->input()['price']['min'] != ""){
                    $price_min = $request->input()['price']['min'];
                }
            }

            if(array_key_exists('max', $request->input()['price'])){
                if($request->input()['price']['max'] != ""){
                    $price_max = $request->input()['price']['max'];
                }
            }
        }
        
        
    
        $products = $products                
                        ->where('products.price_from', '>=', (int)$price_min)
                        ->where('products.price_from', '<=', (int)$price_max)
                        ->orderBy($orderBy[0], $orderBy[1])
                        ->get()
                        ->toArray();

        
        foreach($products as $index => $product){
            $id = $product['products_id'];
            $products[$index]['id'] = $id;
        }
        // dd($products);

        return response()->json($products);
    }

    public function getSubcategoriesJson(Request $request){
        $subcategories_id = [];

        if(array_key_exists('categories', $request->input())){
            $subcategories_id = $request->input("categories");
        }
        return response()->json(Subcategory::whereIn('categories_id', $subcategories_id)->get());
    }

    public function productReview(string $locale, int $id){

        $productDetails = ProductDetails::where("products_id", $id)->get();
        $productDetailsFormatted = [];
        $productDetailKeys = [];

        foreach($productDetails as $item => $value){
            array_push($productDetailKeys, $value['characteristic_category']);
        }

        $productDetailKeys = array_unique($productDetailKeys);

        
        foreach($productDetailKeys as $productDetailKey){
            $c = ProductDetails::where('products_id', $id)
                    ->where('characteristic_category', $productDetailKey)
                    ->get();
            array_push($productDetailsFormatted, [
                'category' => $productDetailKey,
                'category_en' => $c[0]['characteristic_category_en'],
                'category_ka' => $c[0]['characteristic_category_ka'],
                'category_ru' => $c[0]['characteristic_category_ru'],
                'values' => $c,
            ]);
        }

        

        return view('product_view')
            ->with('product', Products::where('id', $id)->first())
            ->with('productDetails', $productDetailsFormatted)
            ->with('images', Images::where('products_id', $id)->first())
            ->with('categories', Categories::all())
            ->with('subcategories', Subcategory::all());
    }

    public function contact(){

        $contact = Contact::all();
        $info = [];
        
        
        if(isset($contact[0])){
            foreach($contact[0]->getAttributes() as $contactIndex => $contactVal){
                $info[$contactIndex] = $contactVal;
            }
        }
        // dd($info);
        
        return view('contact')
            ->with('categories', Categories::all())
            ->with('subcategories', Subcategory::all())
            ->with('info', $info);
    }

    public function about(){

        $contact = Contact::all();
        $info = [];
        
        
        if(isset($contact[0])){
            foreach($contact[0]->getAttributes() as $contactIndex => $contactVal){
                $info[$contactIndex] = $contactVal;
            }
        }

        

        return view('about')
            ->with('categories', Categories::all())
            ->with('subcategories', Subcategory::all())
            ->with('info', $info);
    }



    private function getSubcategories(){
        $categories = Categories::all();
        $categoriesFormatted = [];

        foreach($categories as $category){
            $categoriesFormatted[$category->category] = Subcategory::where('categories_id', $category->id)->get();
        }

        return $categoriesFormatted;
    }

}
