

let addCategory_button = $('#addCategory');
let addAttribute_button = $('#addAttribute');

addCategory_button.click(() => {
    let canSubmit_input_validate = true;
    let canSubmit_similar_element = true;
    let canSubmit;
    let category_en = $('#addCategory-en').val().trim();

    $('#addCategoryGroup input').each((index, element) =>
        canSubmit_input_validate = $(element).val().trim() !== ""
    )
    $('#mainCategoryContainer .accordion-header').each((index, element) =>
        canSubmit_similar_element = $(element).text().trim() !== category_en
    )
    canSubmit = canSubmit_similar_element && canSubmit_input_validate
    if(canSubmit){
        $('#mainCategoryContainer').append(
            categoryHtml(category_en)
        )

        $('#selectCategory').append(new Option(category_en, category_en))
        $('#addCategoryGroup input').each((index, element) =>
            $(element).val("")
        )
    }

})

addAttribute_button.click(() => {
    let canSubmit_input_validate = true;
    let canSubmit_similar_element = true;
    let canSubmit;
    let category_en = $('#selectCategory :selected').val();
    let attribute_en = $('#addAttribute-en').val().trim();

    $('#addAttributeGroup input').each((index, element) =>
        canSubmit_input_validate = $(element).val().trim() !== ""
    )
    $('.attribute-header').each((index, element) =>
        canSubmit_similar_element = $(element).text().trim() !== attribute_en
    )
    canSubmit = canSubmit_similar_element && canSubmit_input_validate

    if(canSubmit){
        $('#'+category_en+'_body').append(attributeHtml(attribute_en));
        $('#addAttributeGroup input').each((index, element) =>
            $(element).val("")
        )
    }

})



function categoryHtml(en) {

    let categoryHeaderId = en.trim().replace(" ", "_") + "_header";
    let categoryBodyId = en.trim().replace(" ", "_") + "_body";

    return `
        <div class="accordion-item">
            <h4 class="accordion-header" id="${categoryHeaderId}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#${categoryBodyId}_container" aria-expanded="true" aria-controls="${categoryBodyId}_container">
                    ${en}
                </button>
            </h4>
            <div id="${categoryBodyId}_container" class="accordion-collapse collapse" aria-labelledby="${categoryHeaderId}" data-bs-parent="#mainCategoryContainer">
                <div id="${categoryBodyId}" class="accordion-body">
                    
                </div>
            </div>
        </div>
    `;
}

function attributeHtml(en){
    let attribute = en.trim().replace(" ", "_");

    return `
        <div class="row py-1 my-4 align-items-center">
            <div class="col-3">
                <span class="fs-5 text-wrap attribute-header">${en}</span>
            </div>

            <div class="col d-flex flex-column text-center pb-3 border-bottom">
                <label class="d-flex flex-row align-items-center">
                    <span class="px-3">ka</span>
                    <input type="text" class="form-control my-1" name="${attribute}_ka">
                </label>

                <label class="d-flex flex-row align-items-center">
                    <span class="px-3">en</span>
                    <input type="text" class="form-control my-1" name="${attribute}_en">
                </label>

                <label class="d-flex flex-row align-items-center">
                    <span class="px-3">ru</span>
                    <input type="text" class="form-control my-1" name="${attribute}_ru">
                </label>
            </div>
        </div>
    `
}
