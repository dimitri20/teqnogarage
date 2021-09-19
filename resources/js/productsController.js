$(document).ready(() => {

    $('#category').change(e => {
            updateSubcategoriesSelect(e.target)
        })
        // updateSubcategoriesSelect(e.target, false)
    updateCategoriesOnPanel()
    updateAttributesOnPanel()

    //images control, add image to DOM and remove when deleted
    let imageInputs = $('#images input');
    imageInputs.each((i, element) => {
        let imageDeleteButtons = $('#images .delete-image');
        imageDeleteButtons.each((index, element) => {
            $(element).click(() => {
                $($(element).parent().parent().find('input').get(0)).val("")
                $(element).parent().remove()
            })
        })

        $(element).change(() => {
            let file = element.files[0]
            if (file) {
                let reader = new FileReader()
                reader.onload = () => {
                    if ($(element).parent().parent().find('.image-container').length === 0) {
                        $($(".images-input-container").get(i)).append(`
                            <div class="image-container w-100">
                                <div class="delete-image my-2 btn btn-danger d-none"><i class="bi bi-x"></i> remove </div>
                                <img
                                        src="${reader.result}"
                                        alt="image 2"
                                        class="w-100 mt-3">
                            </div>
                        `);
                    } else {
                        $($(element).parent().parent().find('img').get(0)).attr('src', reader.result)
                    }

                    imageDeleteButtons = $('#images .delete-image');
                    imageDeleteButtons.each((index, element) => {
                        $(element).click(() => {
                            $($(element).parent().parent().find('input').get(0)).val("")
                            $(element).parent().remove()
                        })
                    })
                }
                reader.readAsDataURL(file)
            }
        })
    })

})


let addCategory_button = $('#addCategory');
let addAttribute_button = $('#addAttribute');
let removeCategories_button = $('#removeCategories');
let removeAttributes_button = $('#removeAttributes');
let submit_form = $('#mainForm');
let submit_button = $('#submit')


submit_form.submit(() => {
    let hidden = $("<input type='hidden' name='characteristicsJson'/>")
    hidden.val(getCharacteristicsJson())
    submit_form.append(hidden)
});

function updateSubcategoriesSelect(element, isFirst) {
    $.ajax({
        url: '/api/getSubcategoriesJson',
        method: 'GET',
        data: { 'categories[]': $(element).val() }
    }).done(data => {
        $('#subcategory').empty()

        data.forEach(item => {
            $('#subcategory').append(`
                <option value="${item['id']}">${item['subcategory']}</option>
            `)
        })

    })
}





//add Category on button click --> event
addCategory_button.click(() => {
    let canSubmit_input_validate = true;
    let canSubmit_similar_element = true;
    let canSubmit;
    let category_en = $('#addCategory-en').val().trim();
    let category_ka = $('#addCategory-ka').val().trim();
    let category_ru = $('#addCategory-ru').val().trim();

    $('#addCategoryGroup input').each((index, element) =>
        canSubmit_input_validate = $(element).val().trim() !== ""
    )
    $('#mainCategoryContainer .accordion-header').each((index, element) =>
        canSubmit_similar_element = $(element).text().trim() !== category_en
    )
    canSubmit = canSubmit_similar_element && canSubmit_input_validate
    if (canSubmit) {
        addCategory(category_en, category_ka, category_ru)

        $('#addCategoryGroup input').each((index, element) =>
            $(element).val("")
        )
    }

})

//add attribute on button click --> event
addAttribute_button.click(() => {
    let canSubmit_input_validate = true;
    let canSubmit_similar_element = true;
    let canSubmit;
    let category_en = $('#selectCategory :selected').val();
    let attribute_en = $('#addAttribute-en').val().trim();
    let attribute_ka = $('#addAttribute-ka').val().trim();
    let attribute_ru = $('#addAttribute-ru').val().trim();

    $('#addAttributeGroup input').each((index, element) =>
        canSubmit_input_validate = $(element).val().trim() !== ""
    )
    $('.attribute-header').each((index, element) =>
        canSubmit_similar_element = $(element).text().trim() !== attribute_en
    )
    canSubmit = canSubmit_similar_element && canSubmit_input_validate

    if (canSubmit) {
        addAttribute(category_en, attribute_en, attribute_ka, attribute_ru)
        $('#addAttributeGroup input').each((index, element) =>
            $(element).val("")
        )
    }

})

removeCategories_button.click(() => {
    let categoriesList = $('#categoriesToRemove > div')
    let attributeId
    let categoryId
    categoriesList.each((index, element) => {
        categoryId = $(element).attr('id').split('_')
        categoryId.pop()



        //remove attributes
        $('#AddToRemovableAttributesList div').each((index, element) => {
            attributeId = $(element).attr('id').split('_')
            attributeId.pop()

            if ($(`#${attributeId.join('_')}`).closest('.accordion-item').attr('id').replace('#', '') === categoryId.join('_')) {
                $(element).remove()
            }
        })

        $('#attributesToRemove div').each((index, element) => {
            attributeId = $(element).attr('id').split('_')
            attributeId.pop()

            if ($(`#${attributeId.join('_')}`).closest('.accordion-item').attr('id').replace('#', '') === categoryId.join('_')) {
                $(element).remove()
            }
        })

        removeCategory(`#${categoryId.join("_")}`)
        $(element).remove()
    })

})

removeAttributes_button.click(() => {
    let attributesList = $('#attributesToRemove > div').remove()

    attributesList.each((index, element) => {
        let attributeId = $(element).attr('id').split('_')
        attributeId.pop()
        console.log(attributeId.join("_"))
        removeAttribute(`#${attributeId.join("_")}`)
        console.log(element)
        $(element).remove()
    })
})

//add categories to removable list
function updateCategoriesToRemoveListListener() {
    //add categories to removable list
    let categoriesList = $('#addToRemovableCategoriesList > div')
    categoriesList.each((index, element) => {
        $(element).unbind('click')
        $(element).click((category) => {
            if ($(category.currentTarget).parent().attr('id') === 'addToRemovableCategoriesList') {
                $($(category.currentTarget).find('i').get(0)).attr('class', 'bi bi-dash-lg');
                $('#categoriesToRemove').append(category.currentTarget)
            } else if ($($(category.currentTarget).parent().attr('id') === 'categoriesToRemove')) {
                $($(category.currentTarget).find('i').get(0)).attr('class', 'bi bi-plus-lg');
                $('#addToRemovableCategoriesList').append(category.currentTarget)
            }
        })
    })
}

//add attributes to removable list
function updateAttributesToRemoveListListener() {
    //add categories to removable list
    let attributesList = $('#AddToRemovableAttributesList > div')
    attributesList.each((index, element) => {

        $(element).unbind('click')
        $(element).click((attribute) => {

            if ($(attribute.currentTarget).parent().attr('id') === 'AddToRemovableAttributesList') {
                $($(attribute.currentTarget).find('i').get(0)).attr('class', 'bi bi-dash-lg');
                $('#attributesToRemove').append(attribute.currentTarget)
            } else if ($($(attribute.currentTarget).parent().attr('id') === 'attributesToRemove')) {
                $($(attribute.currentTarget).find('i').get(0)).attr('class', 'bi bi-plus-lg');
                $('#AddToRemovableAttributesList').append(attribute.currentTarget)
            }
        })
    })
}


//add category function
function addCategory(nameInEn, nameInKa, nameInRu) {

    $('#mainCategoryContainer').append(categoryHtml(nameInEn, nameInKa, nameInRu))
    $('#addToRemovableCategoriesList').append(`
        <div id="${nameInEn.replaceAll(" ", "_")}_removeCategory" class="btn btn-outline-info text-black-50 m-1"> <i class="bi bi-plus-lg"></i> ${nameInEn}  </div>
    `)
    $('#selectCategory').append(new Option(nameInEn, nameInEn.replaceAll(" ", "_")))
    updateCategoriesToRemoveListListener()
}

function removeCategory(selector) {
    console.log(selector)
    $(selector).remove()
    $($(`#selectCategory option[value = '${selector.replace('#', '')}']`).get(0)).remove()
}

//add attribute function
function addAttribute(category_en, nameInEn, nameInKa, nameInRu) {
    $('#' + category_en + '_body').append(attributeHtml(nameInEn, nameInKa, nameInRu))
    $('#AddToRemovableAttributesList').append(`
        <div id="${nameInEn.replaceAll(" ", "_")}_removeAttribute" class="btn btn-outline-info text-black-50 m-1"> <i class="bi bi-plus-lg"></i> ${nameInEn}  </div>
    `)
    updateAttributesToRemoveListListener()
}

function removeAttribute(attributeSelector) {
    $(attributeSelector).remove()
}

//return formatted category html
function categoryHtml(en, ka, ru) {
    let category = en.trim().replaceAll(" ", "_")
    let categoryHeaderId = category + "_header";
    let categoryBodyId = category + "_body";

    return `
        <div id="${category}" class="accordion-item">
            <h4 class="accordion-header" id="${categoryHeaderId}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#${categoryBodyId}_container" aria-expanded="false" aria-controls="${categoryBodyId}_container">
                    ${en}
                </button>
                <input type="hidden" data-parent="${category}" data-language="ka" name="${category}_ka" value="${ka}">
                <input type="hidden" data-parent="${category}" data-language="en" name="${category}_en" value="${en}">
                <input type="hidden" data-parent="${category}" data-language="ru" name="${category}_ru" value="${ru}">
            </h4>
            <div id="${categoryBodyId}_container" class="accordion-collapse collapse" aria-labelledby="${categoryHeaderId}" data-bs-parent="#mainCategoryContainer">
                <div id="${categoryBodyId}" class="accordion-body">
                    
                </div>
            </div>
        </div>
    `;
}

//return formatted attribute html
function attributeHtml(en, ka, ru) {
    let attribute = en.trim().replaceAll(" ", "_");

    return `
        <div id="${attribute}" class="row py-1 my-4 align-items-center">
            <div class="attribute-header col-3">
                <span class="fs-5 text-wrap attribute-header">${en}</span>
                <input type="hidden" data-language="ka" name="${attribute}_ka" value="${ka}">
                <input type="hidden" data-language="en" name="${attribute}_en" value="${en}">
                <input type="hidden" data-language="ru" name="${attribute}_ru" value="${ru}">
            </div>

            <div class="attribute-body col d-flex flex-column text-center pb-3 border-bottom">
                <label class="d-flex flex-row align-items-center">
                    <span class="px-3">ka</span>
                    <input type="text" class="form-control my-1" data-language="ka" name="${attribute}_ka">
                </label>

                <label class="d-flex flex-row align-items-center">
                    <span class="px-3">en</span>
                    <input type="text" class="form-control my-1" data-language="en" name="${attribute}_en">
                </label>

                <label class="d-flex flex-row align-items-center">
                    <span class="px-3">ru</span>
                    <input type="text" class="form-control my-1" data-language="ru" name="${attribute}_ru">
                </label>
            </div>
        </div>
    `
}


function updateCategoriesOnPanel() {
    let nameInEn;
    $('#mainCategoryContainer .accordion-item').each((index, element) => {
        nameInEn = $(element).attr('id')

        $('#addToRemovableCategoriesList').append(`
            <div id="${nameInEn}_removeCategory" class="btn btn-outline-info text-black-50 m-1"> <i class="bi bi-plus-lg"></i> ${nameInEn}  </div>
        `)

        $('#selectCategory').append(new Option(nameInEn, nameInEn))
    })
    updateCategoriesToRemoveListListener()
}

function updateAttributesOnPanel() {
    let nameInEn;
    $('#mainCategoryContainer .accordion-item').each((categoryIndex, categoryElement) => {
        $(categoryElement).find('.accordion-body > div').each((attributeIndex, attributeElement) => {
            nameInEn = $(attributeElement).attr('id').replaceAll(" ", "_")
            $('#AddToRemovableAttributesList').append(`
                <div id="${nameInEn}_removeAttribute" class="btn btn-outline-info text-black-50 m-1"> <i class="bi bi-plus-lg"></i> ${nameInEn}  </div>
            `)
        })
    })
    updateAttributesToRemoveListListener()
}

function getCharacteristicsJson() {
    let data = []
    let attributesData

    $('#mainCategoryContainer .accordion-item').each((index, element) => {
        data[index] = {
            'name': $(element).attr('id'),

            'lang': {
                'ka': $(element).find(".accordion-header input[data-language = 'ka']").attr('value'),
                'en': $(element).find(".accordion-header input[data-language = 'en']").attr('value'),
                'ru': $(element).find(".accordion-header input[data-language = 'ru']").attr('value'),
            }
        }

        attributesData = []

        $(element).find($(element).find(`#${$(element).attr('id')}_body > div`)).each((attributeIndex, attributeElement) => {
            attributesData.push({
                'name': $(attributeElement).attr('id'),
                'lang': {
                    'ka': $(attributeElement).find(".attribute-header input[data-language = 'ka']").attr('value'),
                    'en': $(attributeElement).find(".attribute-header input[data-language = 'en']").attr('value'),
                    'ru': $(attributeElement).find(".attribute-header input[data-language = 'ru']").attr('value'),
                },
                'value': {
                    'ka': $(attributeElement).find(".attribute-body input[data-language = 'ka']").val(),
                    'en': $(attributeElement).find(".attribute-body input[data-language = 'en']").val(),
                    'ru': $(attributeElement).find(".attribute-body input[data-language = 'ru']").val(),
                }
            })

        })

        data[index]['attributes'] = attributesData
    })

    return JSON.stringify(data);
}