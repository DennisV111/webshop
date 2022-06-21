@extends('admin.admin')

@section('body')

<div>
    <header>
        <h2>Bookazine Dashboard</h2>
    </header>
</div>
<br>
<div>
    <table>
        <caption>Title: {{ $item->title }}</caption>
        {{-- <tr>
            <th>Title</th>
            <td>{{ $item->title }}</td>
        </tr> --}}
        <tr>
            <th>Category</th>
            <td>{{ $item->category->name }}</td>
        </tr>
        <tr>
            <th>Product Stock</th>
            <td>{{ $item->product_stock->amount }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $item->author }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $item->description }}</td>
        </tr>
        <tr>
            <th>Language</th>
            <td>{{ $item->language }}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{ $item->isbn }}</td>
        </tr>
        <tr>
            <th>Dimensions</th>
            <td>{{ $item->dimensions }}</td>
        </tr>
        <tr>
            <th>Image Name</th>
            <td>{{ $item->image_name }}</td>
        </tr>
        <tr>
            <th>Published</th>
            <td>{{ $item->published }}</td>
        </tr>
        <tr>
            <th>Format</th>
            <td>{{ $item->format }}</td>
        </tr>
        <tr>
            <th>Pages</th>
            <td>{{ $item->pages }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $item->price }}</td>
        </tr>
        <tr>
            <th>VAT</th>
            <td>{{ $item->vat }}</td>
        </tr>
    </table>
</div>


{{-- <div>
    <header>
        <h2>{{ $item->title }}</h2>
    <header>
</div>
<br>
<div>
        <table>
            <tr>
                @foreach ($showTableAttributes as $attribute)
                    <th>{{ $attribute }}</th>
                @endforeach
            <tr>
            <tr>
                @foreach ($showTableAttributes as $attribute)
                    <td>
                        {{ $item[$attribute] }}
                        @if($loop->index > 2 )
                            <a>href="{{ route('admin.items.show', $item->id ) }}">
                                    {{ $item[$attribute] }}Edit</a>
                        @endif
                    </td>
                @endforeach
            </tr>
        </table>
    </div> --}}

    {{-- <a class="edit" href="{{ route('admin.items.edit', ['id' => $item->id, 'attribute' => $item[$attribute] ] ) }}">
                                <br><br>Edit
                            </a> --}}

@endsection