@extends('layouts.homepageStyle')

@section('content')
<div class="container">
    <div class="row">
        <br>

        <h1><div style="text-align: center; color:rgba(0,0,0,0.82); " >Welcome</div></h1>
        @if (Auth::guest())
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading"</div>


                <div class="panel-bodyLanding">
                    <a href="{{URL::to('/login')}}" class="btn btn-primary form-control" style="margin-top: 10px;height: 40px">
                        <p style="font-size: 20px">
                            Login
                        </p>
                    </a>
                    <a href="{{URL::to('/register')}}" class="btn btn-primary form-control" style="margin-top: 10px;height: 40px">
                        <p style="font-size: 20px">
                            Register
                        </p>
                    </a>

                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
