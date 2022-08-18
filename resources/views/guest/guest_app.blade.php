<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ahmad Reski</title>
        <link rel="icon" type="image/x-icon" href="{{asset('guest/assets/img/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('guest/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">

    @include('guest.components.guest_navbar');
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            @include('guest.components.guest_about');
            <!-- Experience-->
            @include('guest.components.guest_experience');
            <!-- Education-->
            @include('guest.components.guest_education');
            <!-- Skills-->
            @include('guest.components.guest_skills');
            <!-- Interests-->
            @include('guest.components.guest_interests');
            <!-- course-->
            @include('guest.components.guest_course');
            <!-- Certi-->
            @include('guest.components.guest_certificate');
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('guest/js/scripts.js')}}"></script>
    </body>
</html>
