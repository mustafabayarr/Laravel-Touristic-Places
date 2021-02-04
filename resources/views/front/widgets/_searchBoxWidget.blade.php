<!--Hero form -->
<form action="{{route('get_places')}}" method="post" class="search-box">
    @csrf
    <div class="input-form">
        @livewire('search')
    </div>
    <div class="select-form">
        <div class="select-itms">
            <select name="select" id="select1">
                <option value="">All Catagories</option>
                <option value="">Hotel</option>
                <option value="">Night Life</option>
                <option value="">Culture Places</option>
                <option value="">Restaurant</option>
            </select>
        </div>
    </div>
    <div class="search-form">
        <button type="submit">Search</button>
    </div>
</form>
@livewireScripts
