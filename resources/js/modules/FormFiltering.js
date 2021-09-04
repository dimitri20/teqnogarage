import Render from './Render.js';
import Utils from './Utils.js';

export default class FormFilter {
    params = {};
    categoriesInputList = $("#filterForm input[type = 'checkbox'][name = 'categories[]']");
    sortBy = $('#sortBy');
    products = [];

    onPageLoadWithRequest() {
        this.params = Request.toObject();
        $(`#filterForm input[type = 'checkbox'][name = 'categories[]'][value = '${this.params['categories[]']}']`).prop('checked', true)
        this.addColor($(`#filterForm input[type = 'checkbox'][name = 'categories[]'][value = '${this.params['categories[]']}']`))
        this.getSubcategoriesAjax().then(data => {
            Render.subcategories(data);
            $(`#filterForm input[type = 'checkbox'][name = 'subcategories[]'][value = '${this.params['subcategories[]']}']`).prop('checked', true)
            this.addColor($(`#filterForm input[type = 'checkbox'][name = 'subcategories[]'][value = '${this.params['subcategories[]']}']`))
            this.setSubcategoriesListener()
        })
        this.updateTitle()
    }

    setSortingListener() {
        this.sortBy.change(e => {

            let value = $(e.target).val();

            this.getProductsAjax().then(response => {
                this.products = response;
                this.products.sort((a, b) => {
                    switch (value) {
                        case "name+":
                            if (a.name < b.name) { return -1; }
                            if (a.name > b.name) { return 1; }
                            return 0;
                            break;
                        case "name-":
                            if (a.name > b.name) { return -1; }
                            if (a.name < b.name) { return 1; }
                            return 0;
                            break;
                        case "price+":
                            if (a.price_from < b.price_from) { return -1; }
                            if (a.price_from > b.price_from) { return 1; }
                            return 0;
                            break;
                        case "price-":
                            if (a.price_from > b.price_from) { return -1; }
                            if (a.price_from < b.price_from) { return 1; }
                            return 0;
                            break;
                        default:
                            if (a.id > b.id) { return -1; }
                            if (a.id < b.id) { return 1; }
                            return 0;
                            break;
                    }
                })
                Render.products(this.products);
            })

            console.log("hello");
        })
    }

    setCategoriesListener() {
        this.categoriesInputList.unbind('change');
        this.categoriesInputList.on('change', (e) => {
            e.preventDefault();
            $('#sortBy').val('default');
            delete this.params['categories[]'];
            delete this.params['subcategories[]'];
            this.categoriesInputList.each((index, element) => {
                if (element != e.target) {
                    $(element).prop('checked', false)
                    this.removeColor($(element))
                } else {
                    if ($(e.target).prop('checked')) {
                        this.params['categories[]'] = $(e.target).val()
                        this.addColor($(e.target))
                    } else {
                        delete this.params['categories[]'];
                        this.removeColor($(e.target))
                    }
                }
            })

            this.getProductsAjax().then(data => {
                Render.products(data)
                this.updateTitle()
            })

            this.getSubcategoriesAjax().then(data => {
                Render.subcategories(data)
                this.setSubcategoriesListener()
            })
        })
    }

    setSubcategoriesListener() {
        this.subcategoriesInputList = $("#filterForm input[type = 'checkbox'][name = 'subcategories[]']");
        this.subcategoriesInputList.unbind('change');
        this.subcategoriesInputList.on('change', (e) => {
            e.preventDefault()
            $('#sortBy').val('default');
            this.subcategoriesInputList.each((index, element) => {
                if (element != e.target) {
                    $(element).prop('checked', false)
                    this.removeColor($(element));
                } else {
                    if ($(e.target).prop('checked')) {
                        this.params['subcategories[]'] = $(e.target).val()
                        this.addColor($(e.target));
                    } else {
                        delete this.params['subcategories[]'];
                        this.removeColor($(e.target))
                    }
                }
            })

            this.getProductsAjax().then(data => {
                Render.products(data)
            })
        })
    }

    updateTitle() {
        $('#productsTitle').text(
            $("#filterForm input[name = 'categories[]']:checked").closest('label').text().trim()
        )
    }

    getSubcategoriesAjax() {
        return $.ajax({
            url: '/api/getSubcategoriesJson',
            method: 'GET',
            data: { 'categories[]': this.params['categories[]'] }
        })
    }

    getProductsAjax() {
        return $.ajax({
            url: '/api/productsJson',
            method: 'GET',
            data: this.params,
            beforeSend: () => {

                $('#filterForm input').prop('disabled', true)
            },
            complete: () => {
                $('#filterForm input').prop('disabled', false)
            }
        })
    }

    removeColor(element) {
        element.closest('label').removeClass('cat-active');
        element.closest('label').removeClass('fw-bolder');
    }

    addColor(element) {
        element.closest('label').addClass('cat-active');
        element.closest('label').addClass('fw-bolder');
    }
}

class Request {

    static toObject() {
        let url = decodeURIComponent(document.location.search);
        let attrValPairDict = {};
        let temp = url.replace("?", "").split("&")
        temp.forEach(element => {
            let attrValPair = element.split('=');
            attrValPairDict[attrValPair[0]] = attrValPair[1];
        })
        return attrValPairDict;
    }

}