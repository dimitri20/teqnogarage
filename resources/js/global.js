import FormFilter from './modules/FormFiltering.js';
import Cart from './modules/Cart.js';
import Utils from './modules/Utils.js';
// require('@ckeditor/ckeditor5-build-classic');


$(document).ready(() => {


    // $(".cat-menu-title").hover(() => {
    //     $(".cat-menu-hoverable").toggleClass("d-none")
    // })

    $("#toggle-lang").click(e => {
        $("#lang-body").toggleClass("d-none")
    })

    $('.cat-menu-item span').click((e) => {
        $(e.target).toggleClass('cat-active')
        $($(e.target).closest('.cat-menu-item').find('.cat-menu-sub').get(0)).toggleClass('d-none')
    })

    $('.cat-menu-item').click(e => {
        document.location = $(e.target).find(">a").attr("href")
    })


    // $('.cat-menu-item').hover((e) => {

    //     if ($(e.target).find('.cat-menu-sub').children().length > 0) {
    //         $($(e.target).find('.cat-menu-sub').get(0)).toggleClass('d-none')
    //     }

    // })

    $('#collapse-cat-button').click(() => {
        $('#cat-menu-collapse').toggleClass("d-none")
        if (!$('#cat-menu-collapse').hasClass("d-none")) {
            $('body').css("overflow-y", 'hidden')
        } else {
            $('body').css("overflow-y", 'auto')
        }
    })

    $('#close-cat-menu').click(() => {
        $('#cat-menu-collapse').toggleClass("d-none")
        if (!$('#cat-menu-collapse').hasClass("d-none")) {
            $('body').css("overflow-y", 'hidden')
        } else {
            $('body').css("overflow-y", 'auto')
        }
    })

    $('#cart').click(() => {
        $('#cart-body').toggleClass("d-none")
    })

    $('#cart-inner').click(() => {
        $('#cart-body').toggleClass("d-none")
    })


    if (
        document.location.pathname === '/' + Utils.getLocale() + '/products' ||
        document.location.pathname === '/admin/home/products') {

        let formFilter = new FormFilter();
        formFilter.onPageLoadWithRequest();
        formFilter.setCategoriesListener();
        formFilter.setSortingListener();
        formFilter.setPriceListener();

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

        // if (!$(".cat-menu-hoverable").hasClass("d-none")) {

        //     if (!Utils.isElement(".cat-menu-hoverable", e.target) &&
        //         !Utils.isElement(".cat-menu-title", e.target)) {
        //         $('.cat-menu-hoverable').addClass("d-none")
        //     }

        // }

        if (!$('#cat-menu-collapse').hasClass("d-none") &&
            !$("#lang-body").hasClass("d-none")) {

            if (!Utils.isElement(".responsive-language-switch", e.target)) {
                $("#lang-body").addClass("d-none")
            }
        }

    })




})