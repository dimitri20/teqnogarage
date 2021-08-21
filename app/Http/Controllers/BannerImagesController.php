<?php

namespace App\Http\Controllers;

use App\Models\BannerImages;
use Illuminate\Http\Request;

class BannerImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->create();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("admin.bannerImages.create")
            ->with("bannerImages", BannerImages::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|image',
          ]);
  
          if ($request->file('file')) {
              $imagePath = $request->file('file');
              $imageName = uniqid().$imagePath->getClientOriginalName();
  
              $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
          }
  
          BannerImages::create([
              'name' => $imageName,
              'banner_image' => $path
          ]);
  
          return redirect("/home/bannerImages/create");
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
        $image = BannerImages::where('id', $id);
    
        
        if (storage_path("app/public/".$image->first()->banner_image)) {
            unlink(storage_path("app/public/".$image->first()->banner_image));   
            $image->delete();
        }

        return redirect("/home/bannerImages/create");
    }
}
