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
            <div class="col-3">
                <div class="filter-item">
                    <div class="row py-5">
                        <div class="col">
                            <h2 class="fw-bolder text-start">ფილტრი</h2>
                        </div>
                    </div>

                    <div class="row shadow">

                        <div class="col-12 py-3">
                            <div class="py-2">
                                <h5 class="border-bottom pb-2 ps-4">ფასი</h5>
                            </div>

                            <div class="d-flex flex-row price-controller align-content-between">
                                <label>
                                    min: 
                                    <input type="text" class="form-control">

                                </label>

                                <label>
                                    max:
                                    <input type="text" class="form-control">
                                </label>
                            </div>
                        </div>

                        <div class="col-12 py-3">
                            <div class="py-2">
                                <h5 class="border-bottom pb-2 ps-4">კატეგორია</h5>
                            </div>
                            <ul>

                                @foreach($categories as $categoryKey => $categoryVal)
                                    <li>
                                        <label>
                                            <input type="checkbox" name="{{ $categoryKey }}" id="" class="form-check-input me-1 product-item-checkbox">
                                            {{ $categoryKey }}
                                        </label>
                                    </li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="col-12 py-3">
                            <div class="py-2">
                                <h5 class="border-bottom pb-2 ps-4">ქვეკატეგორია</h5>
                            </div>
                            <ul>

                                @foreach($categories as $categoryKey => $categoryVal)

                                    @if(sizeof($categoryVal) > 0)
                                        @foreach($categoryVal as $subCategory)
                                            <li>
                                                <label>
                                                    <input type="checkbox" name="{{ $subCategory->subcategory }}" id="" class="form-check-input me-1 product-item-checkbox">
                                                    {{ $subCategory->subcategory }}
                                                </label>
                                            </li>
                                        @endforeach
                                    @endif
                            
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row py-5">
                    <div class="col">
                        <h2 class="fw-bolder text-center">პროდუქტი</h2>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-2">
                        <select name="filterBy" id="filterBy" class="form-select form-select-lg">
                            <option value="" selected>Sort By</option>
                        </select>
                    </div>
                </div>

                <div class="row">

                    @foreach($products as $productIndex => $productValue)
                        <div class="col mb-4">
                            <div class="card product-container shadow border-0 pt-2">
                                <div id="product-{{ $productValue->id }}" class="carousel carousel-dark slide card-img-top " data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset("storage/product_images/".$images[$productIndex]->image_1) }}" alt="" class="d-block">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="{{ asset("storage/product_images/".$images[$productIndex]->image_2) }}" alt="" class="d-block">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="{{ asset("storage/product_images/".$images[$productIndex]->image_3) }}" alt="" class="d-block">
                                        </div>

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
                                        <a href="{{ route('products.show', ['product' => $productValue->id]) }}">
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

                                        <a href="#">
                                            <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
