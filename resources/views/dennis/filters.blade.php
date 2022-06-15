<div class="mt-5 mb-5">
    <ul>
    @foreach($categories as $category)
        <li style="color: black">
            {{ $category->name }}
        </li>
    @endforeach
    </ul>
    <hr>
    <ul>
    @foreach($authors as $author)
        <li style="color: black">
            {{ $author->author }}
        </li>
    @endforeach
    </ul>
</div>