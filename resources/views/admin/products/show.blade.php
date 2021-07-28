@extends('layouts.index')


@section('content')

    <div class="py-5">
        <div class="container-main">
            <div class="shadow w-100 p-5">
                <div class="row" >
                    <div class="col-3">

                        <div class="row" style="height: 620px;">

                            <div class="col mb-4">
                                <div class="product-view-container w-auto">
                                    <div class="card border-1 pt-2">
                                        <div id="product-1" class="carousel carousel-dark slide card-img-top p-3" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png") }}" alt="" class="d-block">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="{{ asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png") }}" alt="" class="d-block">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="{{ asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png") }}" alt="" class="d-block">
                                                </div>

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
                                    <div class="d-flex flex-row justify-content-between w-100 image-triple mt-3">
                                        <div class="border p-1 image-triple-item border-selected">
                                            <img src="{{ asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png") }}" alt="" class="d-block w-100 h-100">
                                        </div>

                                        <div class="border p-1 image-triple-item">
                                            <img src="{{ asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png") }}" alt="" class="d-block w-100 h-100">
                                        </div>

                                        <div class="border p-1 image-triple-item">
                                            <img src="{{ asset("images/0110028_samsung-galaxy-a51-6gb-ram-128gb-lte-a515fd-black_550.png") }}" alt="" class="d-block w-100 h-100">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="w-100">
                                    <iframe width="100%" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col px-5">
                        <div class="row">
                            <div class="col">
                                <div class="text-start text-wrap fw-bold">
                                    <h2 class="h-2">
                                        {{ $product["name"] }}
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-2">
                                <div class="fw-bolder fs-4">
                                    <span>{{ $product["price_from"] }}</span>
                                    -
                                    <span>{{ $product["price_to"] }}</span>
                                    GEL
                                </div>
                            </div>
                            <div class="col">
                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                            <div class="col">
                                <div class="fs-5 text-end">

                                    <img src="{{asset("storage/icons/checked.svg")}}" alt="" class="icon-main pb-1">
                                    <span>
                                    მარაგშია
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
                                <div class="row">
                                    <div class="col">
                                        <div class="text-start my-5">
                                            <h5>
                                                მახასიათებლები:
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                @if($product->camera != null)
                                    <div class="row">
                                        <div class="col">
                                            <div class="row py-2 rounded-pill px-2">
                                                <div class="col-4">
                                                    <div class="fs-6 fw-bolder py-2">
                                                <span>
                                                    კამერა
                                                </span>
                                                    </div>
                                                </div>

                                                <div class="col">

                                                    @for($i = 0; $i < sizeof($product->camera->getAttributes()); $i++)
{{--                                                    @foreach($product->camera->getAttributes() as $key => $value)--}}


                                                    <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">
                                                        <div class="w-50">
                                                            <span>
                                                                {{array_keys($product->camera->getAttributes())[$i]}}
                                                            </span>
                                                        </div>

                                                        <div class="w-50">
                                                            <span>
                                                                {{$product->camera[array_keys($product->camera->getAttributes())[$i]]}}
                                                            </span>
                                                        </div>
                                                    </div>

                                                    @endfor

{{--                                                    <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                        <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">--}}
{{--                                                        <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                        <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

{{--                                <div class="row">--}}
{{--                                    <div class="col">--}}
{{--                                        <div class="row py-2 rounded-pill px-2">--}}
{{--                                            <div class="col-4">--}}
{{--                                                <div class="fs-6 fw-bolder py-2">--}}
{{--                                                <span>--}}
{{--                                                    მწარმოებელი--}}
{{--                                                </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col">--}}
{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col">--}}
{{--                                        <div class="row py-2 rounded-pill px-2">--}}
{{--                                            <div class="col-4">--}}
{{--                                                <div class="fs-6 fw-bolder py-2">--}}
{{--                                                <span>--}}
{{--                                                    მწარმოებელი--}}
{{--                                                </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col">--}}
{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col">--}}
{{--                                        <div class="row py-2 rounded-pill px-2">--}}
{{--                                            <div class="col-4">--}}
{{--                                                <div class="fs-6 fw-bolder py-2">--}}
{{--                                                <span>--}}
{{--                                                    მწარმოებელი--}}
{{--                                                </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col">--}}
{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col">--}}
{{--                                        <div class="row py-2 rounded-pill px-2">--}}
{{--                                            <div class="col-4">--}}
{{--                                                <div class="fs-6 fw-bolder py-2">--}}
{{--                                                <span>--}}
{{--                                                    მწარმოებელი--}}
{{--                                                </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col">--}}
{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-light-gray px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


{{--                                                <div class="d-flex flex-row align-items-center justify-content-start w-100 bg-white px-4 py-2">--}}
{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        ბრენდი--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="w-50">--}}
{{--                                                    <span>--}}
{{--                                                        Samsung--}}
{{--                                                    </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>



@endsection