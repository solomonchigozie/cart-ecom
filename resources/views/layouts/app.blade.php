{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Document</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>




    {{$slot}}


    <!--============================
        FOOTER START
    =============================-->
    <footer class="pt_100 pb_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_text">
                        <a class="footer_logo" href="index.html">
                            <img src="images/logo.png" alt="Freeit" class="img-fluid">
                        </a>
                        <ul class="d-flex flex-wrap">
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        </ul>
                        <p>Copyright © 2025 All Rights Reserved by Freeit</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============================
        FOOTER END
    =============================-->


    <!--jquery library js-->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }} "></script>
    <!--bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
    <!--font-awesome js-->
    <script src="{{ asset('assets/js/Font-Awesome.js') }} "></script>

    <!--main/custom js-->
    <script src="{{ asset('assets/js/main.js') }} "></script>

</body>

</html>