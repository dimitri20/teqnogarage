$(document).ready(() => {

    $('#collapse-cat-button').click(() => {
        $('#cat-menu-collapse').toggleClass("d-none")
    })

    $('#close-cat-menu').click(() => {
        $('#cat-menu-collapse').toggleClass("d-none")
    })

    $('#cart').click(() => {
        $('#cart-body').toggleClass("d-none")
    })

    $('#cart-inner').click(() => {
        $('#cart-body').toggleClass("d-none")
    })

})