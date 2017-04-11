@extends('layouts.admin')



@section('content')

    <h1>Create Jobs</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminJobsController@store','files'=>true]) !!}


    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null,['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('wage', 'Wage:') !!}
        {!! Form::number('wage', null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::submit('Create Job', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {{--@include('includes.form_error')--}}

@stop