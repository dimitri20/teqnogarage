@extends('layouts.app')

@section('content')


    <div class="container-main">
        <a href="{{ route('admin.home') }}">
            <i class="bi bi-arrow-left"></i>
            return back
        </a>
    </div>


    <div class="row">

        <div class="col-12 col-lg-3">

            <div class="row my-4">
                <div class="col text-center">
                    <h4>Current Categories</h4>
                </div>
            </div>

            <div class="container-fluid">
                <ol class="list-group list-group-numbered">

                    @foreach($categories as $categoryKey => $categoryVal)

                    <li id="{{ str_replace(' ', '', $categoryVal['name']['category']) }}" class="list-group-item my-4  fs-5">
                        <span class="category_name">
                            {{ $categoryVal['name']['category'] }}
                        </span>

                        @if (sizeof($categoryVal) > 0)
                            
                        <ul class="list-group py-3 ps-5 fs-6">

                            @foreach($categoryVal['subcategories'] as $subCategory)


                                <li class="list-group-item">
                                    <span class="subcategory_name">
                                        {{ $subCategory->subcategory }}
                                    </span>
                                </li>

                            @endforeach
                             
                        </ul>

                        @endif

                    </li>

                    @endforeach

                </ol>
            </div>

        </div>
        
        <div class="col">
            <div class="row my-4">
                <div class="col text-center">
                    <h1>Categories</h1>
                </div>
            </div>

            <div class="container">

                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" id="mainForm">
                    @csrf

                    <ol id="mainCategoiesContainer" class="list-group list-group-numbered">

                        @foreach($categories as $categoryKey => $categoryVal)

                        <li id="{{ str_replace(' ', '', $categoryVal['name']['category']) }}" class="category_container list-group-item my-4 list-group-item-success fs-4">
                            <span class="category_name">
                                {{ $categoryVal['name']['category'] }}
                                <div class="btn btn-danger ms-5 rm-category"><i class="bi bi-trash"></i></div>
                                <input type="hidden" name="category" value="{{ $categoryVal['name']['category'] }}">
                                <input type="hidden" data-lang="ka" value="{{ $categoryVal['name']['category_ka'] }}">
                                <input type="hidden" data-lang="en" value="{{ $categoryVal['name']['category_en'] }}">
                                <input type="hidden" data-lang="ru" value="{{ $categoryVal['name']['category_ru'] }}">
                            </span>

                            @if (sizeof($categoryVal) > 0)
                                
                            <ul class="subcategories_container list-group py-3 ps-5 fs-6">

                                @foreach($categoryVal['subcategories'] as $subCategory)


                                    <li class="list-group-item">
                                        <span class="subcategory_name d-flex flex-row justify-content-between align-items-center">
                                            {{ $subCategory->subcategory }}
                                            <div class="btn btn btn-outline-danger rm-subCategory"><i class="bi bi-trash"></i></div>
                                            <input type="hidden" name="subcategory" data-parent="{{ $subCategory->subcategory }}" value="{{ $subCategory->subcategory }}">
                                            <input type="hidden" data-lang="ka" data-parent="{{ $subCategory->subcategory }}" value="{{ $subCategory->subcategory_ka }}">
                                            <input type="hidden" data-lang="en" data-parent="{{ $subCategory->subcategory }}" value="{{ $subCategory->subcategory_en }}">
                                            <input type="hidden" data-lang="ru" data-parent="{{ $subCategory->subcategory }}" value="{{ $subCategory->subcategory_ru }}">
                                        </span>
                                    </li>

                                @endforeach
                                 
                                <div class="addSubcategoryGroup ms-auto my-4 w-75">

                                    <label class="d-flex flex-row align-items-center">
                                        <span class="px-3">ka</span>
                                        <input type="text" class="addSubCategory_ka form-control my-1">
                                    </label>
                
                                    <label class="d-flex flex-row align-items-center">
                                        <span class="px-3">en</span>
                                        <input type="text" class="addSubCategory_en form-control my-1">
                                    </label>
                
                                    <label class="d-flex flex-row align-items-center">
                                        <span class="px-3">ru</span>
                                        <input type="text" class="addSubCategory_ru form-control my-1">
                                    </label>

                                    <div class="add-subcategory fs-5 btn my-3 " >
                                        <i class="bi bi-plus-lg"></i>
                                        Add subcategory
                                    </div>
                                </div>

                            </ul>

                            @endif

                        </li>

                        @endforeach

                    </ol>

                    <div id="addCategoryGroup" class="col d-flex flex-column text-center my-5 w-75">

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
    
                        <div id="addCategory" class="fs-5 btn my-3 btn-outline-primary">
                            <i class="bi bi-plus-lg"></i>
                            Add Category
                        </div>
                    </div>

                    
                    <button type="submit" id="submit" class="form-control btn btn-primary text-white my-5"> Update List </button>
                </form>



            </div>
        </div>

    </div>

@endsection