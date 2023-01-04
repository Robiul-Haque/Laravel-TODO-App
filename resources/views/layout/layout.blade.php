<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') || TODO App</title>
        {{-- Bootstrap 5 css cdn link --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        {{-- Toastr css cdn link --}}
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        {{-- Custome internal css --}}
        <style>
            .taskApp{
                display:flex;
                justify-content:center;
                margin-top:200px;
            }
            .taskAppBtn{
                display:flex;
                justify-content:center;
                margin-top:10px;
                margin:50px;
                padding:50px;
            }

            /* .login{
                height: 50% !important;
                width: 30% !important;
                margin-right:70%;
            } */
            .form {
                width: 20%;
                margin: 0 auto;
                text-align: center;
        }
        </style>
    </head>
    <body>
        {{-- Header --}}
        @include('navbar.navbar')
        
        {{-- Body --}}
        @yield('contant')

        {{-- Bootstrap 5 js cdn link --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        {{-- Toastr js cdn link --}}
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    </body>
</html>