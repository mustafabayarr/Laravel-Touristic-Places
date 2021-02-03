<ul class="list-group-item-success text-right">
    @foreach($children as $subcategory)
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            @include('front.widgets._categoryTreeWidget',['children' => $subcategory->children])

        @else
            <li><a href="{{route('category_places',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}" style="display:inline-block; padding-bottom: 0; padding-top: 0;">{{$subcategory->title}}</a></li>
        @endif
    @endforeach
</ul>


