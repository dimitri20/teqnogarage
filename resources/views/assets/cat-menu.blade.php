

@foreach($categories as $category)

    <li class="cat-menu-item fs-5 text-capitalize py-3" style="cursor: pointer;">

        
        <a href="{{ route('index.products', app()->getLocale())."?categories[]=".$category->id }}">
            {{ $category['category_'.app()->getLocale()] }}
        </a>
           
    
    
    <ul class="cat-menu-sub d-none">

        @foreach($subcategories as $subcategory)


            @if($subcategory->categories_id == $category->id)

                <li class="fs-6 text-capitalize">
                    <a href="{{ route('index.products', app()->getLocale())."?categories[]=".$category->id."&subcategories[]=".$subcategory->id }}">
                        {{ $subcategory['subcategory_'.app()->getLocale()] }}
                    </a>
                </li>

            @endif


        @endforeach

    </ul>
        
    
    </li>

@endforeach

