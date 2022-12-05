<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.104.2">
        <title>Signin Template · Bootstrap v5.2</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

        

        

        <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

            <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">


        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        </style>

        
        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        
        <main class="form-signin w-100 m-auto">
            <form style="margin-left: 40%; margin-right: 40%; margin-top: 5%; margin-bottom: 5%" action="?pg=includes/login.inc" method="POST">
                <img class="mb-4" src="images/LOGIN.png" alt="" width="92" height="92">
                <h1 class="h3 mb-3 fw-normal">Insira seus dados</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com\Your_Name" name="mailuid">
                    <label for="floatingInput">Email address\Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pswd">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                       
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-dark" style="margin-bottom: 2px;" name="login-submit" type="submit">Login</button>
            </form>
        </main>  
    </body>
</html>