<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/sapp1.css') }}">
    
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

        <div id="main-nav-container">
            <nav id="main-nav" class="container-main h-100">
                <div class="row h-100">
                    <div class="col h-100">
                        <div class="main-nav-content d-flex flex-row h-100">
                            <div class="cat-menu-container">
                                <div class="cat-menu-title d-flex flex-row align-items-center justify-content-start">
                                    <svg style="fill:#fff;" xmlns="http://www.w3.org/2000/svg" height="20pt" viewBox="0 -53 384 384" width="20pt"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
                                    <div class="cat-menu-text">კატეგორიები</div>
                                </div>

                                <ul class="cat-menu">
                                    <li class="cat-menu-item active-sub">
                                        <a href="#">
                                            ტელეფონები
                                        </a>

                                        <ul class="cat-menu-sub">
                                            <li>
                                                <a href="#">
                                                    android
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    android
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    android
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    android
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    android
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    iphone
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    xiaomi
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="cat-menu-item">
                                        <a href="#">
                                            ტელეფონები
                                        </a>

                                    </li>

                                    <li class="cat-menu-item">
                                        <a href="#">
                                            ტელეფონები
                                        </a>
                                    </li>

                                    <li class="cat-menu-item">
                                        <a href="#">
                                            ტელეფონები
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>

                            <div id="banner-and-main-nav-container" class="flex-fill ms-auto">
                                <div class="main-nav-menu h-100">
                                    <ul class="d-flex flex-row h-100">
                                        <li class="main-nav-menu-item active-page"><a href="#">მთავარი</a></li>
                                        <li class="main-nav-menu-item"><a href="#">კონტაქტი</a></li>
                                        <li class="main-nav-menu-item"><a href="#">ჩვენ შესახებ</a></li>
                                    </ul>
                                </div>
                                
                                <div id="main-banner-container">
                                    <div id="carouselExampleIndicators" class="carousel slide h-100" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                          <button type="button" data-bs-target="#main-banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                          <button type="button" data-bs-target="#main-banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                          <button type="button" data-bs-target="#main-banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>

                                        <div class="carousel-inner h-100">

                                          <div class="carousel-item h-100 w-100 active">
                                            <img src="{{asset("images/banner.png")}}" class="d-block" alt="...">
                                          </div>

                                          <div class="carousel-item h-100 w-100">
                                            <img src="{{asset("images/banner.png")}}" class="d-block" alt="...">
                                          </div>

                                          <div class="carousel-item h-100 w-100">
                                            <img src="{{asset("images/banner.png")}}" class="d-block" alt="...">
                                          </div>

                                        </div>

                                        <button class="carousel-control-prev" type="button" data-bs-target="#main-banner-carousel" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>

                                        <button class="carousel-control-next" type="button" data-bs-target="#main-banner-carousel" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                      </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="banner-emulator"></div>
    </header>

    

    @yield("content")


    <footer id="footer">
        <div class="container-main h-100">
            <div class="row h-100 w-100">
                <div class="col w-100 h-100">
                    <div class="d-flex flex-row h-100 w-100">
                        <div class="h-100">
                            
                        </div>

                        <div class="ms-auto">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>