<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
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
        // dd($this->getCategories());
        return view('admin.categories.create')
            ->with('categories', $this->getCategories());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
        $categories_old = Categories::where('id', '>', 0);
        $subcategories_old = Subcategory::where('id', '>', 0);
        $categories_old->delete();
        $subcategories_old->delete();
        
        $categoriesWithSubCategories = json_decode($request->categoriesJsonData, true);

        // dd($categoriesWithSubCategories);
        foreach($categoriesWithSubCategories as $categoriesIndex => $categoriesValue){
            Categories::create([
                'category' => $categoriesValue['name'],
                'category_en' => $categoriesValue['lang']['en'],
                'category_ka' => $categoriesValue['lang']['ka'],
                'category_ru' => $categoriesValue['lang']['ru'],
            ]);

            foreach($categoriesValue['subcategories'] as $subcategoriesIndex => $subCategoriesValue){
                Subcategory::create([
                    'categories_id' => Categories::latest('id')->first()['id'],
                    'subcategory' => $subCategoriesValue['name'],
                    'subcategory_en' => $subCategoriesValue['lang']['en'],
                    'subcategory_ka' => $subCategoriesValue['lang']['ka'],
                    'subcategory_ru' => $subCategoriesValue['lang']['ru'],
                ]);
            }
        }
        
        return redirect()->back();
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
    public function destroy($id)
    {
        return abort(404);
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
