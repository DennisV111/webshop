        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                crossorigin="anonymous">

            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="stylesheet" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

            <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"
                type="text/css" />
            <link
                href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800"
                rel="stylesheet" type="text/css" />
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
            <link
                href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&family=Dancing+Script:wght@400;600&family=Poppins:wght@100;300;400;500;600;700;900&display=swap"
                rel="stylesheet">
            <script src="https://kit.fontawesome.com/3526202087.js" crossorigin="anonymous"></script>


            <link rel="stylesheet" href="{{ asset('frontend/assets/css/signin.css') }}">

        </head>

        <body>
            <!-- Login Form  Start-->
            <div class="Signin-form-container">
                <form action="">
                    <h1>Sign In</h1>
                    <div class="form-mail-password">

                        <input type="text" name="" placeholder="enter your email" id="">

                        <input type="password" name="" placeholder="enter your password" id="">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            remember-me
                        </label>
                    </div>
                    <button type="submit">Signin</button>
                    <p>forget password ? <a href="#">click here</a></p>
                    <p>don't have an account ? <a href="{{ url('users/signup') }}">creat one</a></p>
                </form>

                <div id="close-signin-btn" class="fas fa-times"></div>
            </div>
            <!-- Login Form  End-->
        </body>

        </html>
