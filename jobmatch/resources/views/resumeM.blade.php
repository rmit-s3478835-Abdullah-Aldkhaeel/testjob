@extends('layouts.displayDes')
@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 5px">
        <div class="row">
            <div class="col-md-4 col-md-push-1" id="layoutAndColor" style="margin-top: 100px">
                @if($resumeMs)
                    <div class="container" style="margin-top: 80px">
                        <div class="starter-template" style="background-color: white">

                            <table class="table table-striped">
                                <tr >
                                    <th>JobName</th>
                                    <th>Company</th>
                                    <th>JobDes</th>
                                </tr>
                                @foreach($resumeMs as $resumeMs)
                                    <tr >
                                        <td style="width: 200px"><strong>{{$resumeMs->job_title}}</strong></td>
                                        <td>{{$resumeMs->company}}</td>
                                        <td>{{$resumeMs->description}}</td>
                                    </tr>
                                @endforeach
                            </table>
                            @endif
                            <a href="{{URL('/myAccount')}}" class="btn btn-success form-control">return back</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection