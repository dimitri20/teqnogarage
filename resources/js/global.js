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

    queries.forEach(element => {
        let key = Object.keys(element)[0]
        $("#filterForm input[type = 'checkbox'][name = '" + key + "'][value = '" + element[key] + "']").prop("checked", true)
        if (key == 'sortBy') {
            $('#sortBy').val(element[key])
        }
        if (key == 'price[min]') {
            $('#price_min').val(element[key])
        }
        if (key == 'price[max]') {
            $('#price_max').val(element[key])
        }
    })

    $("#filterForm input[type = 'checkbox']").each((index, element) => {
        $(element).change((e) => {
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
    temp = url.replace("?", "").split("&")
    temp.forEach(element => {
        let attrValPair = element.split("=")
        let attrValPairDict = {}
        attrValPairDict[attrValPair[0]] = attrValPair[1]
        query.push(attrValPairDict)
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