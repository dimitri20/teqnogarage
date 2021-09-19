
<div id="main-nav-container">
    <nav id="main-nav" class="container-main h-100">
        <div class="row h-100">

            <div class="col-auto h-100">
                <div class="cat-menu-container">
                    <div class="cat-menu-title d-flex flex-row align-items-center justify-content-start">
                        <svg style="fill:#fff;" xmlns="http://www.w3.org/2000/svg" height="20pt" viewBox="0 -53 384 384" width="20pt"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
                        <div class="cat-menu-text fs-5">{{ __("კატეგორიები") }}</div>
                    </div>
                </div>   
            </div>

            <div class="col h-100">
                <div id="banner-and-main-nav-container" class="ms-auto h-100 float-end">
                    <div class="main-nav-menu h-100">
                        <ul class="d-flex flex-row h-100">
                            @include('assets.menu-items')
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</div>


<div id="banner-and-cat-container">
    <div class="container-main">
        <div class="row">
            <div class="col-auto d-none d-sm-block">
                <nav class="cat-menu h-100" style="width: 340px;">
                    <ul class="h-100 w-100 p-0">
                        @include('assets.cat-menu') 
                    </ul>
                </nav>
            </div>

            <div class="col banner-col">


                <div id="main-banner-carousel" class="carousel slide h-100 py-4" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        @foreach ($bannerImages as $key => $image)
                            
                            <div class="carousel-item @if($key == 0) active @endif" data-bs-interval="2000">
                                <img src="{{asset("storage/".$image->banner_image)}}" class="d-block w-100" alt="{{$image->name}}">
                            </div>

                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#main-banner-carousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#main-banner-carousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>

                </div>

                
            </div>
        </div>
    </div>
</div>

                        
                        


