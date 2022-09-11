@extends('layouts.app')

@section('content')

    <div>
        <div class="container">

            @if(session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <div class="row justify-content-center">
    
                <div class="col-auto my-3">
                    <a href="{{ route('products.index') }}">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title text-decoration-underline">Products</h5>
                              
                              <p class="card-text">Create, Read, Update and Remove Products</p>
                            </div>
                        </div>
                    </a>
                </div>
    
    
                <div class="col-auto my-3">
                    <a href="{{ route('categories.create') }}">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title text-decoration-underline">Categories</h5>
                              
                              <p class="card-text">Create, Read, Update and Remove Categories</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto my-3">
                    <a href="{{ route('bannerImages.create') }}">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title text-decoration-underline">Banner Images</h5>
                              
                              <p class="card-text">Create, Read, Update and Remove Banner Images</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto my-3">
                    <a href="{{ route('contactInfo.create') }}">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title text-decoration-underline">Contact Info</h5>
                              
                              <p class="card-text">Create, Read, Update and Remove Contact Info</p>
                            </div>
                        </div>
                    </a>
                </div>
    
                {{-- <div class="col-auto my-3">
                    <a href="{{ route('about.create') }}">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title text-decoration-underline">About</h5>
                              
                              <p class="card-text">Create, Read, Update and Remove About Us Page Info</p>
                            </div>
                        </div>
                    </a>
                </div> --}}


            </div>
            
        </div>
    </div>



    <div class="mt-5">

        

        <div class="container">

            <h2 class="text-center">Feedback</h2>

            
                @foreach ($feedback as $item)

                    <div class="card w-100 mt-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item["name"] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $item["number"] }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $item["mail"] }}</h6>
                            <p class="card-text">{{ $item["text"] }}</p>


                            <span>{{ $item["created_at"] }}</span>
                        </div>
                    </div>

                @endforeach

            </div>
            

    </div>

@endsection
