@extends('admin.admin')

@section('body')
    <div>
        <header>
            <h1>Bookazine Admin Dashboard</h1>
        </header>
    </div>
    <br>
    <div>
        <div class="home">
            <br><br>
            <nav>
                <a class="button nav index" href="{{ route('admin.items.index')}}">Items</a>
            </nav>
            <br>
            <nav>
                <a class="button nav index" href="{{ route('admin.categories.index')}}">Categories</a>
            </nav>
            <br>
            <nav>
                <a class="button nav index" href="{{ route('admin.index')}}">Product Stock</a>
            </nav>
            <br>
            <nav>
                <a class="button nav index" href="{{ route('admin.index')}}">Customers</a>
            </nav>
            <br>
            <nav>
                <a class="button nav index" href="{{ route('admin.index')}}">Statistics</a>
            </nav>
            <br><br>
            <nav>
                <a class="button nav index remove" href="{{ route('signout')}}">Logout</a>
            </nav>
            <br><br>
        </div>
    </div>
    
@endsection