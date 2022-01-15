<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset("assets/favicon.ico") }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset("css/styles.css") }}" rel="stylesheet" />
        <link href="{{ asset("css/app.css") }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include("partials.navbar")

        <!-- Page header with logo and tagline-->
        @yield('page_header')
        <!-- Page content-->
        <div class="container">
            
           {{-- Messaggio passato dal controller --}}
            <div style="background-color: rgb(96, 123, 245); 
            text-align:center;  
            color:white">{{session('msg')}}</div>

            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                   @yield('main_content')
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    @include('partials.sidebar')
                </div>
            </div>
        </div>
        <!-- Footer-->
        @include('partials.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset("js/scripts.js")}}"></script>
    </body>
</html>