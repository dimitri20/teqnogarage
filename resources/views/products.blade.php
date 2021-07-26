@extends('layouts.index')


@section('content')

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
                            <h5 class="border-bottom pb-2 ps-4">კატეგორია</h5>
                        </div>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>
    
                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 py-3">
                        <div class="py-2">
                            <h5 class="border-bottom pb-2 ps-4">კატეგორია</h5>
                        </div>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>
    
                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 py-3">
                        <div class="py-2">
                            <h5 class="border-bottom pb-2 ps-4">კატეგორია</h5>
                        </div>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>
    
                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 py-3">
                        <div class="py-2">
                            <h5 class="border-bottom pb-2 ps-4">კატეგორია</h5>
                        </div>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>
    
                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input type="checkbox" name="" id="" class="form-check-input me-1 product-item-checkbox">
                                    phone
                                </label>
                            </li>
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

            <div class="row">

                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>
                                
                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card product-container shadow border-0 pt-2">
                        <div id="product-1" class="carousel carousel-dark slide card-img-top " data-interval="false">
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

                        <div class="card-body text-center">
                            <h6 class="card-text">Samsung Galaxy A51 6GB RAM 128GB LTE A515FD Black</h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>280</span>
                                    -
                                    <span>340</span>
                                    GEL
                                </div>

                                <a href="#">
                                    <img src="{{ asset("storage/icons/add-to-cart.svg") }}" alt="" class="icon-add-to-cart">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>


@endsection