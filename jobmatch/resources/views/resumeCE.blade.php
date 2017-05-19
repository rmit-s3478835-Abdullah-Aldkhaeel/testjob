@extends('layouts.displayDes')
@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 5px">
        <div class="row">
            <div class="col-md-4 col-md-push-4" id="layoutAndColor" style="margin-top: 100px">
                @if($info)
                <div class="panel panel-danger">
                    <div class="panel-heading"><p class="text-center"><strong>{{$info}}</strong> </p></div>
                    <div class="panel-body">
                        <strong>Please fellow the these steps:</strong><br/>
                        <ul>
                            <li><strong>enter the jobSearching page</strong></li>
                            <li><strong>select the job categories</strong></li>
                            <li> <strong>find the jobs you are interested in</strong></li>
                            <li> <strong>apply the jobs</strong></li>
                        </ul>
                        <a href="{{URL('/myAccount')}}" class="btn btn-success form-control">return back</a>
                    </div>
                </div>
                    @endif

            </div>
        </div>
    </div>
@endsection