@extends('layouts.beforeContentPage')
@section('content')

    @if(!empty(session('success1')))
        <div class=" alert alert-danger col-md-8 col-md-push-1">
            <a href="#" class="close" data-dismiss="alert">
                &times;
            </a>
            <strong> {{session('success1')}}</strong>
        </div>
    @endif
    @if(!empty(session('fail1')))
        <div class=" alert alert-danger col-md-8 col-md-push-1">
            <a href="#" class="close" data-dismiss="alert">
                &times;
            </a>
            <strong> {{session('fail1')}}</strong>
        </div>
    @endif


    <div class="container" style="margin-top: 100px" xmlns="http://www.w3.org/1999/html">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                   <strong><p style="font-size: 20px">{{$job->job_name}}</p></strong>
                    <p>{{$job->job_company}}</p>
                    <a href="{{URL::to('/applyJobC',array('$job'=>$job->id))}}" class="btn btn-success">Easy Apply</a>
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