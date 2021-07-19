<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEQNO GARAGE</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/sapp.css') }}">
    <link rel="shortcut icon" href="/images/title-logo.png" type="image/png">
</head>
<body>

    <header class="header">

        <div class="top_bar">
            <div class="container container-maxw">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item">
                            <a href="#">
                                <div class="top_bar_icon">
                                    <img src="{{ asset('storage/icons/phone.png') }}" alt="">
                                </div>
                                +995 555 555 555
                            </a>
                        </div>
    
                        <div class="top_bar_contact_item">
                            <a href="#">
                                <div class="top_bar_icon">
                                    <img src="{{ asset('storage/icons/mail.png') }}" alt="">
                                </div>
                                example@gmail.com
                            </a>
                        </div>
    
                        <div class="top_bar_contact_item">
                            <a href="#">
                                <div class="top_bar_icon">
                                    <img src="{{ asset('storage/icons/facebook.png') }}" alt="">
                                </div>
                            </a>
                        </div>
    
                        <div class="top_bar_contact_item">
                            <a href="#">
                                <div class="top_bar_icon">
                                    <img src="{{ asset('storage/icons/whatsapp.png') }}" alt="">
                                </div>
                            </a>
                        </div>
    
                        <div class="top_bar_content ms-auto">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                    <li class="hassubs">
                                        <a href="#">
                                            English
                                        </a>
                                        <ul>
                                            <li>Georgian</li>
                                        </ul>
                                    </li>

                                    <li class="hassubs">
                                        <a href="#">
                                            $ US dollar
                                        </a>
                                        <ul>
                                            <li><a href="#">GEO Lari</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                    
                </div>
            </div>
        </div>
    
        <div class="middle-bar">
            <div class="container container-maxw">
                <div class="row">
                    
                    <div class="col p-4">

                        {{-- <style>
                            #logo {
                                margin-left: -15px;
                            }
                            #logo img {
                                height: 70px;
                            }
                        </style> --}}

                        <div class="d-flex justify-content-start">
                            <div id="logo">
                                <a href="{{ asset('/') }}">
                                    <img src="{{ asset('images/main-logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        {{-- <div class="d-flex justify-content-center">
                            <div id="logo">
                                <a href="{{ asset('/') }}">
                                    <img src="{{ asset('images/main-logo.png') }}" alt="">
                                </a>
                            </div>
                        </div> --}}
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
    
        <nav class="main_nav">
            <div class="container container-maxw">
                <div class="row">
                    <div class="col">
                        <div class="main_nav_content d-flex flex-row">
                        
                            <div class="cat_menu_container">
                                <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                    <svg style="fill:#fff;" xmlns="http://www.w3.org/2000/svg" height="20pt" viewBox="0 -53 384 384" width="20pt"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
                                    <div class="cat_menu_text">კატეგორიები</div>
                                </div>
                                
                                <ul 
                                    class="cat_menu" 
                                    @if (request()->is("/"))
                                        style="display:block;"
                                    @endif >

                                    <li class="hassubs">
                                        <a href="#"> ტელეფონები <i class="fas fa-chevron-right ml-auto"></i></a>
                                        
                                        <ul>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </li>


                                    <li><a href="#">პლანშეტები<i class="fas fa-chevron-right"></i></a></li>

                                    <li>
                                       <a href="#">ლეპტოპები<i class="fas fa-chevron-right">></i></a>
                                    </li>

                                    <li><a href="#">კომპიუტერები<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">აქსესუარები<i class="fas fa-chevron-right"></i></a></li>
                                    
                                </ul>
                            </div>
                            
                            <div class="main_nav_menu ms-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li>
                                        <a href="{{ asset('/') }}">
                                            მთავარი
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('/contact') }}">
                                            კონტაქტი
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            ჩვენ შესახებ
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>