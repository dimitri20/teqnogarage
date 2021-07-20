<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>Document</title>
</head>
<body>
    
    <header>

        <div id="top-nav-container">
            <div class="container-main">
                <div id="top-nav-inner-container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top-nav-contents-container d-flex flex-row">
                                <div class="top-nav-content-item">
                                    <a href="#">
                                        <img src="{{ asset('storage/icons/facebook.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <a href="#">
                                        <img src="{{ asset('storage/icons/instagram.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <a href="#">
                                        <img src="{{ asset('storage/icons/gmail.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <a href="#">
                                        <img src="{{ asset('storage/icons/whatsapp.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
    
                            <div class="top-nav-contents-container d-flex flex-row ms-auto">
                                <div class="top-nav-content-item">
                                    <a href="#">
                                        <img src="{{ asset('storage/icons/telephone.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <a href="#">
                                        <img src="{{ asset('storage/icons/google-maps.svg') }}" alt="">
                                    </a>
                                </div>

                                <div class="top-nav-content-item">
                                    <div class="sl-nav">
                                        <ul>
                                          <li>
                                            <i class="sl-flag flag-de"><div id="germany"></div></i> <span class="active">KA</span>
                                            <div class="triangle"></div>
                                            <ul>
                                              <li><i class="sl-flag flag-de"><div id="germany"></div></i> <span class="active">EN</span></li>
                                              <li><i class="sl-flag flag-usa"><div id="germany"></div></i> <span>RU</span></li>
                                            </ul>
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
                    <div class="row">

                        <div class="col p-4">
                            <div class="d-flex justify-content-start">
                                <div id="logo">
                                    <a href="{{ asset('/') }}">
                                        <img src="{{ asset('images/main-logo.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                
                        <div class="col p-4">
                            <div class="cart">
                                
                                <div class="d-flex flex-row justify-content-end align-middle">
                                    <div class="cart_icon">
                                        <img src="{{ asset('images/cart.webp') }}" alt="">
                                        <div class="cart_count">
                                            <span>10</span>
                                        </div>
                                    </div>
        
                                    <div class="cart_content">
                                        <div class="cart_text">
                                            <a href="#">Cart</a>
                                        </div>
        
                                        <div class="cart_price">$85</div>
                                    </div>
                                </div> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @if (request()->is("/"))

            @include("assets.main-nav-cat-menu-with-banner")
            
        @else

            @include("assets.main-nav-cat-menu-only")

        @endif
        

        
    </header>

    

    @yield("content")


    <footer id="footer">
        <div class="container-main">
            <div id="footer-inner-container">
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-row">
                            <div class="footer-contents-container d-flex flex-row">
                                <div class="footer-content-item">
                                    <a href="#">
                                        <img src="{{ asset("storage/icons/google-maps.svg") }}" alt="">
                                    </a>

                                    <a href="#">
                                        მისამართი N2 ქუჩა 2912
                                    </a>
                                </div>

                                <div class="footer-content-item">
                                    <a href="#">
                                        <img src="{{ asset("storage/icons/telephone.svg") }}" alt="">
                                    </a>

                                    <a href="#">
                                        +995 555 555 555
                                    </a>
                                </div>
                            </div>
    
                            <div class="ms-auto">
                                <div class="footer-content-item">
                                    <a href="#">
                                        &#169; ყველა უფლება დაცულია
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>