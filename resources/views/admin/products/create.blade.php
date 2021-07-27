@extends('layouts.app')

@section('content')
{{--    {{dd($columns)}}--}}
{{--    <div class="container">--}}
{{--        @foreach($columns as $key => $value)--}}

{{--            @if($value == null)--}}

{{--                <div class="row mb-3">--}}
{{--                    <label for="product_{{$key}}" class="col-sm-2 col-form-label">{{$key}}</label>--}}
{{--                    <div class="col-sm-10">--}}
{{--                        <input type="text" class="form-control" id="product_{{$key}}" name="product_{{$key}}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            @else--}}
{{--                <div id="{{$key}}">--}}
{{--                    <h4 class="text-center mt-5 mb-3 border-bottom pb-3">{{$key}}</h4>--}}
{{--                    @foreach($value as $subcolumn)--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="product_{{$subcolumn}}" class="col-sm-2 col-form-label">{{$subcolumn}}</label>--}}
{{--                                <div class="col-sm-10">--}}
{{--                                    <input type="text" class="form-control" id="product_{{$subcolumn}}" name="product_{{$subcolumn}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                    @endforeach--}}
{{--                </div>--}}

{{--            @endif--}}



{{--        @endforeach--}}
{{--    </div>--}}
<div class="container">

    <div class="text-center my-4 mb-5">
        <h2>Create Product</h2>
    </div>

    @if($errors->any())
        <div class="my-5 alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif


    <form
            method="POST"
            action="/home/products"
            enctype="multipart/form-data"
    >
        @csrf

        <div id="globals">
            <div class="row mb-3">
                <label for="product_name" class="col-sm-2 col-form-label">name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_name" name="product_name">
                </div>
            </div>

            <div class="row mb-3">
                <label for="product_type" class="col-sm-2 col-form-label">type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_type" name="product_type">
                </div>
            </div>

            <div class="row mb-3">
                <label for="product_video_url" class="col-sm-2 col-form-label">video url</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_video_url" name="product_video_url">
                </div>
            </div>

            <div class="row mb-3">
                <label for="product_count" class="col-sm-2 col-form-label">count</label>
                <div class="col-sm-1" id="product_count">
                    <input type="number" name="product_count" class="form-control" id="product_count">
                </div>
            </div>

            <div class="row mb-3">

                <label for="product_price" class="col-sm-2 col-form-label">price</label>
                <div class="col-sm-10" id="product_price">
                    <div class="row">
                        <div class="col">
                            <label for="product_price_from" class="text-center">from</label>
                            <input type="number" class="form-control" id="product_price_from" name="product_price_from">
                        </div>

                        <div class="col">
                            <label for="product_price_to" class="text-center">to</label>
                            <input type="number" class="form-control" id="product_price_to" name="product_price_to">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mb-3">
                <label for="product_description" class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="product_description" id="product_description" cols="30" rows="10"></textarea>
                </div>
            </div>


        </div>


        <div id="images">
            <h4 class="text-center mt-5 mb-3 border-bottom pb-3">Images</h4>

            <div class="row mb-3">

                <div class="col-12 col-lg-3">
                    <label for="product_image_1" class="text-center">image 1 (the main image)</label>
                    <input type="file" class="form-control" id="product_image_1" name="product_image_1">
                    <img
                            src="{{asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png")}}"
                            alt="image 1"
                            class="w-100 mt-3">
                </div>

                <div class="col-12 col-lg-3">
                    <label for="product_image_2" class="text-center">image 2</label>
                    <input type="file" class="form-control" id="product_image_2" name="product_image_2">
                    <img
                            src="{{asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png")}}"
                            alt="image 2"
                            class="w-100 mt-3">
                </div>

                <div class="col-12 col-lg-3">
                    <label for="product_image_3" class="text-center">image 3</label>
                    <input type="file" class="form-control" id="product_image_3" name="product_image_3">
                    <img
                            src="{{asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png")}}"
                            alt="image 3"
                            class="w-100 mt-3">
                </div>

                <div class="col-12 col-lg-3">
                    <label for="product_image_4" class="text-center">image 4</label>
                    <input type="file" class="form-control" id="product_image_4" name="product_image_4">
                    <img
                            src="{{asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png")}}"
                            alt="image 4"
                            class="w-100 mt-3">

                </div>



            </div>
        </div>


        <div id="screen_id">
            <h4 class="text-center mt-5 mb-3 border-bottom pb-3">screen_id</h4>

            <div class="row mb-3">
                <label for="product_size" class="col-sm-2 col-form-label">size</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_size" name="product_size">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_resolution" class="col-sm-2 col-form-label">resolution</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_resolution" name="product_resolution">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_technology" class="col-sm-2 col-form-label">technology</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_technology" name="product_technology">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_protection" class="col-sm-2 col-form-label">protection</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_protection" name="product_protection">
                </div>
            </div>

        </div>

        <div id="camera_id">
            <h4 class="text-center mt-5 mb-3 border-bottom pb-3">camera_id</h4>

            <div class="row mb-3">
                <label for="product_main_camera" class="col-sm-2 col-form-label">main_camera</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_main_camera" name="product_main_camera">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_main_camera_video" class="col-sm-2 col-form-label">main_camera_video</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_main_camera_video" name="product_main_camera_video">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_frontal_camera" class="col-sm-2 col-form-label">frontal_camera</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_frontal_camera" name="product_frontal_camera">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_frontal_camera_video" class="col-sm-2 col-form-label">frontal_camera_video</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_frontal_camera_video" name="product_frontal_camera_video">
                </div>
            </div>

        </div>

        <div id="platform_id">
            <h4 class="text-center mt-5 mb-3 border-bottom pb-3">platform_id</h4>

            <div class="row mb-3">
                <label for="product_operating_system" class="col-sm-2 col-form-label">operating_system</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_operating_system" name="product_operating_system">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_processor_model" class="col-sm-2 col-form-label">processor_model</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_processor_model" name="product_processor_model">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_processor_speed" class="col-sm-2 col-form-label">processor_speed</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_processor_speed" name="product_processor_speed">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_core" class="col-sm-2 col-form-label">core</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_core" name="product_core">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_graphics_processor" class="col-sm-2 col-form-label">graphics_processor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_graphics_processor" name="product_graphics_processor">
                </div>
            </div>

        </div>

        <div id="storage_id">
            <h4 class="text-center mt-5 mb-3 border-bottom pb-3">storage_id</h4>

            <div class="row mb-3">
                <label for="product_operating_memory" class="col-sm-2 col-form-label">operating_memory</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_operating_memory" name="product_operating_memory">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_internal_storage" class="col-sm-2 col-form-label">internal_storage</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_internal_storage" name="product_internal_storage">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_storage_card" class="col-sm-2 col-form-label">storage_card</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_storage_card" name="product_storage_card">
                </div>
            </div>

        </div>

        <div id="others_id">
            <h4 class="text-center mt-5 mb-3 border-bottom pb-3">others_id</h4>

            <div class="row mb-3">
                <label for="product_unblock" class="col-sm-2 col-form-label">unblock</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_unblock" name="product_unblock">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_4G" class="col-sm-2 col-form-label">4G</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_4G" name="product_4G">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_battery" class="col-sm-2 col-form-label">battery</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_battery" name="product_battery">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_battery_uncharge_time" class="col-sm-2 col-form-label">battery_uncharge_time</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_battery_uncharge_time" name="product_battery_uncharge_time">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_building" class="col-sm-2 col-form-label">building</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_building" name="product_building">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_weight" class="col-sm-2 col-form-label">weight</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_weight" name="product_weight">
                </div>
            </div>


            <div class="row mb-3">
                <label for="product_release" class="col-sm-2 col-form-label">release</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_release" name="product_release">
                </div>
            </div>

        </div>

        <button class="btn btn-primary" type="submit">
            submit
        </button>
    </form>

</div>




@endsection
