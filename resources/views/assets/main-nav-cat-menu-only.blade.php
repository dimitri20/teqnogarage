<div id="main-nav-container">
    <nav id="main-nav" class="container-main h-100">
        <div class="row h-100">
            <div class="col h-100">

                <div class="main-nav-content container-main-navbar-grid h-100">
                    <div class="cat-menu-container-hoverable">
                        <div class="cat-menu-title d-flex flex-row align-items-center justify-content-start">
                            <svg style="fill:#fff;" xmlns="http://www.w3.org/2000/svg" height="20pt" viewBox="0 -53 384 384" width="20pt"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
                            <div class="cat-menu-text fs-5">{{ __("კატეგორიები") }}</div>
                        </div>

                        <ul class="cat-menu-hoverable w-100">
                            @include('assets.cat-menu')
                        </ul>
                    </div>

                    <div id="banner-and-main-nav-container" class="flex-fill ms-auto">
                        <div class="main-nav-menu h-100">
                            <ul class="d-flex flex-row h-100">
                                @include('assets.menu-items')
                            </ul>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </nav>
</div>

