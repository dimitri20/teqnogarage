@extends('layouts.app')

@section('content')


    <div class="container-main">
        <a href="{{ route('products.index') }}">
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
{{--                        <span class="text-secondary empty-message">empty</span>--}}
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
                    <h1>Create Product</h1>
                </div>
            </div>

            <div class="container">

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="mainForm">
                    @csrf

                    <div id="globals">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-sm-2 col-form-label">category</label>
                            <div class="col-sm-4">
                                <select class="form-select" name="category" id="category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['category'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="subcategory" class="col-sm-2 col-form-label">subcategory</label>
                            <div class="col-sm-4">
                                <select class="form-select" name="subcategory" id="subcategory">
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{ $subcategory['id'] }} ">{{ $subcategory['subcategory'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="video_url" class="col-sm-2 col-form-label">video url</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="video_url" name="video_url">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="available" class="col-sm-2 col-form-label">available</label>
                            <div class="col-sm-4" id="available">

                                <select class="form-select" name="available" id="available">
                                    <option value="1" selected>available</option>
                                    <option value="0">not available</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">

                            <label for="price" class="col-sm-2 col-form-label">price</label>
                            <div class="col-sm-10" id="price">
                                <div class="row">
                                    <div class="col">
                                        <label for="price_from" class="text-center">from</label>
                                        <input type="number" class="form-control" id="price_from" name="price_from">
                                    </div>

                                    <div class="col">
                                        <label for="price_to" class="text-center">to</label>
                                        <input type="number" class="form-control" id="price_to" name="price_to">
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
                                    <textarea class="form-control" name="description_ka" cols="30" rows="10"></textarea>
                                </label>

                                <label class="d-flex flex-row align-items-center my-2">
                                    <span class="px-3">en</span>
                                    <textarea class="form-control" name="description_en" cols="30" rows="10"></textarea>
                                </label>

                                <label class="d-flex flex-row align-items-center my-2">
                                    <span class="px-3">ru</span>
                                    <textarea class="form-control" name="description_ru" cols="30" rows="10"></textarea>
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
                                    <input type="file" class="form-control" name="image_1" accept="image/*">
                                </label>

                            </div>

                            <div class="col-12 col-lg-3 images-input-container">

                                <label class="text-start">
                                    image 2
                                    <input type="file" class="form-control" name="image_2" accept="image/*">
                                </label>

                            </div>

                            <div class="col-12 col-lg-3 images-input-container">
                                <label class="text-start">
                                    image 3
                                    <input type="file" class="form-control" name="image_3" accept="image/*">
                                </label>
                            </div>

                            <div class="col-12 col-lg-3 images-input-container">
                                <label class="text-start">
                                    image 4
                                    <input type="file" class="form-control" name="image_4" accept="image/*">
                                </label>

                            </div>



                        </div>
                    </div>

                    <div id="mainCategoryContainer" class="category-group accordion accordion-flush my-5 border-secondary pb-2">

                    </div>


{{--                    <input type="submit" class="form-control">--}}
                    <button type="submit" id="submit" class="form-control btn btn-primary text-white"> add product </button>
                </form>



            </div>
        </div>
    </div>

@endsection