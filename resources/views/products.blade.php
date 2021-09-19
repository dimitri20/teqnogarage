@extends('layouts.index')


@section('content')
    <div class="container-main">
        <div class="row">
            <div class="col-md-auto col-12">
                <div class="filter-item m-auto">
                    <div class="row py-5">
                        <div class="col">
                            <h4 class="fw-bolder text-start">{{ __("ფილტრი") }}</h4>
                        </div>
                    </div>

                    <div class="row shadow">

                        <form id="filterForm">
    
                            <div id="subcategories" class="col-12 py-3 subcategories">
                                <div class="py-2">
                                    <h5 class="border-bottom pb-2 ps-4">{{ __("ქვეკატეგორია") }}</h5>
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
    
                            <div class="col-12 py-3 categories">
                                <div class="py-2">
                                    <h5 class="border-bottom pb-2 ps-4">{{ __("კატეგორია") }}</h5>
                                </div>
                                <ul>
    
                                    @foreach($categories as $category)
                                        <li>
                                            <label>
                                                <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-check-input me-1 product-item-checkbox">
                                                {{ $category['category_'.app()->getLocale()] }}
                                            </label>
                                        </li>
                                    @endforeach
    
                                </ul>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row py-5">
                    <div class="col">
                        <h4 id="productsTitle" class="fw-bolder text-center">{{ __("პროდუქტი") }}</h4>
                    </div>
                </div>

                <div class="row mb-5 ms-0 ms-md-4">
                    <div class="col-12 w-100 d-flex flex-row flex-nowrap justify-content-center">
                    
                        <div class="d-flex flex-row price-controller align-items-center mx-0 px-lg-5 mx-md-5 mx-xl-0 order-2 ms-3">
                            <span class="px-3 mt-3 d-none d-md-block">{{__("ფასი")}}: </span>

                            <label>
                                {{__("მინ")}}: 
                                <input type="text" id="price_min" name="price[min]" class="form-control">
    
                            </label>
    
                            <label class="ms-2 ms-md-4">
                                {{__("მაქს")}}:
                                <input type="text" id="price_max" name="price[max]" class="form-control">
                            </label>
    
                            <button type="submit" id="submitPrice" class="btn button-orange ms-2 mt-4">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>

                        <form id="sortByForm" class="px-lg-5 mx-0 mx-md-5 mx-lg-0 my-3 order-1">
                            <label for="sortBy">{{__("სორტირება")}} </label>
                            <select name="sortBy" id="sortBy" class="form-select form-select">
                                <option value="default" selected>Default</option>
                                <option value="name+">{{ __("სახელი (A - Z)") }}</option>
                                <option value="name-">{{ __("სახელი (Z - A)") }}</option>
                                <option value="price-">{{ __("ფასი (კლებადობა)") }}</option>
                                <option value="price+">{{ __("ფასი (ზრდადობა)") }}</option>
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
                                                <a href="{{ route('index.product', ['language' => app()->getLocale(), 'id' => $productValue->id]) }}">
                                                    <img src="{{ asset("storage/product_images/".$productValue->images->image_1) }}" alt="" class="d-block">
                                                </a>
                                            </div>
                                            
                                            @if($productValue->images->image_2 != null)
                                            <div class="carousel-item">
                                                <a href="{{ route('index.product', ['language' => app()->getLocale(), 'id' => $productValue->id]) }}">
                                                    <img src="{{ asset("storage/product_images/".$productValue->images->image_2) }}" alt="" class="d-block">
                                                </a>
                                                
                                            </div>
                                            @endif

                                            @if($productValue->images->image_3 != null)
                                            <div class="carousel-item">
                                                <a href="{{ route('index.product', ['language' => app()->getLocale(), 'id' => $productValue->id]) }}">
                                                    <img src="{{ asset("storage/product_images/".$productValue->images->image_3) }}" alt="" class="d-block">
                                                </a>
                                                
                                            </div>
                                            @endif

                                            @if($productValue->images->image_4 != null)
                                            <div class="carousel-item">
                                                <a href="{{ route('index.product', ['language' => app()->getLocale(), 'id' => $productValue->id]) }}">
                                                    <img src="{{ asset("storage/product_images/".$productValue->images->image_4) }}" alt="" class="d-block">
                                                </a>
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
                                                {{ __("ლარი") }}
                                            </div>
                                            
                                            
                                            <div class="btn add-to-cart-button" data-id="{{ $productValue->id }}">
                                                <img src="{{asset('storage/icons/add-to-cart.svg')}}" class="icon-add-to-cart" alt="add to cart" data-id="{{ $productValue->id }}">
                                            </div>
                                            
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