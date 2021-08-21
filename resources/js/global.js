$(document).ready(() => {

    $('.cat-menu-item span').click((e) => {
        $(e.target).toggleClass('cat-active')
        $($(e.target).closest('.cat-menu-item').find('.cat-menu-sub').get(0)).toggleClass('d-none')
    })

    $('.cat-menu-item').click((e) => {

        $(e.target).find('span').toggleClass('cat-active')
        $($(e.target).find('.cat-menu-sub').get(0)).toggleClass('d-none')

    })


    queries = decodeQuerys($(location).attr('search'))


    queries.forEach(element => {
        $("#filterForm input[type = 'checkbox'][name = '" + Object.keys(element)[0] + "'][value = '" + element[Object.keys(element)[0]] + "']").prop("checked", true)
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