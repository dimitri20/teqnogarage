@extends('layouts.app')


@section('content')

    <div class="container">    
        
        <div class="row">
            <div class="col">

                <form action="{{ route('contactInfo.store') }}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <span class="input-group-text">ტელეფონი</span>
                        <input type="text" class="form-control" placeholder="ტელ. ნომერი" name="phone_number" value="@if(array_key_exists('phone_number', $info)){{$info['phone_number']}}@endif">
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">facebook</span>
                        <input type="text" class="form-control" placeholder="www.facebook.com/username" name="facebook" value="@if(array_key_exists('facebook', $info)){{$info['facebook']}}@endif">
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">mail</span>
                        <input type="text" class="form-control" placeholder="example@mail.com" name="gmail" value="@if(array_key_exists('gmail', $info)){{$info['gmail']}}@endif">
                    </div>
                     
                    <div class="input-group mb-3">
                        <span class="input-group-text">instagram</span>
                        <input type="text" class="form-control" placeholder="www.instagram.com/username" name="instagram" value="@if(array_key_exists('instagram', $info)){{$info['instagram']}}@endif">
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">whatsapp</span>
                        <input type="text" class="form-control" placeholder="whatsapp number" name="whatsapp" value="@if(array_key_exists('whatsapp', $info)){{$info['whatsapp']}}@endif">
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">location</span>
                        <input type="text" class="form-control" placeholder="coordinates" name="location" value="@if(array_key_exists('location', $info)){{$info['location']}}@endif">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">about (ka)</span>
                        <textarea class="form-control" rows="20" name="about_ka">@if(array_key_exists('about_ka', $info)){{$info['about_ka']}}@endif</textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">about (en)</span>
                        <textarea class="form-control" rows="20" name="about_en" >@if(array_key_exists('about_en', $info)){{$info['about_en']}}@endif</textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">about (ru)</span>
                        <textarea class="form-control" rows="20" name="about_ru" >@if(array_key_exists('about_ru', $info)){{$info['about_ru']}}@endif</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>

                </form>
                

            </div>
        </div>


    </div>

@endsection