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
                    <a href="{{ route('products.index') }}?categories[]=">
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

@endsection
