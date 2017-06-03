<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title','Последние записи') - {{setting('site_title')}}</title>
    <meta name="description" content="{{setting('site_description')}}">
    <meta name="keywords" content="{{setting('site_keywords')}}">

    <link href="{{mix('css/app.css')}}" rel="stylesheet">
</head>



<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">{{config('app.name')}}</a>
        </div>

        @widget('menu')
    </div>
    <!-- /.container -->
</nav>

@yield('content')

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p class="copyright text-muted">Copyright &copy; 2015 - {{date('Y')}}</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{mix('js/app.js')}}"></script>

</body>

</html>
