<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link rel="stylesheet" href="{{ asset('css/reset.css') }}"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>TechnoGarage - {{ Helper::getTitle() }}</title>
</head>
<body id="body">

    {{-- <div id="loaderMain" class="position-absolute vw-100 vh-100 bg-white">
        <img src="{{ asset('images/loader.gif') }}" alt="loader" class="position-absolute">
    </div> --}}

    <div id="dialog">
        
    </div>
    
    <header>
        @php
    
            use App\Models\Contact;

            $data = Contact::all();
            
            if(isset($data[0])){
                $data = $data[0];
            }

        @endphp
        <div id="top-nav-container">
            <div class="container-main">
                <div id="top-nav-inner-container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top-nav-contents-container d-flex flex-row">
                                <div class="top-nav-content-item">
                                    <a href="{{ isset($data->facebook) ? $data->facebook : '' }}" target="_blank">
                                        <img src="{{ asset('storage/icons/facebook.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <a href="{{ isset($data->instagram) ? $data->instagram : '' }}" target="_blank">
                                        <img src="{{ asset('storage/icons/instagram.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <a href="mailto:{{ isset($data->gmail) ? $data->gmail : '' }}" target="_blank">
                                        <img src="{{ asset('storage/icons/gmail.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <a href="https://wa.me/{{ isset($data->whatsapp) ? $data->whatsapp : '' }}/" target="_blank">
                                        <img src="{{ asset('storage/icons/whatsapp.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <a href="tel:{{ isset($data->phone_number) ? $data->phone_number : '' }}">
                                        <img src="{{ asset('storage/icons/telephone.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <a href="https://www.google.com/maps/place/?q=place_id:{{ isset($data->location) ? $data->location : '' }}" target="_blank">
                                        <img src="{{ asset('storage/icons/google-maps.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
    
                            <div class="top-nav-contents-container d-flex flex-row ms-auto">

                                <div class="top-nav-content-item">
                                    <div class="sl-nav">
                                        <ul>
                                          <li>

                                            @switch(app()->getLocale())
                                                @case('ka')
                                                    {{ Helper::renderLocaleLinkHtml('ka'); }}
                                                    <div class="triangle"></div>
                                                    <ul>
                                                        <li>{{ Helper::renderLocaleLinkHtml('en'); }}</li>
                                                        <li>{{ Helper::renderLocaleLinkHtml('ru'); }}</li>
                                                    </ul>
                                                @break
                                                
                                                @case('en')
                                                    {{ Helper::renderLocaleLinkHtml('en'); }}
                                                    <div class="triangle"></div>
                                                    <ul>
                                                        <li>{{ Helper::renderLocaleLinkHtml('ka'); }}</li>
                                                        <li>{{ Helper::renderLocaleLinkHtml('ru'); }}</li>
                                                    </ul>
                                                        
                                                @break

                                                @case('ru')
                                                    {{ Helper::renderLocaleLinkHtml('ru'); }}
                                                    <div class="triangle"></div>
                                                    <ul>
                                                        <li>{{ Helper::renderLocaleLinkHtml('ka'); }}</li>
                                                        <li>{{ Helper::renderLocaleLinkHtml('en'); }}</li>
                                                    </ul>
                                                        
                                                @break
                                            
                                                @default
                                                    {{ Helper::renderLocaleLinkHtml('ka'); }}
                                                    <div class="triangle"></div>
                                                    <ul>
                                                        <li>{{ Helper::renderLocaleLinkHtml('en'); }}</li>
                                                        <li>{{ Helper::renderLocaleLinkHtml('ru'); }}</li>
                                                    </ul>
                                                @break
                                            @endswitch
                                            

                                          </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="middle-nav-container">
            <div class="container-main">
                <div id="middle-nav-inner-container">
                    <div class="row align-items-center">

                        <div class="col-12 col-lg-auto p-4">
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <div id="logo">
                                    <a href="{{ asset('/') }}">
                                        <img src="{{ asset('images/main-logo.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col d-block d-lg-none">
                            <button id="collapse-cat-button" class="btn cat-toggler">
                                <i class="bi bi-list"></i>
                            </button>

                            <div id="cat-menu-collapse" class="d-none">
                                <div class="cat-menu-full-width">

                                    <div class="row">
                                        <div class="col">
                                            <button id="close-cat-menu" class="btn float-end fs-1">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="row row-cols-1 justify-content-center text-center gap-3">
                                        <div class="col">
                                            <div class="main-nav-menu">
                                                <ul class="d-flex flex-column p-0 m-0">
                                                    @include('assets.menu-items')
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row my-3">
                                        <div class="col">
                                            <ul class="d-flex flex-row justify-content-center gap-3">
                                                <i class="sl-flag flag-ka"><div id="georgian-1"></div></i> <span>KA</span>
                                                <li><i class="sl-flag flag-en"><div id="english-1"></div></i> <span>EN</span></li>
                                                <li><i class="sl-flag flag-ru"><div id="russian-1"></div></i> <span>RU</span></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="row mt-5 mb-2">
                                        <div class="col">
                                            <div class="text-center">
                                                <h3>კატეგორიები</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col">

                                            <nav class="w-100">
                                                
                                                @include('assets.cat-menu')

                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col p-4 cart-container">
                            @include("assets.cart")
                        </div>

                    </div>
                </div>
            </div>
        </div>

        

        @if (request()->routeis(['index']))

            @include("assets.main-nav-cat-menu-with-banner")
            
        @else

            @include("assets.main-nav-cat-menu-only")

        @endif
        

        
    </header>

    

    @yield("content")


    @include('assets.footer')

    {{-- <script src="{{asset("js/app.js")}}"></script> --}}
    <script src="{{ asset("js/app.js") }}"></script>
    
</body>

</html>