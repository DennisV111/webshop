@extends('admin.admin')

@auth
@section('body')

<div>
    <header>
        <h2>Bookazine Dashboard</h2>
    </header>
</div>
<br>
<div>
    <table>
        <caption>Available Items</caption>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Product Stock</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>
                    <a href="{{ route('admin.items.show', $item->id ) }}">{{ $item->title }}</a>
                </td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->product_stock->amount }}</td>
                <td>
                    <a href="{{ route('admin.items.edit', $item->id)}}"><button class="edit">Edit</button></a>
                </td>
                <td>
                    <form action="{{ route('admin.items.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="remove" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach        
    </table>
</div>
<br>
<nav>
    <a class="button add" href="{{ route('admin.items.create') }}">Add Item</a>
</nav>
<br>
<nav>
    <a class="button nav" href="{{ route('admin.index') }}">Back to start screen</a>
</nav>

{{--                     
                    @foreach ($indexAttributes as $attribute)
                        <td>
                            @if($attribute == "title" )
                                <a href="{{ route('admin.items.show', $item->id ) }}">
                                    {{ $item[$attribute] }}
                                </a>
                            @else
                                {{ $item[$attribute] }}
                            @endif
                        </td>
                    @endforeach
                </tr> --}}
{{-- <div>
    
    
    <table>
            <tr>
                @foreach ($indexAttributes as $attribute)
                    <th>{{ $attribute }}</th>
                @endforeach
            <tr>
            @foreach ($items as $item)
                <tr>
                    @foreach ($indexAttributes as $attribute)
                        <td>
                            @if($attribute == "title" )
                                <a href="{{ route('admin.items.show', $item->id ) }}">
                                    {{ $item[$attribute] }}
                                </a>
                            @else
                                {{ $item[$attribute] }}
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach

        </table>
    </div> --}}

@endsection
@endauth