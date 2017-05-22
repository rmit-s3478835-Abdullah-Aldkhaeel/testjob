@extends('layouts.beforeContentPage')
@section('content')
    @if(!empty(session('deleteS1')))
        <div class=" alert alert-success col-md-4 col-md-push-1">
            <a href="#" class="close" data-dismiss="alert">
                &times;
            </a>
            <strong> {{session('deleteS1')}}</strong>
        </div>
    @endif
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-4 col-md-push-1" id="layoutAndColor" style="margin-top: 5px">
                @if($resumeCs)
                    <div class="container" style="margin-top: 80px">
                        <div class="starter-template" style="background-color: white">

                    <table class="table table-striped">
                        <tr >
                            <th>JobName</th>
                            <th>Company</th>
                            <th>JobDes</th>
                            <th>company_des</th>
                        </tr>
                        @foreach($resumeCs as $resumeC)
                            <tr >
                                <td style="width: 200px">
                                    <p><strong>{{$resumeC->job_name}}</strong></p>
                                    <a href="{{URL::to('/delete1',array('$id'=>$resumeC->id))}}" class="btn btn-primary">Delete This Apply</a>
                                </td>
                                <td>{{$resumeC->job_company}}</td>
                                <td>{{$resumeC->job_des}}</td>
                                <td>{{$resumeC->company_des}}</td>
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