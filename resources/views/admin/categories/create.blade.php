@extends('admin.admin')

@section('body')
    <div>
        <header>
            <h1>Bookazine Dashboard</h1>
        </header>
    </div>
    <br>
    <div>
        <h2>Add Category</h2>
    </div>
    @if ($errors->any())
      <div >
        <ul>
            @foreach ($errors->all() as $error)
              {{ $error }}
            @endforeach
        </ul>
      </div><br>
    @endif
    
    <div>
        <form action="{{ route('admin.categories.store')}}" method="post">
            @csrf
            <p>
                <label for="category">Name:</label>
                <input type="text" id="category" name="name" value="Category">
            </p>
            <button class=" button add">Submit</button>
        </form>
    </div>

@endsection