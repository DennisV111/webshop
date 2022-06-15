@extends('admin.admin')

@section('body')

<div>
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
                            {{-- <a class="edit" href="{{ route('admin.items.edit', ['id' => $item->id, 'attribute' => $item[$attribute] ] ) }}">
                                <br><br>Edit
                            </a> --}}<a>href="{{ route('admin.items.show', $item->id ) }}">
                                    {{ $item[$attribute] }}Edit</a>
                        @endif
                    </td>
                @endforeach
            </tr>
        </table>
    </div>

@endsection