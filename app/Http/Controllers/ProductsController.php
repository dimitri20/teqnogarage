<?php

namespace App\Http\Controllers;


use App\Models\Categories;
use App\Models\Images;
use App\Models\ProductDetails;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use DB;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
        
        return view("admin.products.index")
            ->with('products', $products)
            ->with('images', Images::with('products')->get())
            ->with('categories', Categories::all())
            ->with('subcategories', Subcategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.products.create")
            ->with('categories', Categories::all())
            ->with('subcategories', Subcategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $request -> validate([
            'name' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'available' => 'required',
            'price_from' => 'required',
            'price_to' => 'required',
            'description_ka' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',
            'image_1' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $images = [];
        // $product_category = Categories::where("id", $request->category)->first()["category"];

        if ($request->image_1 != null) {
            $images[0] = uniqid().'_'.str_replace($request->name, ' ', '_').'.'.$request->image_1->extension();
            $request->image_1->move(storage_path('app/public/product_images/'), $images[0]);
        }
        if ($request->image_2 != null) {
            $images[1] = uniqid().'_'.str_replace($request->name, ' ', '_').'.'.$request->image_2->extension();
            $request->image_2->move(storage_path('app/public/product_images/'), $images[1]);
        }
        if ($request->image_3 != null) {
            $images[2] = uniqid().'_'.str_replace($request->name, ' ', '_').'.'.$request->image_3->extension();
            $request->image_3->move(storage_path('app/public/product_images/'), $images[2]);
        }
        if ($request->image_4 != null) {
            $images[3] = uniqid().'_'.str_replace($request->name, ' ', '_').'.'.$request->image_4->extension();
            $request->image_4->move(storage_path('app/public/product_images/'), $images[3]);
        }
        
        
        // $imagesNextId = DB::select("SHOW TABLE STATUS LIKE 'images'");
        // dd($request->input('subcategory'));
        Products::create([
            'name' => $request->input('name'),
            'categories_id' => $request->input('category'),
            'subcategories_id' => $request->input('subcategory'),
            'images_id' => 0,
            'price_from' => $request->input('price_from'),
            'price_to' => $request->input('price_to'),
            'video_url' => $request->input('video_url'),
            'available' => (bool)$request->input('available'),
            'description_ka' => $request->input('description_ka'),
            'description_en' => $request->input('description_en'),
            'description_ru' => $request->input('description_ru'),
        ]);
        
        Images::create([
            'products_id' => Products::latest('id')->first()['id'],
            'image_1' => empty($images[0]) ? null : $images[0],
            'image_2' => empty($images[1]) ? null : $images[1],
            'image_3' => empty($images[2]) ? null : $images[2],
            'image_4' => empty($images[3]) ? null : $images[3],
        ]);


        $product_characteristics = json_decode($request->characteristicsJson, true);
        $product_details = [];
        foreach ($product_characteristics as $categoryIndex => $category){
            foreach ($category['attributes'] as $attributeIndex => $attribute){
                array_push($product_details, [
                    'products_id' => Products::latest('id')->first()['id'],

                    'characteristic_category' => $category['name'],
                    'characteristic_category_en' => $category['lang']['en'],
                    'characteristic_category_ka' => $category['lang']['ka'],
                    'characteristic_category_ru' => $category['lang']['ru'],

                    'characteristic_attribute' => $attribute['name'],
                    'characteristic_attribute_ru' => $attribute['lang']['ru'],
                    'characteristic_attribute_ka' => $attribute['lang']['ka'],
                    'characteristic_attribute_en' => $attribute['lang']['en'],

                    'characteristic_value_ka' => $attribute['value']['ka'],
                    'characteristic_value_en' => $attribute['value']['en'],
                    'characteristic_value_ru' => $attribute['value']['ru'],

                ]);
            }
        }

        ProductDetails::insert($product_details);


        return redirect(route('products.index'))->with('message', 'product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {   
        $productDetails = ProductDetails::where("products_id", $id)->get();
        $productDetailsFormatted = [];
        $productDetailKeys = [];

        foreach($productDetails as $item => $value){
            array_push($productDetailKeys, $value['characteristic_category']);
        }

        $productDetailKeys = array_unique($productDetailKeys);


        foreach($productDetailKeys as $productDetailKey){
            array_push($productDetailsFormatted, [
                'category' => $productDetailKey,
                'values' => ProductDetails::where('products_id', $id)
                    ->where('characteristic_category', $productDetailKey)
                    ->get(),
            ]);
        }

        return view('admin.products.show')
            ->with('product', Products::where('id', $id)->first())
            ->with('images', Images::where('products_id', $id)->first())
            ->with('productDetails', $productDetailsFormatted);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productDetailsFormatted = [];
        $productDetailKeys = [];


        foreach(ProductDetails::where("products_id", $id)->get() as $item => $value){
            array_push($productDetailKeys, $value['characteristic_category']);
        }

        $productDetailKeys = array_unique($productDetailKeys);
        foreach($productDetailKeys as $productDetailKey){
            array_push($productDetailsFormatted, [
                'category' => $productDetailKey,
                'values' => ProductDetails::where('products_id', $id)
                    ->where('characteristic_category', $productDetailKey)
                    ->get(),
            ]);
        }

        return view('admin.products.edit')
            ->with('product', Products::where('id', $id)->first())
            ->with('images', Images::where('products_id', $id)->first())
            ->with('categories', Categories::all())
            ->with('productDetails', $productDetailsFormatted)
            ->with('subcategories', Subcategory::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, int $id)
    {
        $images = [];
        
        $imagesToUpdate = [];
        if ($request->image_1 != null) {
            $images[0] = uniqid().'_'.str_replace($request->name, ' ', '_').'.'.$request->image_1->extension();
            $imagesToUpdate['image_1'] = $images[0];
            $request->image_1->move(storage_path('app/public/product_images/'), $images[0]);
        }
        if ($request->image_2 != null) {
            $images[1] = uniqid().'_'.str_replace($request->name, ' ', '_').'.'.$request->image_2->extension();
            $imagesToUpdate['image_2'] = $images[1];
            $request->image_2->move(storage_path('app/public/product_images/'), $images[1]);
        }
        if ($request->image_3 != null) {
            $images[2] = uniqid().'_'.str_replace($request->name, ' ', '_').'.'.$request->image_3->extension();
            $imagesToUpdate['image_3'] = $images[2];
            $request->image_3->move(storage_path('app/public/product_images/'), $images[2]);
        }
        if ($request->image_4 != null) {
            $images[3] = uniqid().'_'.str_replace($request->name, ' ', '_').'.'.$request->image_4->extension();
            $imagesToUpdate['image_4'] = $images[3];
            $request->image_4->move(storage_path('app/public/product_images/'), $images[3]);
        }

        Products::where("id", $id)->update([
            'name' => $request->input('name'),
            'categories_id' => $request->input('category'),
            'subcategories_id' => $request->input('subcategory'),
            'price_from' => $request->input('price_from'),
            'price_to' => $request->input('price_to'),
            'video_url' => $request->input('video_url'),
            'available' => (bool)$request->input('available'),
            'description_ka' => $request->input('description_ka'),
            'description_en' => $request->input('description_en'),
            'description_ru' => $request->input('description_ru'),
        ]);

        

        if(sizeof($imagesToUpdate) > 0){
            Images::where('products_id', $id)->update($imagesToUpdate);
        }

        $product_details_old = ProductDetails::where('products_id', $id);
        $product_details_old->delete();

        $product_characteristics = json_decode($request->characteristicsJson, true);
        $product_details = [];
        foreach ($product_characteristics as $categoryIndex => $category){
            foreach ($category['attributes'] as $attributeIndex => $attribute){
                array_push($product_details, [
                    'products_id' => Products::latest('id')->first()['id'],

                    'characteristic_category' => $category['name'],
                    'characteristic_category_en' => $category['lang']['en'],
                    'characteristic_category_ka' => $category['lang']['ka'],
                    'characteristic_category_ru' => $category['lang']['ru'],

                    'characteristic_attribute' => $attribute['name'],
                    'characteristic_attribute_ru' => $attribute['lang']['ru'],
                    'characteristic_attribute_ka' => $attribute['lang']['ka'],
                    'characteristic_attribute_en' => $attribute['lang']['en'],

                    'characteristic_value_ka' => $attribute['value']['ka'],
                    'characteristic_value_en' => $attribute['value']['en'],
                    'characteristic_value_ru' => $attribute['value']['ru'],

                ]);
            }
        }

        ProductDetails::insert($product_details);

        return redirect(route('products.show', $id))
            ->with('message', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $product = Products::where('id', $id);
        $productDetails = ProductDetails::where('products_id', $id);
        $productImages = Images::where('products_id', $id);
        $product_item = Products::where('id', $id)->first();
        // $product_category = Categories::where("id", $product_item['categories_id'])->first()["category"];

        
        if($productImages->first()['image_1'] != null){
            unlink(storage_path('app/public/product_images/'.$productImages->first()['image_1']));
        }
        if($productImages->first()['image_2'] != null){
            unlink(storage_path('app/public/product_images/'.$productImages->first()['image_2']));
        }
        if($productImages->first()['image_3'] != null){
            unlink(storage_path('app/public/product_images/'.$productImages->first()['image_3']));
        }
        if($productImages->first()['image_4'] != null){
            unlink(storage_path('app/public/product_images/'.$productImages->first()['image_4']));
        }

        // if(file_exists(storage_path('app/public/product_images/'.$product_item['name']))){
        //     $this->rmdir_recursive(storage_path('app/public/product_images/'.$product_item['name']));
        // }

        $product->delete();
        $productDetails->delete();
        $productImages->delete();

        return redirect(route('products.index'))
            ->with('message', 'Product removed successfully');
    }


    private function rmdir_recursive($dir) {
        foreach(scandir($dir) as $file) {
            if ('.' === $file || '..' === $file) continue;
            if (is_dir("$dir/$file")) $this->rmdir_recursive("$dir/$file");
            else unlink("$dir/$file");
        }
        rmdir($dir);
    }

    private function getCategories(){
        $categories = Categories::all();
        $categoriesFormatted = [];

        foreach($categories as $category){
            $categoriesFormatted[$category->category] = Subcategory::where('categories_id', $category->id)->get();
        }

        return $categoriesFormatted;
    }
}
