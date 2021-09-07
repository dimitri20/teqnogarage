import FormFilter from './modules/FormFiltering.js';
import Cart from './modules/Cart.js';
import Utils from './modules/Utils.js';
// require('@ckeditor/ckeditor5-build-classic');


$(document).ready(() => {

    // ClassicEditor
    //     .create(document.querySelector('#editor'))
    //     .catch(error => {
    //         console.log(error);
    //     })

    // setTimeout(() => {
    //     $('#body').removeClass('overflow-hidden');
    //     $('#loaderMain').hide();
    // }, 200)

    $('.cat-menu-item span').click((e) => {
        $(e.target).toggleClass('cat-active')
        $($(e.target).closest('.cat-menu-item').find('.cat-menu-sub').get(0)).toggleClass('d-none')
    })

    $('.cat-menu-item').hover((e) => {

        if ($(e.target).find('.cat-menu-sub').children().length > 0) {
            $($(e.target).find('.cat-menu-sub').get(0)).toggleClass('d-none')
        }

    })

    if (
        document.location.pathname === '/' + Utils.getLocale() + '/products' ||
        document.location.pathname === '/admin/home/products') {

        let formFilter = new FormFilter();
        formFilter.onPageLoadWithRequest();
        formFilter.setCategoriesListener();
        formFilter.setSortingListener();

    }

    if (
        document.location.pathname === '/' + Utils.getLocale() + '/products' ||
        document.location.pathname.split('/')[2] === 'product'
    ) {
        Cart.setAddToCartListener()
    }

    Cart.update();


    $(document).click(e => {

        if (!$('#cart-body').hasClass('d-none') &&
            !Utils.isElement("#cart-body", e.target) &&
            !Utils.isElement("#cart", e.target)) {

            if ($('.remove-from-cart').length > 0) {
                $('.remove-from-cart').each((index, element) => {
                    if (element != e.target || $(element).find('i')[0] != e.target) {
                        $('#cart-body').addClass('d-none')
                    }
                })
            } else {
                $('#cart-body').addClass('d-none')
            }


        }

    })




})