@extends('layouts.app')

@section('content')

    <div class="container-main">
        <a href="{{ route('products.show', ['product' => $product->id]) }}">
            <i class="bi bi-arrow-left"></i>
            return back
        </a>
    </div>

    <div class="row">
        <div class="col-3 admin-menu-right bg-white shadow m-3 ms-4 px-4">

            <div class="row my-5">
                <h5 class="border-bottom text-center px-3 my-3 pb-1 fw-bolder">Add Categories</h5>
                <div id="addCategoryGroup" class="col d-flex flex-column text-center">

                    <label class="d-flex flex-row align-items-center">
                        <span class="px-3">ka</span>
                        <input id="addCategory-ka" type="text" class="form-control my-1">
                    </label>

                    <label class="d-flex flex-row align-items-center">
                        <span class="px-3">en</span>
                        <input id="addCategory-en" type="text" class="form-control my-1">
                    </label>

                    <label class="d-flex flex-row align-items-center">
                        <span class="px-3">ru</span>
                        <input id="addCategory-ru" type="text" class="form-control my-1">
                    </label>

                    <div id="addCategory" class="fs-5 btn btn-primary my-3">
                        <i class="bi bi-plus-lg"></i>
                        Add Category
                    </div>
                </div>
            </div> <!-- add category -->

            <div class="row my-5">
                <h5 class="border-bottom text-center px-3 my-3 pb-1 fw-bolder">Add Attributes</h5>
                <div id="addAttributeGroup" class="col d-flex flex-column text-center">

                    <label class="d-flex flex-row align-items-center">
                        <span class="px-3">ka</span>
                        <input type="text" id="addAttribute-ka" class="form-control my-1">
                    </label>

                    <label class="d-flex flex-row align-items-center">
                        <span class="px-3">en</span>
                        <input type="text" id="addAttribute-en" class="form-control my-1">
                    </label>

                    <label class="d-flex flex-row align-items-center">
                        <span class="px-3">ru</span>
                        <input type="text" id="addAttribute-ru" class="form-control my-1">
                    </label>

                    <label>
                        <select id="selectCategory" class="form-select my-1">

                        </select>
                    </label>

                    <div id="addAttribute" class="fs-5 btn btn-primary my-3">
                        <i class="bi bi-plus-lg"></i>
                        Add Attribute
                    </div>
                </div> <!-- add attribute -->


            </div>

            <div class="row my-5">
                <h5 class="border-bottom text-center text-danger px-3 my-3 pb-1 fw-bolder">Remove Categories</h5>
                <div id="removeCategoryGroup" class="col d-flex flex-column text-center">

                    <h6 class="text-start border-bottom">Add Categories to removable list</h6>
                    <div id="addToRemovableCategoriesList" class="d-flex flex-wrap">

                    </div>

                    <h6 class="text-start mt-4 border-bottom">Categories to remove</h6>
                    <div id="categoriesToRemove" class="d-flex flex-wrap">
                                                <span class="text-secondary empty-message">empty</span>
                    </div>

                    <div id="removeCategories" class="fs-5 btn btn-danger my-3">
                        <i class="bi bi-x"></i>
                        Remove Selected Categories
                    </div>
                </div> <!-- add attribute -->


            </div>

            <div class="row my-5">
                <h5 class="border-bottom text-center text-danger px-3 my-3 pb-1 fw-bolder">Remove Attributes</h5>
                <div id="removeAttributeGroup" class="col d-flex flex-column text-center">

                    <h6 class="text-start border-bottom">Add Attributes to removable list</h6>
                    <div id="AddToRemovableAttributesList" class="d-flex flex-wrap">

                    </div>

                    <h6 class="text-start mt-4 border-bottom">Attributes to remove</h6>
                    <div id="attributesToRemove" class="d-flex flex-wrap">

                    </div>

                    <div id="removeAttributes" class="fs-5 btn btn-danger my-3">
                        <i class="bi bi-x"></i>
                        Remove Selected Attributes
                    </div>
                </div> <!-- add attribute -->


            </div>
        </div>


        <div class="col">
            <div class="row my-4">
                <div class="col text-center">
                    <h1>Edit Product</h1>
                </div>
            </div>

            <div class="container">

                <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data" id="mainForm">
                    @csrf
                    @method('PUT')
                    <div id="globals">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-sm-2 col-form-label">category</label>
                            <div class="col-sm-4">
                                <select class="form-select" name="category" id="category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}" @if($product->categories_id == $category['id']) selected @endif>{{ $category['category'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="subcategory" class="col-sm-2 col-form-label">subcategory</label>
                            <div class="col-sm-4">
                                <input type="hidden" id="product-subcategory-id" value="{{ $product->subcategories_id }}">
                                <select class="form-select" name="subcategory" id="subcategory">
                                    {{-- @foreach($subcategories as $subcategory)
                                        <option value="{{ $subcategory['id'] }}" @if($product->subcategories_id == $subcategory['id']) selected @endif>{{ $subcategory['subcategory'] }}</option>
                                    @endforeach --}}
                                    @foreach ($subcategoriesFormatted as $subcategory)
                                        <option value="{{ $subcategory['id'] }}" @if($product->subcategories_id == $subcategory['id']) selected @endif>{{ $subcategory['subcategory'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="video_url" class="col-sm-2 col-form-label">video url</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="video_url" name="video_url" value="{{ $product->video_url }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="available" class="col-sm-2 col-form-label">available</label>
                            <div class="col-sm-4" id="available">

                                <select class="form-select" name="available" id="available">
                                    <option value="1" @if($product->available == 1) selected @endif>available</option>
                                    <option value="0" @if($product->available == 0) selected @endif>not available</option>
                                </select>
                            </div>
                        </div>



                        <div class="row mb-3">

                            <label for="price" class="col-sm-2 col-form-label">price</label>
                            <div class="col-sm-10" id="price">
                                <div class="row">
                                    <div class="col">
                                        <label for="price_from" class="text-center">from</label>
                                        <input type="number" class="form-control" id="price_from" name="price_from" value="{{ $product->price_from }}">
                                    </div>

                                    <div class="col">
                                        <label for="price_to" class="text-center">to</label>
                                        <input type="number" class="form-control" id="price_to" name="price_to" value="{{ $product->price_to }}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row py-1 my-4 align-items-center">
                            <div class="col-3">
                                <span class="fs-6 text-wrap">description</span>
                            </div>

                            <div class="col d-flex flex-column text-center pb-3 border-bottom">
                                <label class="d-flex flex-row align-items-center my-2">
                                    <span class="px-3">ka</span>
                                    <textarea class="form-control" name="description_ka" cols="30" rows="10">{{ $product->description_ka }}</textarea>
                                </label>

                                <label class="d-flex flex-row align-items-center my-2">
                                    <span class="px-3">en</span>
                                    <textarea class="form-control" name="description_en" cols="30" rows="10">{{ $product->description_en }}</textarea>
                                </label>

                                <label class="d-flex flex-row align-items-center my-2">
                                    <span class="px-3">ru</span>
                                    <textarea class="form-control" name="description_ru" cols="30" rows="10">{{ $product->description_ru }}</textarea>
                                </label>
                            </div>
                        </div>


                    </div>


                    <div id="images">
                        <h4 class="text-center mt-5 mb-3 border-bottom pb-3">Images</h4>

                        <div class="row mb-3">

                            <div class="col-12 col-lg-3 images-input-container">

                                <label class="text-start">
                                    image 1 (the main image)
                                    <input type="file" class="form-control" name="image_1" accept="image/*" value="{{ $images->image_1  }}">
                                </label>

                                <div class="image-container w-100">
                                    <div class="delete-image my-2 btn btn-danger d-none"><i class="bi bi-x"></i> remove </div>
                                    <img
                                            src="{{ asset('storage/product_images/'.$images->image_1) }}"
                                            alt="image 1"
                                            class="w-100 mt-3">
                                </div>

                            </div>

                            <div class="col-12 col-lg-3 images-input-container">

                                <label class="text-start">
                                    image 2
                                    <input type="file" class="form-control" name="image_2" accept="image/*" value="{{ $images->image_2 }}">
                                </label>

                                <div class="image-container w-100">
                                    <div class="delete-image my-2 btn btn-danger d-none"><i class="bi bi-x"></i> remove </div>
                                    <img
                                            src="{{ asset('storage/product_images/'.$images->image_2) }}"
                                            alt="image 2"
                                            class="w-100 mt-3">
                                </div>
                            </div>

                            <div class="col-12 col-lg-3 images-input-container">
                                <label class="text-start">
                                    image 3
                                    <input type="file" class="form-control" name="image_3" accept="image/*" value="{{ $images->image_3 }}">
                                </label>

                                <div class="image-container w-100">
                                    <div class="delete-image my-2 btn btn-danger d-none"><i class="bi bi-x"></i> remove </div>
                                    <img
                                            src="{{ asset('storage/product_images/'.$images->image_3) }}"
                                            alt="image 2"
                                            class="w-100 mt-3">
                                </div>
                            </div>

                            <div class="col-12 col-lg-3 images-input-container">
                                <label class="text-start">
                                    image 4
                                    <input type="file" class="form-control" name="image_4" accept="image/*" value="{{ $images->image_4 }}">
                                </label>

                                <div class="image-container w-100">
                                    <div class="delete-image my-2 btn btn-danger d-none"><i class="bi bi-x"></i> remove </div>
                                    <img
                                            src="{{ asset('storage/product_images/'.$images->image_4) }}"
                                            alt="image 2"
                                            class="w-100 mt-3">
                                </div>
                            </div>



                        </div>
                    </div>

                    <div id="mainCategoryContainer" class="category-group accordion accordion-flush my-5 border-secondary pb-2">

                        @foreach($productDetails as $productDetail)

                            <div id="{{ $productDetail['category'] }}" class="accordion-item">

                                <h4 class="accordion-header" id="{{ $productDetail['category'] }}_header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $productDetail['category'] }}_body_container" aria-expanded="true" aria-controls="{{$productDetail['category']}}_body_container">
                                        {{ $productDetail['category'] }}
                                    </button>
                                    <input type="hidden" data-parent="{{ $productDetail['category'] }}" data-language="ka" name="{{ $productDetail['category'] }}_ka" value="{{$productDetail['values'][0]['characteristic_category_ka']}}">
                                    <input type="hidden" data-parent="{{ $productDetail['category'] }}" data-language="en" name="{{ $productDetail['category'] }}_en" value="{{$productDetail['values'][0]['characteristic_category_en']}}">
                                    <input type="hidden" data-parent="{{ $productDetail['category'] }}" data-language="ru" name="{{ $productDetail['category'] }}_ru" value="{{$productDetail['values'][0]['characteristic_category_ru']}}">
                                </h4>

                                <div id="{{ $productDetail['category'] }}_body_container" class="accordion-collapse collapse show" aria-labelledby="{{ $productDetail['category'] }}_header" data-bs-parent="#mainCategoryContainer">
                                    <div id="{{ $productDetail['category'] }}_body" class="accordion-body">

                                        @foreach($productDetail['values'] as $value)

                                            <div id="{{ $value['characteristic_attribute'] }}" class="row py-1 my-4 align-items-center">
                                                <div class="attribute-header col-3">
                                                    <span class="fs-5 text-wrap attribute-header">{{ $value['characteristic_attribute'] }}</span>
                                                    <input type="hidden" data-language="ka" name="{{ $value['characteristic_attribute'] }}_ka" value="{{ $value['characteristic_attribute_ka'] }}">
                                                    <input type="hidden" data-language="en" name="{{ $value['characteristic_attribute'] }}_en" value="{{ $value['characteristic_attribute_en'] }}">
                                                    <input type="hidden" data-language="ru" name="{{ $value['characteristic_attribute'] }}_ru" value="{{ $value['characteristic_attribute_ru'] }}">
                                                </div>

                                                <div class="attribute-body col d-flex flex-column text-center pb-3 border-bottom">
                                                    <label class="d-flex flex-row align-items-center">
                                                        <span class="px-3">ka</span>
                                                        <input type="text" class="form-control my-1" data-language="ka" name="{{ $value['characteristic_attribute_ka'] }}_ka" value="{{ $value['characteristic_value_ka'] }}">
                                                    </label>

                                                    <label class="d-flex flex-row align-items-center">
                                                        <span class="px-3">en</span>
                                                        <input type="text" class="form-control my-1" data-language="en" name="{{ $value['characteristic_attribute_en'] }}_en" value="{{ $value['characteristic_value_en'] }}">
                                                    </label>

                                                    <label class="d-flex flex-row align-items-center">
                                                        <span class="px-3">ru</span>
                                                        <input type="text" class="form-control my-1" data-language="ru" name="{{ $value['characteristic_attribute_ru'] }}_ru" value="{{ $value['characteristic_value_ru'] }}">
                                                    </label>
                                                </div>
                                            </div>


                                        @endforeach

                                    </div>
                                </div>


                            </div>

                        @endforeach

                    </div>


{{--                                        <input type="submit" class="form-control">--}}
                    <button type="submit" id="submit" class="form-control"> submit </button>
                </form>



            </div>
        </div>
    </div>

@endsection