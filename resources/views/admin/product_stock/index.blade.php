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
    <table>
        <caption>Current Product Stocks</caption>
        <tr>
            <th>Amount</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($product_stocks as $product_stock)
            <tr>
                <td>{{ $product_stock->amount }}</td>
                <td>
                    <a href="{{ route('admin.product_stock.edit', $product_stock->id)}}"><button class="edit">Edit</button></a>
                </td>
                <td>
                    <form action="{{ route('admin.product_stock.destroy', $product_stock->id)}}" method="post">
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
    <a class="button add" href="{{ route('admin.product_stock.create') }}">Add Category</a>
</nav>
<br>
<nav>
    <a class="button nav" href="{{ route('admin.index') }}">Back to start screen</a>
</nav>


@endsection
@endauth