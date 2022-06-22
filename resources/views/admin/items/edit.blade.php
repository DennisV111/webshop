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
        <h2>Edit Item</h2>
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
        <form action="{{ route('admin.items.update', $item->id)}}" method="post">
            @csrf
            @method('PATCH')
            <p>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $item->title }}" autocomplete="off" autofocus>
            </p>
            <p>
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" value="{{ $item->author }}" autocomplete="off">
            </p>
            <p> 
                <label for="category">Category:</label>
                @foreach ($categories as $category)
                    <br>
                    <input type="radio" id="{{ $category->name }}" name="category_id" value="{{ $category->id }}" 
                        @if ( $item->category->name == $category->name )
                        checked
                        @endif
                        >
                    <label for="{{$category->name}}">{{$category->name}}</label> 
                @endforeach
            </p>
            <p>
                <label for="description">Description:</label>
                <input type="text" id="descriptionr" name="description" value="{{ $item->description }}" autocomplete="off">
            </p>
            <p>
                <label for="language">Language:</label>
                <input type="text" id="language" name="language" value="{{ $item->language }}" autocomplete="off">
            </p>
            <p>
                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn" value="{{ $item->isbn }}" autocomplete="off">
            </p>
            <p>
                <label for="dimensions">Dimensions:</label>
                <input type="text" id="dimensions" name="dimensions" value="{{ $item->dimensions }}"autocomplete="off" >
            </p>
            <p>
                <label for="image-name">Image Name:</label>
                <input type="text" id="image-name" name="image_name" value="{{ $item->image_name }}" autocomplete="off">
            </p>
            <p>
                <label for="published">Published:</label>
                <input type="text" id="published" name="published" value="{{ $item->published }}" autocomplete="off">
            </p>
            <p>
                <label for="format">Format:</label>
                <input type="text" id="format" name="format" value="{{ $item->format }}"autocomplete="off" >
            </p>
            <p>
                <label for="pages">Pages:</label>
                <input type="text" id="pages" name="pages" value={{ $item->pages }} autocomplete="off">
            </p>
            <p>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value={{ $item->price }} autocomplete="off">
            </p>
            <p>
                <label for="vat">VAT:</label>
                <input type="text" id="vat" name="vat" value={{ $item->vat }} autocomplete="off" >
            </p>
            <button class=" button add">Update</button>
        </form>
    </div>

@endsection
@endauth