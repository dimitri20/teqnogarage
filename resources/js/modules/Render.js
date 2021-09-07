import Cart from './Cart.js';
import Utils from './Utils.js';

export default class Render {

    static products(data) {
        let admin = (document.location.pathname === '/admin/home/products') ? true : false;

        $('#productsContainer').empty()
        let product = ""

        data.forEach(item => {
            product = ""

            product += `
            <div class="col mb-4">
                <div class="card product-container shadow border-0 pt-2 m-auto">
                    <div id="product-${item['id']}" class="carousel carousel-dark slide card-img-top " data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="/${Utils.getLocale()}/product/${item['id']}">
                                    <img src="/storage/product_images/${item['image_1']}" alt="" class="d-block">
                                </a>
                            </div>
            `
            if (item['image_2'] != null) {
                product += `
                            <div class="carousel-item">
                                <a href="/${Utils.getLocale()}/product/${item['id']}">
                                    <img src="/storage/product_images/${item['image_2']}" alt="" class="d-block">
                                </a>
                            </div>
                `
            }

            if (item['image_3'] != null) {
                product += `
                            <div class="carousel-item">
                                <a href="/${Utils.getLocale()}/product/${item['id']}">
                                    <img src="/storage/product_images/${item['image_3']}" alt="" class="d-block">
                                </a>
                            </div>
                `
            }

            if (item['image_4'] != null) {
                product += `
                            <div class="carousel-item">
                                <a href="/${Utils.getLocale()}/product/${item['id']}">
                                    <img src="/storage/product_images/${item['image_4']}" alt="" class="d-block">
                                </a>
                            </div>
                `
            }


            product += `
                        <button class="carousel-control-prev" type="button" data-bs-target="#product-${item['id']}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#product-${item['id']}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            `;

            if (admin) {
                product += `
                    <div class="card-body text-center">
                            <h6 class="card-text">
                                <a href="/admin/home/products/${item['id']}">
                                    ${item['name']}
                                </a>
                            </h6>
                            <div class="d-flex flex-row align-items-center justify-content-between px-2">
                                <div class="fw-bolder">
                                    <span>${item['price_from']}</span>
                                    -
                                    <span>${item['price_to']}</span>
                                    GEL
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-3">
                                <a href="/admin/home/products/${item['id']}/edit" class="btn btn-primary text-white">
                                    Edit
                                </a>

                                <form
                                        action="/admin/home/products/${item['id']}"
                                        method="POST"
                                        class="ms-3">
                                    
                                    <input type="hidden" name="_token" value="${Utils.getToken()}">
                                    <input type="hidden" name="_method" value="delete">
                                    
                                    <button
                                            class="btn btn-danger text-white"
                                            type="submit">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                `;
            } else {
                product += `
                <div class="card-body text-center">
                    <h6 class="card-text">
                        <a href="/${Utils.getLocale()}/product/${item['id']}">
                            ${item['name']}
                        </a>
                    </h6>
                    <div class="d-flex flex-row align-items-center justify-content-between px-2">
                        <div class="fw-bolder">
                            <span>${item['price_from']}</span>
                            -
                            <span>${item['price_to']}</span>
                            GEL
                        </div>
                        
                        <div class="btn add-to-cart-button" data-id="${item['id']}">
                            <img src="/storage/icons/add-to-cart.svg" class="icon-add-to-cart" alt="add to cart" data-id="${item['id']}">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            `;
            }

            $('#productsContainer').append($(product))

        })

        Cart.setAddToCartListener();
    }

    static subcategories(data) {
        $('#subcategoriesContainer').empty()
        data.forEach(item => {
            let subcategory = $(`
                <li>
                    <label>
                        <input type="checkbox" name="subcategories[]" value="${item['id']}" class="form-check-input me-1 product-item-checkbox">
                        ${item['subcategory_'+Utils.getLocale()]}
                    </label>
                </li>
            `)
            $('#subcategoriesContainer').append(subcategory)

        })

        if (data.length > 0) {
            $('#subcategories').removeClass('d-none')

        } else {
            $('#subcategories').addClass('d-none')
        }
    }

    static cart(data) {

        $('.cart_count span').text(data['total_count']);
        $('.total-price-from').text(data['total_price_from'])
        $('.total-price-to').text(data['total_price_to'])
        let item;
        $('.cart-products-container').empty();
        if (data['cart_items'] != null) {
            Object.keys(data['cart_items']).forEach(id => {
                item = data['cart_items'][id];

                $('.cart-products-container').append(`
                        <div class="cart-product col border-bottom py-3" data-id="13">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-row align-items-start p-2 gap-2">
    
                                <div class="cart-image-container p-2">
                                    <img src="/storage/product_images/${item['image']}" alt="${item['name']}">
                                </div>
    
                                <div class="text-wrap px-2">
                                    <span>
                                        ${item['name']}
                                    </span>
                                </div>
    
                            </div>
    
                            <div>
                                <div class="d-flex flex-column justify-content-end">
    
                                    <button class="btn remove-from-cart" data-id="${item['id']}" >
                                            <i class="bi bi-x-lg" data-id="${item['id']}"></i>
                                    </button>
    
                                    <div class="float-end text-nowrap">
                                        <span>${item['price_from']}</span>
                                        -
                                        <span>${item['price_to']}</span>
                                        GEL
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `)
            })
        }

        Cart.setRemoveFromCartListener()
    }
}