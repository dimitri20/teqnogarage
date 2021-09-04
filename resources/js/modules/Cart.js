import Utils from './Utils.js';
import Render from './Render.js';
import Cookies from 'js-cookie';


export default class Cart {

    static setAddToCartListener() {
        $('.add-to-cart-button').unbind('click');
        this.animate()
        $('.add-to-cart-button').click(e => {
            let id = $(e.target).attr('data-id');
            let cart;


            if (Cookies.get('cart') === undefined) {
                cart = {
                    'total_count': 0,
                    'total_price_from': 0,
                    'total_price_to': 0,
                    'cart_items': []
                }
            } else {
                cart = JSON.parse(Cookies.get('cart'))
            }

            this.getProduct(id).then(response => {
                let increment = [false, 0];
                let total_count = 0;
                let total_price_from = 0;
                let total_price_to = 0;

                for (let i = 0; i < cart.length; i++) {
                    if (parseInt(cart['cart_items'][i]['id']) === parseInt(response['id'])) {
                        increment = [true, i];
                        break;
                    }
                }

                if (increment[0]) {
                    alert('this item is already in the cart');
                    // $('#dialog').dialog();
                    // $('#dialog').append($(`<p>This item is already in the cart.</p>`))
                    // cart[increment[1]]["quantity"] = parseInt(cart[increment[1]]["quantity"]) + 1;
                } else {
                    cart['cart_items'].push(response);

                    if (cart['cart_items'].length != 0) {
                        cart['cart_items'].forEach(item => {
                            total_count += 1;
                            total_price_from += (parseFloat(item['price_from']) * parseInt(item['quantity']));
                            total_price_to += (parseFloat(item['price_to']) * parseInt(item['quantity']));
                        })
                    }

                    cart['total_count'] = total_count;
                    cart['total_price_from'] = total_price_from;
                    cart['total_price_to'] = total_price_to;
                }

                Cookies.set('cart', JSON.stringify(cart));
                this.update()
            })

        })
    }

    static setRemoveFromCartListener() {
        $('.remove-from-cart').unbind('click')
        $('.remove-from-cart').click(e => {

            let id = $(e.target).attr('data-id');
            let cart;
            let total_count = 0;
            let total_price_from = 0;
            let total_price_to = 0;

            if (Cookies.get('cart') === undefined) {
                cart = {
                    'total_count': 0,
                    'total_price_from': 0,
                    'total_price_to': 0,
                    'cart_items': []
                }
            } else {
                cart = JSON.parse(Cookies.get('cart'))
            }
            console.log(cart)
            let formattedCart = [];

            if (cart['cart_items'].length != 0) {
                cart['cart_items'].forEach(item => {
                    if (parseInt(item['id']) != parseInt(id)) {
                        formattedCart.push(item)
                    }
                })
            }

            cart['cart_items'] = formattedCart;

            if (cart['cart_items'].length != 0) {
                cart['cart_items'].forEach(item => {
                    total_count += 1;
                    total_price_from += (parseFloat(item['price_from']) * parseInt(item['quantity']));
                    total_price_to += (parseFloat(item['price_to']) * parseInt(item['quantity']));
                })
            }

            cart['total_count'] = total_count;
            cart['total_price_from'] = total_price_from;
            cart['total_price_to'] = total_price_to;

            Cookies.set('cart', JSON.stringify(cart));
            this.update();
        })
    }

    static update(data = {
        total_price_from: 0,
        total_price_to: 0,
        total_count: 0,
        cart_items: []
    }) {
        if (Cookies.get('cart') !== undefined) {
            data = JSON.parse(Cookies.get('cart'))
        }

        Render.cart(data)
    }

    static getProduct(id) {
        return $.ajax({
            url: '/api/getProduct/' + id,
            method: 'GET'
        })
    }

    static animate() {
        $('.add-to-cart-button').on('click', (e) => {
            var cart = $('#cart');
            var imgtodrag = $($(e.target).closest('.card-body').siblings('.carousel').find('img').get(0));
            console.log("cart: " + cart);
            console.log("imgtodrag: " + imgtodrag);
            if (imgtodrag) {
                var imgclone = imgtodrag.clone()
                    .offset({
                        top: imgtodrag.offset().top,
                        left: imgtodrag.offset().left
                    })
                    .css({
                        'opacity': '0.5',
                        'position': 'absolute',
                        'height': '150px',
                        'width': '150px',
                        'z-index': '100'
                    })
                    .appendTo($('body'))
                    .animate({
                        'top': cart.offset().top + 10,
                        'left': cart.offset().left + 10,
                        'width': 75,
                        'height': 75
                    }, 1000, 'easeInOutExpo');

                setTimeout(function() {
                    cart.effect("shake", {
                        times: 2
                    }, 200);
                }, 1500);

                imgclone.animate({
                    'width': 0,
                    'height': 0
                }, function() {
                    $(e.target).detach()
                });
            }
        });
    }

}