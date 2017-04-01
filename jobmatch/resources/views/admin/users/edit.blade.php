@extends('layouts.admin')



@section('content')

    <h1>Edit Users</h1>

    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

    </div>


    <div class="row">

        {!! Form::model($user,['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}


            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', [''=>'Choose Options'] + $categories , null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), 0 , ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>



            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>

    <div class="row">

        @include('includes.form_error')

    </div>

@stop