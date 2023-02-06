$(document).ready(() => {



    $('.cat-menu-item span').click((e) => {
        $(e.target).toggleClass('cat-active')
        $($(e.target).closest('.cat-menu-item').find('.cat-menu-sub').get(0)).toggleClass('d-none')
    })

    $('.cat-menu-item').hover((e) => {

        if ($(e.target).find('.cat-menu-sub').children().length > 0) {
            $($(e.target).find('.cat-menu-sub').get(0)).toggleClass('d-none')
        }

    })


    queries = decodeQuerys($(location).attr('search'))
    subcategoriesQuery = decodeSubCategories($(location).attr('search'))
    
    // if('categories[]' in queries){
    //     let id = queries['categories[]']

    //     $("#filterForm input[type = 'checkbox']").each((index, element) => {
    //         $(element).change((e) => {
    //             $("#filterForm").submit()
    //         })
    //     })
    // }

    // console.log(queries)
    // queries.forEach(element => {
        
    // })

    // let key = Object.keys(element)
    // console.log(key)
    console.log(queries)
    console.log(subcategoriesQuery)

    $("#filterForm input[type = 'checkbox'][name = 'categories'][value = '" + queries['categories'] + "']").prop("checked", true)
    subcategoriesQuery.forEach(element => {
        $("#filterForm input[type = 'checkbox'][name = 'subcategories[]'][value = '" + element['subcategories[]'] + "']").prop("checked", true)
    })
    
    
    if ('sortBy' in queries) {
        $('#sortBy').val(queries['sortBy'])
    }
    if ('price[min]' in queries) {
        $('#price_min').val(queries['price[min]'])
    }
    if ('price[max]' in queries) {
        $('#price_max').val(queries['price[max]'])
    }

    $("#filterForm input[type = 'checkbox'][name = 'subcategories[]']").each((index, element) => {
        $(element).change((e) => {
            $("#filterForm").submit()
        })
    })

    $("#filterForm input[type = 'checkbox'][name = 'categories']").each((index, element) => {
        $(element).change((e) => {
            $("#filterForm input[type = 'checkbox'][name = 'categories']").each((i, e) => {
                $(e).prop("checked", false)
            })
            $("#filterForm input[type = 'checkbox'][name = 'subcategories[]']").each((i, e) => {
                $(e).prop("checked", false)
            })
            $(element).prop("checked", true)
            $("#filterForm").submit()
        })
    })

    

    $("#sortBy").change(() => {
        $('#filterForm input:text').each((index, element) => {
            $(element).clone().attr('type', 'hidden').appendTo("#sortByForm")
        })

        $("#filterForm input:checkbox:checked").each((index, element) => {
            $(element).clone().attr('type', 'hidden').appendTo("#sortByForm")
        })

        $('#sortByForm').submit()
    })

})


function decodeQuerys(url) {
    url = decodeURIComponent(url)
    let query = []
    let attrValPairDict = {}
    temp = url.replace("?", "").split("&")
    temp.forEach(element => {
        let attrValPair = element.split("=")
        attrValPairDict[attrValPair[0]] = attrValPair[1]
        query.push(attrValPairDict)
    });
    return attrValPairDict
}

function decodeSubCategories(url){
    url = decodeURIComponent(url)
    let query = []
    temp = url.replace("?", "").split("&")
    temp.forEach(element => {
        let attrValPair = element.split("=")
        let attrValPairDict = {}
        if(attrValPair[0] == 'subcategories[]'){
            attrValPairDict[attrValPair[0]] = attrValPair[1]
            query.push(attrValPairDict)
        }
        
    });
    return query
}

// class QueryBuilder {

//     query = []
//     url = ""

//     constructor(url = "?filter[category]=1&filter[category]=2&filter[category]=4&filter[category]=10") {
//         this.url = decodeURIComponent(url)
//     }

//     queryToDict() {
//         let url = this.url
//         temp = url.replace("?", "").split("&")
//         temp.forEach(element => {
//             let attrValPair = element.split("=")
//             this.query.push({
//                 attrValPair[0]: attrValPair[1]
//             })
//         });
//         return this.query
//     }
// }



// function filter(obj) {
//     query = $(location).attr('search')
//     query = decodeURIComponent(query)
//         //"?filter[category]=1?filter[category]=2?filter[category]=4?filter[category]=10"

//     if (query != "" || query != null) {

//     }


//     decodeURI(url)
//     return $.param(obj)
// }