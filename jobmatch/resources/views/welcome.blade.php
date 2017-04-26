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
                    <a href="{{ url('/login') }}" class="button">Log In</a><br>
                    <a href="{{ url('/register') }}" class="button">Register as Job Seejer</a>
                    <a href="{{ url('/register') }}" class="button">Register as Employer</a>

                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
