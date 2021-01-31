@foreach($children as $subcategory)
    <ul class="list-group-item-success text-right">
        @if(count($subcategory->children))
        <li>{{$subcategory->title}}</li>

            <ul>
                @include('front.widgets._categoryTreeWidget',['children' => $subcategory->children])

            </ul>

        @else
        <li><a href="#" style="display:inline;">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach

