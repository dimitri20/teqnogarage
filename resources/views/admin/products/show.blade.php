@extends('layouts.app')


@section('content')



    <div class="container-main">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <p>
                        {{ session()->get('message') }}
                    </p>
                </div>
            @endif
        </div>

        <div class="row align-items-center">

            <div class="col-auto my-2">
                <a href="{{ route('products.index') }}">
                    <i class="bi bi-arrow-left"></i>
                    return back
                </a>
            </div>

            <div class="col-auto my-2">
                <a href=" {{ route('products.edit', ['product' => $product->id]) }} " class="btn btn-primary text-white">
                    Edit Product
                </a>
            </div>

            <div class="col-auto my-2">
                <form
                        action="{{ route('products.destroy', ['product' => $product->id]) }}"
                        method="POST">
                    @csrf
                    @method('delete')

                    <button
                            class="btn btn-danger text-white"
                            type="submit">
                        Delete Product
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container-main">
            <div class="shadow w-100 p-5">
                <div class="row" >
                    <div class="col-lg-3 col-12">
    
                        <div class="row">
    
                            <div class="col mb-4">
                                <div class="product-view-container w-auto">
                                    <div class="card border-1 pt-2 w-lg-100 w-75 m-auto h-auto">
                                        <div id="product-1" class="carousel carousel-dark slide card-img-top p-3 h-100" data-bs-ride="carousel">
                                            <div class="carousel-inner h-100">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset("storage/product_images/".$product->images->image_1) }}" alt="" class="d-block">
                                                </div>
                                                
                                                @if($product->images->image_2 != null)
                                                <div class="carousel-item">
                                                    <img src="{{ asset("storage/product_images/".$product->images->image_2) }}" alt="" class="d-block">
                                                </div>
                                                @endif
        
                                                @if($product->images->image_3 != null)
                                                <div class="carousel-item">
                                                    <img src="{{ asset("storage/product_images/".$product->images->image_3) }}" alt="" class="d-block">
                                                </div>
                                                @endif
        
                                                @if($product->images->image_4 != null)
                                                <div class="carousel-item">
                                                    <img src="{{ asset("storage/product_images/".$product->images->image_4) }}" alt="" class="d-block">
                                                </div>
                                                @endif
    
                                                <button class="carousel-control-prev" type="button" data-bs-target="#product-1" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
    
                                                <button class="carousel-control-next" type="button" data-bs-target="#product-1" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="d-flex flex-row justify-content-between w-100 image-triple mt-3">
    
                                        <div class="border p-1 image-triple-item border-selected">
                                            <img src="{{ asset("storage/product_images/".$images["image_2"]) }}" alt="" class="d-block w-100 h-100">
                                        </div>
    
                                        <div class="border p-1 image-triple-item">
                                            <img src="{{ asset("storage/product_images/".$images["image_3"]) }}" alt="" class="d-block w-100 h-100">
                                        </div>
    
                                        <div class="border p-1 image-triple-item">
                                            <img src="{{ asset("storage/product_images/".$images["image_4"]) }}" alt="" class="d-block w-100 h-100">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
    
                        </div>
    
                        <div class="row mt-5">
                            <div class="col">
                                <div class="w-100">
                                    {!! $product->video_url !!}
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col px-5 mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col">
                                <div class="text-start text-wrap fw-bold">
                                    <h2 class="h-2">
                                        {{ $product->name }}
                                    </h2>
                                </div>
                            </div>
                        </div>
    
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-auto">
                                <div class="fw-bolder fs-4">
                                    <span>{{ $product->price_from }}</span>
                                    -
                                    <span>{{ $product->price_to }}</span>
                                    GEL
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="fs-5">
    
                                    <span class="d-flex flex-row align-items-center">
                                        @if($product->available == 1)
                                            <i class="bi bi-check-lg me-1 text-success"></i>
                                            მარაგშია
                                        @else
                                            <i class="bi bi-x-lg me-1 text-danger"></i>
                                            არ არის მარაგში
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
    
                        <div class="row my-3">
                            <div class="col">
                                <div>
                                    <button class="btn button-orange rounded-pill p-2 px-4 fs-5">
                                        განვადების გაფორმება
                                    </button>
                                </div>
                            </div>
                        </div>
    
                        <div class="row my-5">
                            <div class="col">
                                <div class="text-start my-4">
                                    <h5>
                                        აღწერა:
                                    </h5>
                                </div>
    
                                <div class="text-start">
                                    {{ $product->description_ka }}
                                </div>
                            </div>
                        </div>
    
                        <div class="row my-5">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="text-start my-5">
                                            <h5>
                                                მახასიათებლები:
                                            </h5>
                                        </div>
                                    </div>
                                </div>
    
                                @php $count = 0; @endphp
                                @foreach($productDetails as $productKey => $detail)
                                    <div class="row">
                                        <div class="col">
                                            <div class="row py-2 rounded-pill px-2">
                                                <div class="col-4">
                                                    <div class="fs-6 fw-bolder py-2">
                                                        <span>
                                                            {{ $detail['category'] }}
                                                        </span>
                                                    </div>
                                                </div>
    
                                                <div class="col">
                                                    @foreach($detail['values'] as $detailsKey => $details)
                                                        <div class="d-flex flex-row align-items-center justify-content-start w-100 px-4 py-2 @if($count%2 == 0) bg-light-gray @endif">
    
                                                            <div class="w-50">
                                                                <span>
                                                                    {{ $details['characteristic_attribute'] }}
                                                                </span>
                                                            </div>
    
                                                            <div class="w-50">
                                                                <span>
                                                                    {{ $details['characteristic_value_en'] }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $count++;
                                                        @endphp
                                                    @endforeach
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
    
    
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </div>
    </div>
    


@endsection