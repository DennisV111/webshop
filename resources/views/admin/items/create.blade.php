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
        <h2>Add Item</h2>
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
        <form action="{{ route('admin.items.store')}}" method="post">
            @csrf
            <p>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="Title" autocomplete="off" autofocus>
            </p>
            <p>
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" value="Author" autocomplete="off">
            </p>
            <p> 
                <label for="category_id">Category:</label>
                @foreach ($categories as $category)
                    <br>
                    <input type="radio" id="{{ $category->name }}" name="category_id" value="{{ $category->id }}"
                    @if ( $category->id == 1 )
                        checked
                    @endif
                    >
                    <label for="{{$category->name}}">{{$category->name}}</label> 
                @endforeach
            </p>
            <p>
                <label for="description">Description:</label>
                <input type="text" id="descriptionr" name="description" value="Description" autocomplete="off">
            </p>
            <p>
                <label for="language">Language:</label>
                <input type="text" id="language" name="language" value="Language" autocomplete="off">
            </p>
            <p>
                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn" value="ISBN" autocomplete="off">
            </p>
            <p>
                <label for="dimensions">Dimensions:</label>
                <input type="text" id="dimensions" name="dimensions" value="Dimensions"autocomplete="off" >
            </p>
            <p>
                <label for="image-name">Image Name:</label>
                <input type="text" id="image-name" name="image_name" value="Image Name" autocomplete="off">
            </p>
            <p>
                <label for="published">Published:</label>
                <input type="text" id="published" name="published" value="2018-05-15" autocomplete="off">
            </p>
            <p>
                <label for="format">Format:</label>
                <input type="text" id="format" name="format" value="Format"autocomplete="off" >
            </p>
            <p>
                <label for="pages">Pages:</label>
                <input type="text" id="pages" name="pages" value=100 autocomplete="off">
            </p>
            <p>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value=109.99 autocomplete="off">
            </p>
            <p>
                <label for="vat">VAT:</label>
                <input type="text" id="vat" name="vat" value=9.00 autocomplete="off" >
            </p>
            <button class=" button add">Submit</button>
        </form>
    </div>

@endsection
@endauth