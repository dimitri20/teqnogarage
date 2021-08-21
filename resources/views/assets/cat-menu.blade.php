

@foreach($categories as $category)

    <li class="cat-menu-item" style="cursor: pointer;">

        
        <span>{{ $category->category }}</span>
           
        

    
    <ul class="cat-menu-sub d-none">

        @foreach($subcategories as $subcategory)


            @if($subcategory->categories_id == $category->id)

                <li>
                    <a href="{{ route('index.products', app()->getLocale())."?categories[]=".$category->id."&subcategories[]=".$subcategory->id }}">
                        {{ $subcategory->subcategory }}
                    </a>
                </li>

            @endif


        @endforeach

    </ul>
        
    
    </li>

@endforeach

