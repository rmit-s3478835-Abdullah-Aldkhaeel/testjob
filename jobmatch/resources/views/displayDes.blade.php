@extends('layouts.displayDes')
@section('content')

    <div class="container" style="margin-top: 60px" xmlns="http://www.w3.org/1999/html">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                   <strong><p style="font-size: 20px">{{$job->job_name}}</p></strong>
                    <p>{{$job->job_company}}</p>
                    <button class="btn btn-danger">SAVE</button>
                    <button class="btn btn-success">EASY APPLY</button>
                </div>
            </div>

            <div class="panel panel-default" style="margin-top: 20px">
                <div class="panel-body">
                    <p style="font-size: 15px"><strong>Job Description</strong></p>
                    <p>
                        {{$job->job_des}}
                    </p>
                </div>
            </div>

            <div class="panel panel-default" style="margin-top: 20px">
                <div class="panel-body">
                    <p style="font-size: 15px"><strong>About Our Company</strong></p>
                    <p>
                     {{$job->company_des}}
                    </p>
                </div>
            </div>

        </div>
    </div>

@endsection