<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <link rel="stylesheet" href="/admin_map/admin.css">
    <title>Webshop Login</title>
</head>

<body>

    <div>
        <header>
            <h1>Bookazine Admin Dashboard Login</h1>
        </header>
    </div>
    <br>
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
        <form action="{{ route('login.post')}}" method="post">
            @csrf
            <p>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="email">
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="password">
            </p>
            <button class="button add">Signin</button>
        </form>
    </div>
    <br>
    <nav>
        <a class="button nav index shop" href="{{ route('home.featuredItems')}}">Go To The Bookazine Webshop</a>
    </nav>
    
</body>

</html>