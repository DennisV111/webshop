<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="featured-slider">
        <div class="wrapper">

            @foreach ($items as $item)
                <div class="box-book">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <span class="discount-tag">40% off</span>
                        <img src="{{ asset('frontend/assets/img/Architect/Architect7.jpg') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">&euro;59.99 <span class="actual-price">&euro;99.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
        </div>
    </div>
    @endforeach
</body>

</html>
