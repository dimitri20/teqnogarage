<div class="responsive-language-switch ms-3 mt-2">

    @switch(app()->getLocale())
        @case('ka')
            <div class="d-flex flex-row align-items-center">
                {{ Helper::renderLocaleLinkHtml("ka") }}
                <div id="toggle-lang" class="btn toggle-triangle ms-3 mb-1">
                    <i class="arrow down"></i>
                </div>
            </div>
        
            <div id="lang-body" class="d-flex flex-column py-4 ps-3 bg-white shadow responsive-language-switch-body mt-2 d-none">
                {{ Helper::renderLocaleLinkHtml("en") }}
                {{ Helper::renderLocaleLinkHtml("ru") }}
            </div>
        @break
        
        @case('en')
            <div class="d-flex flex-row align-items-center">
                {{ Helper::renderLocaleLinkHtml("en") }}
                <div id="toggle-lang" class="btn toggle-triangle ms-3 mb-1">
                    <i class="arrow down"></i>
                </div>
            </div>
        
            <div id="lang-body" class="d-flex flex-column py-4 ps-3 bg-white shadow responsive-language-switch-body mt-2 d-none">
                {{ Helper::renderLocaleLinkHtml("ka") }}
                {{ Helper::renderLocaleLinkHtml("ru") }}
            </div>
        @break

        @case('ru')
            <div class="d-flex flex-row align-items-center">
                {{ Helper::renderLocaleLinkHtml("ru") }}
                <div id="toggle-lang" class="btn toggle-triangle ms-3 mb-1">
                    <i class="arrow down"></i>
                </div>
            </div>
        
            <div id="lang-body" class="d-flex flex-column py-4 ps-3 bg-white shadow responsive-language-switch-body mt-2 d-none">
                {{ Helper::renderLocaleLinkHtml("en") }}
                {{ Helper::renderLocaleLinkHtml("ka") }}
            </div>
        @break
    
        @default
            <div class="d-flex flex-row align-items-center">
                {{ Helper::renderLocaleLinkHtml("ka") }}
                <div id="toggle-lang" class="btn toggle-triangle ms-3 mb-1">
                    <i class="arrow down"></i>
                </div>
            </div>
        
            <div id="lang-body" class="d-flex flex-column py-4 ps-3 bg-white shadow responsive-language-switch-body mt-2 d-none">
                {{ Helper::renderLocaleLinkHtml("en") }}
                {{ Helper::renderLocaleLinkHtml("ru") }}
            </div>
        @break
    @endswitch

</div>

<style>
    .responsive-language-switch{
        position: absolute;
    }
    .responsive-language-switch-body{
        width: 100px;
        border-radius: 5%;
        position: relative;
    }

    .responsive-language-switch-body a {
        margin-bottom: 6px;
    }

    .arrow {
        border: solid black;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
    }

    .down {
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }
</style>