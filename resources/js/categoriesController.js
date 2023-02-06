let addCategoryButton = $('addCategory')
let categoriesGroup = $('#mainCategoiesContainer')
let submit_form = $('#submit')

submit_form.click(() => {
    let hidden = $("<input type='hidden' name='categoriesJsonData'/>")
    hidden.val(getJsonData())
    submit_form.append(hidden)
});


$(document).ready(() => {

    $('.addSubcategoryGroup').each((subCategoryIndex, subCategory) => {


        $(subCategory).find('.add-subcategory').each((btnIndex, btn) => {
            $(btn).click((e) => {
                let en = $($(subCategory).find('.addSubCategory_en').get(0)).val()
                let ka = $($(subCategory).find('.addSubCategory_ka').get(0)).val()
                let ru = $($(subCategory).find('.addSubCategory_ru').get(0)).val()
                let canSubmit = true
                $(subCategory).find('input').each((index, element) => {
                    if ($(element).val() === '') {
                        canSubmit = false
                    }
                })

                if (canSubmit) {
                    $(e.target).closest('.addSubcategoryGroup').before(subcategoryHtml($(subCategory).closest('.category_container').attr('id'), en, ka, ru))

                }
                updateRemoveSubcategoriesButtonListeners()
            })
        })

    })

    updateRemoveCategoriesButtonListeners()
    updateRemoveSubcategoriesButtonListeners()
})


$('#addCategory').click((e) => {

    let en = $('#addCategory-en').val()
    let ka = $('#addCategory-ka').val()
    let ru = $('#addCategory-ru').val()
    let categoryId = en.trim().replace(" ", "_")

    let canSubmit = true

    $('#addCategoryGroup').find('input').each((index, element) => {
        if ($(element).val() === "") {
            canSubmit = false
        }
    })

    if (canSubmit) {
        categoriesGroup.append(categoryHtml(en, ka, ru))
        updateRemoveCategoriesButtonListeners()
        $('#addCategoryGroup').find('input').each((index, element) => {
            $(element).val("")
        })



        $($('#' + categoryId).find('.add-subcategory').get(0)).click((e) => {
            let canSubmitSub = true

            $(e.target).parent().find('input').each((index, element) => {
                if ($(element).val() === '') {
                    canSubmitSub = false
                }
            })

            let enSub = $($(e.target).parent().find('.addSubCategory_en').get(0)).val()
            let kaSub = $($(e.target).parent().find('.addSubCategory_ka').get(0)).val()
            let ruSub = $($(e.target).parent().find('.addSubCategory_ru').get(0)).val()

            if (canSubmitSub) {
                $(e.target).closest('.addSubcategoryGroup').before(subcategoryHtml(categoryId, enSub, kaSub, ruSub))
                $(e.target).parent().find('input').each((index, element) => {
                    $(element).val('')
                })
                updateRemoveSubcategoriesButtonListeners()
            }
        })
    }



})


function categoryHtml(en, ka, ru) {
    let categoryId = en.trim().replace(" ", "_")

    return `
    
        <li id="${categoryId}" class="category_container list-group-item my-4 list-group-item-success fs-4">
            <span class="category_name">
                ${en}
                <div class="btn btn-danger ms-5 rm-category"><i class="bi bi-trash"></i></div>
                <input type="hidden" name="category" value="${categoryId}">
                <input type="hidden" data-lang="ka" value="${ka}">
                <input type="hidden" data-lang="en" value="${en}">
                <input type="hidden" data-lang="ru" value="${ru}">
            </span>

                                            
            <ul class="subcategories_container list-group py-3 ps-5 fs-6">

                                                
                <div class="addSubcategoryGroup ms-auto my-4 w-75">

                    <label class="d-flex flex-row align-items-center">
                        <span class="px-3">ka</span>
                        <input type="text" class="addSubCategory_ka form-control my-1">
                    </label>

                    <label class="d-flex flex-row align-items-center">
                        <span class="px-3">en</span>
                        <input type="text" class="addSubCategory_en form-control my-1">
                    </label>

                    <label class="d-flex flex-row align-items-center">
                        <span class="px-3">ru</span>
                        <input type="text" class="addSubCategory_ru form-control my-1">
                    </label>

                    <div class="add-subcategory fs-5 btn my-3 ">
                        <i class="bi bi-plus-lg"></i>
                        Add subcategory
                    </div>
                </div>

            </ul>

            
        </li>
    
    `
}

function subcategoryHtml(categoryId, en, ka, ru) {
    let subcategoryId = en.trim().replace(" ", "_")

    return `
        <li class="list-group-item">
            <span class="subcategory_name d-flex flex-row justify-content-between align-items-center">
                ${en}
                <div class="btn btn btn-outline-danger rm-subCategory"><i class="bi bi-trash"></i></div>
                <input type="hidden" name="subcategory" data-parent="${categoryId}" value="${en}">
                <input type="hidden" data-lang="ka" data-parent="${categoryId}" value="${ka}">
                <input type="hidden" data-lang="en" data-parent="${categoryId}" value="${en}">
                <input type="hidden" data-lang="ru" data-parent="${categoryId}" value="${ru}">
            </span>
        </li>
    `
}

function getJsonData() {
    let data = []
    let subCategoriesData

    $('#mainCategoiesContainer .category_container .category_name').each((index, element) => {
        data[index] = {
            'name': $(element).find("input[name = 'category']").val(),

            'lang': {
                'ka': $(element).find("input[data-lang = 'ka']").val(),
                'en': $(element).find("input[data-lang = 'en']").val(),
                'ru': $(element).find("input[data-lang = 'ru']").val()
            }
        }

        subCategoriesData = []


        $(element).closest('.category_container').find(".subcategories_container .subcategory_name").each((subCategoryIndex, subCategory) => {

            subCategoriesData.push({
                'name': $(subCategory).find("input[name = 'subcategory']").val(),

                'lang': {
                    'ka': $(subCategory).find("input[data-lang = 'ka']").val(),
                    'en': $(subCategory).find("input[data-lang = 'en']").val(),
                    'ru': $(subCategory).find("input[data-lang = 'ru']").val()
                }
            })
        })

        data[index]['subcategories'] = subCategoriesData
    })

    return JSON.stringify(data)
}

function updateRemoveCategoriesButtonListeners() {
    $('.rm-category').each((index, element) => {
        $(element).click(() => {
            $(element).closest('.category_container').remove()
        })
    })
}

function updateRemoveSubcategoriesButtonListeners() {
    $('.rm-subCategory').each((index, element) => {
        $(element).click(() => {
            $(element).closest('.subcategory_name').parent().remove()
        })
    })
}