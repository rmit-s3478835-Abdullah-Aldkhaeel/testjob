<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" type = "text/css" href = "css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>

        body{
            background: url("./job1.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: grey;
        }

        #layoutAndColor{
            color: black;
            margin-top: 20px;
        }

        a:hover{
            background-color: black;
        }

        .fa-btn {
            margin-right: 6px;

        }

        .panel-bodyLanding
        {
            background-color: #f5f5f5;
            color:white;

        }

        .button {
            background-color: #5C97BF;
            border: none;
            color: white;
            padding: 15px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            width: 100%;
        }
        footer {
            padding: 0.5em;
            color: black;
            background-color: rgba(245, 245, 245, 0.6);
            clear: left;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
            right: 0;
        }
    </style>
    </head>
    <body>
    <nav class="navbar navbar-inverse  navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-responsive-collapse">
                {{--<span class="sr-only">Toggle-navigation</span>--}}
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{URL('/')}}" class="navbar-brand">Home</a>
        </div>
        <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{URL('/search')}}">searchJob</a></li>
                <li><a href="{{URL('/myAccount')}}">MyAccount</a></li>
                <li><a href="{{URL('/contact')}}">ContactUs</a></li>
                <li><a href="{{URL::to('/logOut')}}">logout</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer>Copyright 2017 &copy; Job Seeking</footer>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
