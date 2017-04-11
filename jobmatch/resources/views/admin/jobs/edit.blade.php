@extends('layouts.admin')



@section('content')

    <h1>Edit Jobs</h1>

    {!! Form::model($job['method'=>'PATCH', 'action'=> 'AdminJobsController@store','files'=>true]) !!}


    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control'])!!}
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
        {!! Form::submit('Update Job', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {{--@include('includes.form_error')--}}

@stop