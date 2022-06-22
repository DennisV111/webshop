<form action="{{ route('item.findBooks') }}" method="POST">
    @csrf
    {{-- <i class="fa fa-search search-icon"></i> --}}
    <input type="text" name="search" id="search" value="{{ request()->input('search') }}" class="search-box"
        placeholder="Search..." autocomplete="on" required>
    <input type="submit" name="" value="Search">
</form>
