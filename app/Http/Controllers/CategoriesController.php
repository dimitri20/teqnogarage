<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\DeletedCategoriesAndSubcategories;
use App\Models\Products;
use App\Models\Subcategory;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect(route('categories.create'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create')
            ->with('categories', Categories::all())
            ->with('subcategories', Subcategory::all())
            ->with('categoriesFormatted', $this->getCategories())
            ->with('deletedCategories', DeletedCategoriesAndSubcategories::where('type', 'category')->get())
            ->with('deletedSubcategories', DeletedCategoriesAndSubcategories::where('type', 'subcategory')->get());
        // // dd($this->getCategories());
        // return view('admin.categories.create')
        //     ->with('categories', $this->getCategories());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->input('data') == 'category'){
            $data = $request->input();
            $data['category'] =  $data['category_en'];
            Categories::create($data);
        } 
        else if($request->input('data') == 'subcategory'){
            $data = $request->input();
            $data['subcategory'] = $data['subcategory_en'];
            Subcategory::create($data);
        }
        else if($request->input('data') == 'category_deleted'){
            // dd($request->input());
            Products::where('categories_id', (int)$request->input('old_id'))->update(['categories_id' => (int)$request->input('categories_id')]);
            DeletedCategoriesAndSubcategories::where('id', (int)$request->input('data_id'))->delete();
        }
        else if($request->input('data') == 'subcategory_deleted'){
            // dd($request->input());
            Products::where('subcategories_id', (int)$request->input('old_id'))->update(['subcategories_id' => (int)$request->input('categories_id')]);
            DeletedCategoriesAndSubcategories::where('id', (int)$request->input('data_id'))->delete();
        }

        
        return redirect()->back();
        // // dd($request->input());
        // $categories_old = Categories::where('id', '>', 0);
        // $subcategories_old = Subcategory::where('id', '>', 0);
        // $categories_old->delete();
        // $subcategories_old->delete();
        
        // $categoriesWithSubCategories = json_decode($request->categoriesJsonData, true);

        // // dd($categoriesWithSubCategories);
        // foreach($categoriesWithSubCategories as $categoriesIndex => $categoriesValue){
        //     Categories::create([
        //         'category' => $categoriesValue['name'],
        //         'category_en' => $categoriesValue['lang']['en'],
        //         'category_ka' => $categoriesValue['lang']['ka'],
        //         'category_ru' => $categoriesValue['lang']['ru'],
        //     ]);

        //     foreach($categoriesValue['subcategories'] as $subcategoriesIndex => $subCategoriesValue){
        //         Subcategory::create([
        //             'categories_id' => Categories::latest('id')->first()['id'],
        //             'subcategory' => $subCategoriesValue['name'],
        //             'subcategory_en' => $subCategoriesValue['lang']['en'],
        //             'subcategory_ka' => $subCategoriesValue['lang']['ka'],
        //             'subcategory_ru' => $subCategoriesValue['lang']['ru'],
        //         ]);
        //     }
        // }
        
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, int $id)
    {
        if($request->input('data') == 'category') {
            $data = Categories::where('id', $id);
            $data_get = $data->first();
            $deleted = [
                'type' => 'category', 
                'old_id' => $data_get->id,
                'name' => $data_get->category,
                'name_ka' => $data_get->category_ka,
                'name_en' => $data_get->category_en,
                'name_ru' => $data_get->category_ru
            ];

            $data->delete();

            DeletedCategoriesAndSubcategories::create($deleted);
        }
        else if($request->input('data') == 'subcategory'){
            $data = Subcategory::where('id', $id);
            $data_get = $data->first();
            $deleted = [
                'type' => 'subcategory', 
                'old_id' => $data_get->id,
                'name' => $data_get->subcategory,
                'name_ka' => $data_get->subcategory_ka,
                'name_en' => $data_get->subcategory_en,
                'name_ru' => $data_get->subcategory_ru
            ];
            
            $data->delete();
            DeletedCategoriesAndSubcategories::create($deleted);
        }

        return redirect()->back();
    }


    private function getCategories(){
        $categories = Categories::all();
        $categoriesFormatted = [];

        foreach($categories as $category){
            array_push($categoriesFormatted, [
                'name' => [
                    'category' => $category->category,
                    'category_ka' => $category->category_ka,
                    'category_en' => $category->category_en,
                    'category_ru' => $category->category_ru
                ],
                'subcategories' => Subcategory::where('categories_id', $category->id)->get()
            ]);
        }

        return $categoriesFormatted;
    }
}
