<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookazine</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<link rel=" preconnect href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800"
        rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&family=Dancing+Script:wght@400;600&family=Poppins:wght@100;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/3526202087.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/bootstrap.min.css') }}" />


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/blue.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/lightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/owl.transitions.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/rateit.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/shipping.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/featured.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/items.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/shoppingCart.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/details.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('frontend/assets/assets/css/font-awesome.css') }}" />


    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>

<body>

    <header>

        @include('frontend.body.header')

    </header>

    <main>

        @yield('content')


    </main>









    <footer>

        @include('frontend.body.footer')

    </footer>

    <script src="{{ asset('frontend/assets/js/slider.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="{{ asset('frontend/assets/assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/jassets/s/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/assets/js/echo.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/assets/js/jquery.rateit.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/assets/js/scripts.js') }}"></script>



</body>

</html>
