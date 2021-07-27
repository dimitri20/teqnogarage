<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use App\Models\Images;
use App\Models\Others;
use App\Models\Platform;
use App\Models\Products;
use App\Models\Screen;
use App\Models\Storage;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = new Products();

        return view("admin.products");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $columns = new Products();

        return view("admin.products.create")->with("columns", $columns->getTableColumns());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'product_name' => 'required',
            'product_type' => 'required',
            'product_image_1' => 'required|mimes:jpg,png,jpeg|max:5048',
            'product_description' => 'required'
        ]);

        $images = [];

        if ($request->product_image_1 != null) {
            $images[0] = uniqid().'_'.$request->product_name.'.'.$request->product_image_1->extension();
            $request->product_image_1->move(storage_path('product_images/'.$request->product_type), $images[0]);
        }
        if ($request->product_image_2 != null) {
            $images[1] = uniqid().'_'.$request->product_name.'.'.$request->product_image_2->extension();
            $request->product_image_2->move(storage_path('product_images/'.$request->product_type), $images[1]);
        }
        if ($request->product_image_3 != null) {
            $images[2] = uniqid().'_'.$request->product_name.'.'.$request->product_image_3->extension();
            $request->product_image_3->move(storage_path('product_images/'.$request->product_type), $images[2]);
        }
        if ($request->product_image_4 != null) {
            $images[3] = uniqid().'_'.$request->product_name.'.'.$request->product_image_4->extension();
            $request->product_image_4->move(storage_path('product_images/'.$request->product_type), $images[3]);
        }


//        dd($images);

//        $newImageName = uniqid().'_'.$request->product_name.'.'.((array)$request)["product_image_".$i]['extension'];
//        $request->product_image->move(storage_path('product_images/'.$request->product_type), $newImageName);

        Screen::create([
            'size' => $request->input('product_size'),
            'resolution' => $request->input('product_resolution'),
            'technology' => $request->input('product_technology'),
            'protection' => $request->input('product_protection'),
        ]);

        Camera::create([
            'main_camera' => $request->input('product_main_camera'),
            'main_camera_video' => $request->input('product_main_camera_video'),
            'frontal_camera' => $request->input('product_frontal_camera'),
            'frontal_camera_video' => $request->input('product_frontal_camera_video'),
        ]);

        Platform::create([
            'operating_system' => $request->input('product_operating_system'),
            'processor_model' => $request->input('product_processor_model'),
            'processor_speed' => $request->input('product_processor_speed'),
            'core' => $request->input('product_core'),
            'graphics_processor' => $request->input('product_graphics_processor'),
        ]);

        Storage::create([
            'operating_memory' => $request->input('product_operating_memory'),
            'internal_storage' => $request->input('product_internal_storage'),
            'storage_card' => $request->input('product_storage_card'),
        ]);

        Others::create([
            'unblock' => $request->input('product_unblock'),
            '4G' => $request->input('product_4G'),
            'battery' => $request->input('product_battery'),
            'battery_uncharge_time' => $request->input('product_battery_uncharge_time'),
            'building' => $request->input('product_building'),
            'weight' => $request->input('product_weight'),
            'release' => $request->input('product_release'),
        ]);

        Images::create([
            'image_1' => empty($images[0]) ? null : $images[0],
            'image_2' => empty($images[1]) ? null : $images[1],
            'image_3' => empty($images[2]) ? null : $images[2],
            'image_4' => empty($images[3]) ? null : $images[3],
        ]);

        /*$table->string("name");
        $table->string("type")->nullable();
        $table->bigInteger("count")->default(0);
        $table->longText("description")->nullable();

        $table->mediumInteger("price_from")->default(0);
        $table->mediumInteger("price_to")->default(0);

        $table->string("video_url")->nullable();

        $table->foreignId("screen_id")->nullable();
        $table->foreignId("camera_id")->nullable();
        $table->foreignId("platform_id")->nullable();
        $table->foreignId("storage_id")->nullable();
        $table->foreignId("others_id")->nullable();
        $table->foreignId("images_id")->nullable();*/

        Products::create([
            'name' => $request->input('product_name'),
            'count' => $request->input('product_count'),
            'price_from' => $request->input('product_price_from'),
            'price_to' => $request->input('product_price_to'),
            'video_url' => $request->input('product_video_url'),
            'type' => $request->input('product_type'),

            'description' => $request->input('product_description'),
            'screen_id' => Screen::latest('id')->first()['id'],
            'camera_id' => Camera::latest('id')->first()['id'],
            'platform_id' => Platform::latest('id')->first()['id'],
            'storage_id' => Storage::latest('id')->first()['id'],
            'others_id' => Others::latest('id')->first()['id'],
            'images_id' => Images::latest('id')->first()['id']
        ]);



        return redirect('/home/products')->with('message', 'product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $screen = Products::where('id', $id)->first()->screen;

        return view("admin.products.show")
            ->with("product", Products::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
