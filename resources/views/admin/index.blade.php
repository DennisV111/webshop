@extends('admin.admin')

@section('body')
    <div>
        <header>
            <h1>Bookazine Admin Dashboard</h1>
        </header>
    </div>
    <br>
    <nav>
        <a class="button nav index" href="{{ route('admin.items.index')}}">Items</a>
    </nav>
    <br>
    <nav>
        <a class="button nav index" href="{{ route('admin.categories.index')}}">Categories</a>
    </nav>
    <br>
    <nav>
        <a class="button nav index" href="{{ route('admin.product_stock.index')}}">Product Stock</a>
    </nav>
    <br>
    <nav>
        <a class="button nav index" href="{{ route('admin.items.index')}}">Customers</a>
    </nav>
    <br>
    <nav>
        <a class="button nav index" href="{{ route('admin.items.index')}}">Statistics</a>
    </nav>
    <br>
    <nav>
        <a class="button nav index shop" href="{{ route('home.featuredItems')}}">Bookazine Webshop</a>
    </nav>
    {{-- @for ( $i=0; $i <=10; $i++) {
        <br>
    }
    @endfor
    <div>
        <footer>
            <h2>by Dennis Visser</h2>
        </footer>
    </div> --}}
@endsection