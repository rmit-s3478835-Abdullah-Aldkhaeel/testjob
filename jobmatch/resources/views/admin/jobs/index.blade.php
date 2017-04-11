@extends('layouts.admin')



@section('content')

    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Description</th>
            <th>Wage</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($jobs)

            @foreach($jobs as $user)
                <tr>
                    <td>{{$job->id}}</td>
                    <td><img height="50" src="{{$job->photo ? $job->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td><a href="{{route('admin.jobs.edit', $job->id)}}">{{$job->title}}</a></td>
                    <td>{{$job->description}}</td>
                    <td>{{$job->wage}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>



@stop