@extends('admin.admin')

@section('body')

<div>
        <table>
            <tr>
                @foreach ($indexAttributes as $attribute)
                    <th>{{ $attribute }}</th>
                @endforeach
            <tr>
            @foreach ($items as $item)
                
                
                {{-- @dd($item->item_category->name); --}}
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
    </div>

    @endsection