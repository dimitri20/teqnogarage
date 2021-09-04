export default class {
    static getLocale() {
        return $('html').attr('lang')
    }

    static getToken() {
        return $("meta[name = 'csrf-token']").attr('content')
    }

    static isElement(parent, childSelector) {
        if ($(childSelector).parents(parent).length >= 1 ||
            childSelector == $(parent)[0]) {

            return true;
        } else {
            return false;
        }
    }
}