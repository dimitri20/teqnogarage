<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/images/title-logo.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ Helper::getTitle() }}</title>
</head>
<body id="body" class="d-flex flex-column">

    
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
                            @include("assets.contact-infos")
    
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
                                    <a href="{{ asset('/').app()->getLocale() }}">
                                        <img src="{{ asset('images/TG.png') }}" width="300px" alt="teqnogarage logo">
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

                                    {{-- close button --}}
                                    <div class="row">
                                        <div class="col">
                                            @include("assets.language_switch_responsive")
                                        </div>

                                        <div class="col">
                                            <button id="close-cat-menu" class="btn float-end fs-1">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- categories header --}}
                                    {{-- <div class="row mt-5 mb-2">
                                        <div class="col">
                                            <div class="text-center">
                                                <h3>{{ __("კატეგორიები") }}</h3>
                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- cat menu items --}}
                                    <div class="row justify-content-center mt-4">
                                        <div class="col">

                                            <nav>
                                                <ul class="w-100 p-0 m-0 text-center">
                                                    @include('assets.cat-menu')
                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
                                    

                                    {{-- lang items
                                    <div class="row my-3">
                                        <div class="col">
                                            <ul class="d-flex flex-row justify-content-center gap-3">
                                                <li><a href="{{ Helper::getLocaleLink('ka') }}"><i class="sl-flag flag-ka"><div id="georgian-1"></div></i> <span>{{ __("ქარ") }}</span></a></li>
                                                <li><a href="{{ Helper::getLocaleLink('en') }}"><i class="sl-flag flag-en"><div id="english-1"></div></i> <span>{{ __("ინგ") }}</span></a></li>
                                                <li><a href="{{ Helper::getLocaleLink('ru') }}"><i class="sl-flag flag-ru"><div id="russian-1"></div></i> <span>{{ __("რუს") }}</span></a></li>
                                            </ul>
                                        </div>
                                    </div> --}}

                                    

                                    {{-- main nav items --}}
                                    <div class="row mt-5">
                                        <div class="col">
                                            <div class="main-nav-menu">
                                                <ul class="d-flex flex-column justify-content-start text-start p-0 m-0">
                                                    @include('assets.menu-items')
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-5">
                                        <div class="col pt-5 mb-5">
                                            @include("assets.contact-infos")
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

    
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100420225724669");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
</body>

</html>