<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('dashboard/css/header.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/css/table.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('common/css/button-style.css')}}">
        <link rel="stylesheet" href="{{asset('common/css/form.css')}}">
         
        <!-- Font awesome  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- summernote css -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <script src="{{asset('dashboard/js/jquery.js')}}"></script>
        <!-- Font awesome  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- summernote js -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <!-- Chart  -->
        <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    </head>
    <body>
        <div class="sidebar">
            @include('components.dashboard.sidebar')
        </div>
        <div class="content-body">
            @include('components.dashboard.header')
            <div class="content-area">
            @yield('superAdminContent')
            </div>
            @include('components.dashboard.footer')

            <script src="{{asset('dashboard/js/slideDown.js')}}"></script>
            <script src="{{asset('dashboard/js/actionDisabled.js')}}"></script>
            <script src="{{asset('dashboard/js/chart.js')}}"></script>
        </div>
    </body>
</html>
