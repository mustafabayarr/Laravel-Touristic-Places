<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <input wire:model="search" name="search" list="mylist" placeholder="Search a Place! " type="text"/>
    @if (!empty($query))
        <datalist id="mylist">
            @foreach ($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
