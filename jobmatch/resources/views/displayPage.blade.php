@extends('layouts.displayPage')
@section('content')

    <div class="container" style="margin-top: 80px">
        <div class="starter-template" style="background-color: white">
            <table class="table table-striped">
            <tr >
                <th>Hot Ranking</th>
                <th>JobName</th>
                <th>Company</th>
            </tr>
               @foreach($jobs as $job)
                <tr >
                    <th>{{$job->job_rank}}</th>
                    <td><a href="{{URL::to('/displayDes' ,array('job'=>$job))}}">{{$job->job_name}}</a></td>
                    <td>{{$job->job_company}}</td>
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

@endsection