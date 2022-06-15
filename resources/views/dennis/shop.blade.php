@extends('frontend.app')

@section('content')
    <div>
        <header>
            <h1>List of items</h1>
        <header>
    </div>
    <br>
    <br>
    
    @include('dennis.filters')

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Item category ID</th>
                <th>Stock ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Language</th>
                <th>ISBN</th>
                <th>Dimensions</th>
                <th>Image name</th>
                <th>Published</th>
                <th>Format</th>
                <th>Pages</th>
                <th>Price</th>
                <th>VAT</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->item_category_id }}</td>
                    <td>{{ $item->stock_id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->language }}</td>
                    <td>{{ $item->isbn }}</td>
                    <td>{{ $item->dimensions }}</td>
                    <td>{{ $item->image_name }}</td>
                    <td>{{ $item->published }}</td>
                    <td>{{ $item->format }}</td>
                    <td>{{ $item->pages }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->vat }}</td>
                </tr>
            @endforeach

        </table>
    </div>


@endsection