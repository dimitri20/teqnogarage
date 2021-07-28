@extends('layouts.app')

@section('content')





    <div class="row">
        <div class="col-3 admin-menu-right bg-white shadow m-3 ms-4 px-4">

            <div class="row my-5">
                <h5 class="border-bottom text-center px-3 my-3 pb-1 fw-bolder">Categories</h5>
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
                <h5 class="border-bottom text-center px-3 my-3 pb-1 fw-bolder">Attributes</h5>
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

        </div>


        <div class="col">
            <div class="row my-4">
                <div class="col text-center">
                    <h1>Create Product</h1>
                </div>
            </div>

            <div class="container">

                <form action="">


                    <div id="mainCategoryContainer" class="category-group accordion accordion-flush my-5 border-secondary pb-2">

{{--                        <div class="accordion-item">--}}
{{--                            <h4 class="accordion-header" id="flush-headingOne">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">--}}
{{--                                    category type--}}
{{--                                </button>--}}
{{--                            </h4>--}}
{{--                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    <div class="row py-1 my-4 align-items-center">--}}
{{--                                        <div class="col-3">--}}
{{--                                            <span class="fs-5 text-wrap">attribute</span>--}}
{{--                                        </div>--}}

{{--                                        <div class="col d-flex flex-column text-center pb-3 border-bottom">--}}
{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ka</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">en</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ru</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row py-1 my-4 align-items-center">--}}
{{--                                        <div class="col-3">--}}
{{--                                            <span class="fs-5 text-wrap">attribute</span>--}}
{{--                                        </div>--}}

{{--                                        <div class="col d-flex flex-column text-center pb-3 border-bottom">--}}
{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ka</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">en</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ru</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row py-1 my-4 align-items-center">--}}
{{--                                        <div class="col-3">--}}
{{--                                            <span class="fs-5 text-wrap">attribute</span>--}}
{{--                                        </div>--}}

{{--                                        <div class="col d-flex flex-column text-center pb-3 border-bottom">--}}
{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ka</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">en</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ru</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row py-1 my-4 align-items-center">--}}
{{--                                        <div class="col-3">--}}
{{--                                            <span class="fs-5 text-wrap">attribute</span>--}}
{{--                                        </div>--}}

{{--                                        <div class="col d-flex flex-column text-center pb-3 border-bottom">--}}
{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ka</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">en</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ru</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row py-1 my-4 align-items-center">--}}
{{--                                        <div class="col-3">--}}
{{--                                            <span class="fs-5 text-wrap">attribute</span>--}}
{{--                                        </div>--}}

{{--                                        <div class="col d-flex flex-column text-center pb-3 border-bottom">--}}
{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ka</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">en</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}

{{--                                            <label class="d-flex flex-row align-items-center">--}}
{{--                                                <span class="px-3">ru</span>--}}
{{--                                                <input type="text" class="form-control my-1">--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>


{{--                    <input type="submit" class="form-control">--}}
                    <button type="submit" class="form-control"> submit </button>
                </form>



            </div>
        </div>
    </div>




@endsection