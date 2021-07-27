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
