@extends('admin.admin')

@auth
@section('body')
    <div>
        <header>
            <h1>Bookazine Dashboard</h1>
        </header>
    </div>
    <br>
    <div>
        <div class="subheader">
            <h2>Create New Category</h2>
        </div>
    </div>
    <br>
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
                <input type="text" id="category" name="name" value="Category" autocomplete="off" autofocus >
            </p>
            <button class=" button add">Submit</button>
        </form>
    </div>
    <br>
    <nav>
        <a class="button nav" href="{{ route('admin.categories.index') }}">Back</a>
    </nav>

@endsection
@endauth