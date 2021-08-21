@extends('layouts.app')


@section('content')

    <div class="container">    
        
        <div class="row">
            <div class="col">

                <form action="{{ route('contactInfo.store') }}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <span class="input-group-text">ტელეფონი</span>
                        <input type="text" class="form-control" placeholder="ტელ. ნომერი" name="phone_number" value="{{$info['phone_number']}}">
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">facebook</span>
                        <input type="text" class="form-control" placeholder="www.facebook.com/username" name="facebook" value="{{$info['facebook']}}">
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">mail</span>
                        <input type="text" class="form-control" placeholder="example@mail.com" name="gmail" value="{{$info['gmail']}}">
                    </div>
                     
                    <div class="input-group mb-3">
                        <span class="input-group-text">instagram</span>
                        <input type="text" class="form-control" placeholder="www.instagram.com/username" name="instagram" value="{{$info['instagram']}}">
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">whatsapp</span>
                        <input type="text" class="form-control" placeholder="whatsapp number" name="whatsapp" value="{{$info['whatsapp']}}">
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">location</span>
                        <input type="text" class="form-control" placeholder="coordinates" name="location" value="{{$info['location']}}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">about (ka)</span>
                        <textarea class="form-control" rows="20" name="about_ka">{{$info['about_ka']}}</textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">about (en)</span>
                        <textarea class="form-control" rows="20" name="about_en" >{{$info['about_en']}}</textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">about (ru)</span>
                        <textarea class="form-control" rows="20" name="about_ru" >{{$info['about_ru']}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>

                </form>
                

            </div>
        </div>


    </div>

@endsection