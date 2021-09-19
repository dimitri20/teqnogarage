<div>


    <div class="cart float-end">

        <div id="cart" class="d-flex flex-row justify-content-end align-middle">
            <div class="cart_icon">
                <img src="http://127.0.0.1:8000/images/cart.webp" alt="">
                <div class="cart_count">
                    <span></span>
                </div>
            </div>

            <div class="cart_content">
                <div class="cart_text">
                    <a href="#">{{ __("კალათა") }}</a>
                </div>

                <div class="cart_price">
                    <span class="total-price-from"></span>
                    -
                    <span class="total-price-to"></span>
                     {{ __("ლარი") }}
                </div>
            </div>
        </div>
    </div>



    <div id="cart-body" class="cart-body shadow-lg d-none">

        <div class="row p-3 px-4 align-items-center">
            <div class="col">
                <h4>
                    {{ __("კალათა") }}
                </h4>
            </div>

            <div class="col">
                <div id="cart-inner" class="cart_icon ms-auto">
                    <img src="http://127.0.0.1:8000/images/cart.webp" alt="">
                    <div class="cart_count">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>


        <div class="row row-cols-1 px-4 py-2 align-items-center overflow-auto cart-products-container mb-4">
        
    
        </div>


        <div class="row px-4 align-items-center">
            <div class="col">
                <button id="submit-cart" class="btn button-orange">
                    {{ __("განვადების გაფორმება") }}
                </button>
            </div>

            <div class="col">
                <div class="ms-auto fw-bold fs-6 text-end">
                    <span class="total-price">
                        {{__("სულ")}}: <span class="total-price-from"></span> - <span class="total-price-to"></span> {{__("ლარი")}}
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>


