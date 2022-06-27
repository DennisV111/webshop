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
            <h2>Edit Category: {{ $category->name }}</h2>
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
        <form action="{{ route('admin.categories.update', $category->id)}}" method="post">
            @csrf
            @method('PATCH')
            <p>
                <label for="category">Name:</label>
                <input type="text" id="category" name="name" value="{{ $category->name }}" autocomplete="off" autofocus>
            </p>
            <button class="button edit">Update</button>
        </form>
    </div>
    <br>
    <nav>
        <a class="button nav" href="{{ route('admin.categories.index') }}">Back</a>
    </nav>

@endsection
@endauth