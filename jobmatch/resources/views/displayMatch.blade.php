@extends('layouts.beforeContentPage')
@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 5px">
        <div class="row">

            <div class="container" style="margin-top: 80px">
                <div class="starter-template" style="background-color: white">
                    <table class="table table-striped">
                        <tr >
                            <th>Job_title</th>
                            <th>Job_description</th>
                            <th>Company</th>
                        </tr>
                        @foreach($userJobs as $userJob)
                            <tr >
                                <th>{{$userJob->job_title}}</th>
                                <td>{{$userJob->description}}</td>
                                <td>{{$userJob->company}}</td>
                            </tr>
                        @endforeach
                    </table>

                    <ul class="pagination" style="margin-left: 350px">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>

                </div>

            </div>


        </div>
        </div>
    </div>
@endsection