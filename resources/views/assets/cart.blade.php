<div>


    <div class="cart float-end">

        <div id="cart" class="d-flex flex-row justify-content-end align-middle">
            <div class="cart_icon">
                <img src="http://127.0.0.1:8000/images/cart.webp" alt="">
                <div class="cart_count">
                    @if(session('cart'))
                        <span>{{ sizeof(session('cart')) }}</span> 

                    @else
                        <span>0</span>
                    @endif
                </div>
            </div>

            <div class="cart_content">
                <div class="cart_text">
                    <a href="#">Cart</a>
                </div>
                
                @php
                    $total_price_from = 0;
                    $total_price_to = 0;

                    if (session('cart')){
                        foreach (session('cart') as $id => $details) {
                            $total_price_from += $details['price_from'];
                            $total_price_to += $details['price_to'];
                        }
                    }
                        
                    
                @endphp

                <div class="cart_price">{{ $total_price_from }} - {{ $total_price_to }} GEL</div>
            </div>
        </div>
    </div>



    <div id="cart-body" class="cart-body shadow-lg d-none">

        <div class="row p-3 px-4 align-items-center">
            <div class="col">
                <h4>
                    Cart
                </h4>
            </div>

            <div class="col">
                <div id="cart-inner" class="cart_icon ms-auto">
                    <img src="http://127.0.0.1:8000/images/cart.webp" alt="">
                    <div class="cart_count">
                        @if(session('cart'))
                           <span>{{ sizeof(session('cart')) }}</span> 

                        @else
                            <span>0</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <div class="row row-cols-1 px-4 py-2 align-items-center overflow-auto cart-products-container mb-4">

            @php
                $total_price_from = 0;
                $total_price_to = 0;
            @endphp

            @if(session('cart'))

                @foreach(session('cart') as $id => $details)

                    @php
                        $total_price_from += $details['price_from'];
                        $total_price_to += $details['price_to'];
                    @endphp

                    <div class="cart-product col border-bottom py-3" data-id="{{ $id }}">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex flex-row align-items-start p-2 gap-2">
        
                                <div class="cart-image-container p-2">
                                    <img src="{{ asset("storage/product_images/".$details['image']) }}" alt="{{ $details['name'] }}">
                                </div>
        
                                <div class="text-wrap px-2">
                                    <span>
                                        {{ $details['name'] }}
                                    </span>
                                </div>
        
                            </div>
        
                            <div>
                                <div class="d-flex flex-column justify-content-end">
                                    <form action="{{route('cart.remove')}}" method="post">
                                        @csrf
                                        @method("delete")
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <button class="btn">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </form>
        
                                    <div class="float-end text-nowrap">
                                        <span>{{ $details['price_from'] }}</span>
                                        -
                                        <span>{{ $details['price_to'] }}</span>
                                        GEL
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            @endif

            
        </div>


        <div class="row px-4 align-items-center">
            <div class="col">
                <button id="submit-cart" class="btn button-orange">
                    განვადების გაფორმება
                </button>
            </div>

            <div class="col">
                <div class="ms-auto fw-bold fs-6 text-end">
                    <span>
                        Total: {{ $total_price_from }} - {{ $total_price_to }} GEL
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>
