@extends('layouts.app')

@section('content')
    <div class="container">


        @if(session()->has('message'))
            <div class="alert alert-success">
                <p>
                    {{ session()->get('message') }}
                </p>
            </div>
        @endif


        <div class="row align-items-center">

            <div class="col-auto my-2">
                <a href="{{ route('admin.home') }}">
                    <i class="bi bi-arrow-left"></i>
                    return back
                </a>
            </div>


            <div class="col-auto my-2">
                <a href="{{ route('products.create') }}" class="btn btn-primary text-white">
                    Add Product
                </a>
            </div>

            
        </div>

    </div>


    <div class="container-main">
        <div class="row">
            <div class="col-md-auto col-12">
                <div class="filter-item m-auto">
                    <div class="row py-5">
                        <div class="col">
                            <h2 class="fw-bolder text-start">ფილტრი</h2>
                        </div>
                    </div>

                    <div class="row shadow">

                        <form id="filterForm">
    
                            <div class="col-12 py-3">
    
                                <div class="py-2">
                                    <h5 class="border-bottom pb-2 ps-4">ფასი</h5>
                                </div>
    
                                <div class="d-flex flex-row price-controller align-content-between px-3">
                                    <label>
                                        min: 
                                        <input type="text" id="price_min" name="price[min]" class="form-control">
    
                                    </label>
    
                                    <label class="ms-4">
                                        max:
                                        <input type="text" id="price_max" name="price[max]" class="form-control">
                                    </label>

                                    <button type="submit" id="submitPrice" class="btn button-orange ms-3 mt-4">
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>

                                
                            </div>
    
                            <div class="col-12 py-3 categories">
                                <div class="py-2">
                                    <h5 class="border-bottom pb-2 ps-4">კატეგორია</h5>
                                </div>
                                <ul>
    
                                    @foreach($categories as $category)
                                        <li>
                                            <label>
                                                <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-check-input me-1 product-item-checkbox">
                                                {{ $category->category }}
                                            </label>
                                        </li>
                                    @endforeach
    
                                </ul>
                            </div>
    
                            <div id="subcategories" class="col-12 py-3 subcategories">
                                <div class="py-2">
                                    <h5 class="border-bottom pb-2 ps-4">ქვეკატეგორია</h5>
                                </div>
                                <ul id="subcategoriesContainer">

                                        {{-- @foreach($subcategories as $subcategory)
                                            <li>
                                                <label>
                                                    <input type="checkbox" name="subcategories[]" value="{{$subcategory->id}}" class="form-check-input me-1 product-item-checkbox">
                                                    {{ $subcategory->subcategory }}
                                                </label>
                                            </li>
                                        @endforeach --}}


    
                                </ul>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row py-5">
                    <div class="col">
                        <h2 class="fw-bolder text-center">პროდუქტი</h2>
                    </div>
                </div>

                <div class="row mb-5 ms-4">
                    <div class="col-auto">
                        <form action="{{route('index.products', app()->getLocale())}}" method="GET" id="sortByForm">
                            <label for="sortBy">Sort By: </label>
                            <select name="sortBy" id="sortBy" class="form-select form-select">
                                <option value="default" selected>Default</option>
                                <option value="name%2B">Name (A - Z)</option>
                                <option value="name%2D">Name (Z - A)</option>
                                <option value="price%2D">Price (High > Low)</option>
                                <option value="price%2B">Price (Low > High)</option>
                            </select>
                        </form>
                    </div>
                </div>

                <div id="productsContainer" class="row">
                    
                    @if(sizeof($_GET) > 0)
                        @foreach($products as $productIndex => $productValue)
                            <div class="col mb-4">
                                <div class="card product-container shadow border-0 pt-2 m-auto">
                                    <div id="product-{{ $productValue->id }}" class="carousel carousel-dark slide card-img-top " data-interval="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset("storage/product_images/".$productValue->images->image_1) }}" alt="" class="d-block">
                                            </div>
                                            
                                            @if($productValue->images->image_2 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset("storage/product_images/".$productValue->images->image_2) }}" alt="" class="d-block">
                                            </div>
                                            @endif

                                            @if($productValue->images->image_3 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset("storage/product_images/".$productValue->images->image_3) }}" alt="" class="d-block">
                                            </div>
                                            @endif

                                            @if($productValue->images->image_4 != null)
                                            <div class="carousel-item">
                                                <img src="{{ asset("storage/product_images/".$productValue->images->image_4) }}" alt="" class="d-block">
                                            </div>
                                            @endif

                                            <button class="carousel-control-prev" type="button" data-bs-target="#product-{{ $productValue->id }}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>

                                            <button class="carousel-control-next" type="button" data-bs-target="#product-{{ $productValue->id }}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body text-center">
                                        <h6 class="card-text">
                                            <a href="{{ route('index.product', ['language' => app()->getLocale(), 'id' => $productValue->id]) }}">
                                                {{ $productValue->name }}
                                            </a>
                                        </h6>
                                        <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                            <div class="fw-bolder">
                                                <span>{{ $productValue->price_from }}</span>
                                                -
                                                <span>{{ $productValue->price_to }}</span>
                                                GEL
                                            </div>

                                        </div>

                                        <div class="d-flex flex-row mt-3">
                                            <a href=" {{ route('products.edit', ['product' => $productValue->id]) }} " class="btn btn-primary text-white">
                                                Edit
                                            </a>

                                            <form
                                                    action="{{ route('products.destroy', ['product' => $productValue->id]) }}"
                                                    method="POST"
                                                    class="ms-3">
                                                @csrf
                                                @method('delete')
                            
                                                <button
                                                        class="btn btn-danger text-white"
                                                        type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    
                </div>
            </div>
        </div>
    </div>

@endsection
