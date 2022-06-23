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
        <h2>Current Categories</h2>
    </div>
</div>
<br>
<div>
    <table>
        <tr>
            <th>Name</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $category->id)}}"><button class="edit">Edit</button></a>
                </td>
                <td>
                    <form action="{{ route('admin.categories.destroy', $category->id)}}" method="post">
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
    <a class="button add" href="{{ route('admin.categories.create') }}">Add Category</a>
</nav>
<br>
<nav>
    <a class="button nav" href="{{ route('admin.index') }}">Back</a>
</nav>
{{-- 
<td><a href="{{ route('persons.show', $person->id)}}"><button class="show">Show CV</button></a></td>
                    <td><a href="{{ route('persons.edit', $person->id)}}"><button class="edit">Edit Applicant</button></a></td>
                    <td>
                        <form action="{{ route('persons.destroy', $person->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="delete" type="submit">Delete Applicant</button>
                        </form>
                    </td> --}}


@endsection
@endauth