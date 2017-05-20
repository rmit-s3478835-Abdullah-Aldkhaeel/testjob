@extends('layouts.myAccountPage')
@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 5px">
        <div class="row">
            <div class="col-md-4 col-md-push-4" id="layoutAndColor">
                <h3>Edit Profile</h3>
                <hr>
                    @if($errors)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li><strong>{{$error}}</strong></li>
                        @endforeach
                    </ul>
                    @endif
                <form action="editProfile" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="input-group" id="layoutAndColor">
                        <span class="input-group-addon" style="color:black">Password</span>
                        <input type="password"  class="form-control" name="pwd" value=" {{$userInfo['userP']}}"/>
                    </div>
                    <div class="input-group" id="layoutAndColor">
                        <span class="input-group-addon" style="color:black">Email</span>
                        <input type="text"  class="form-control" name="email" value=" {{$userInfo['usere']}}"/>
                    </div>
                    <button  type="submit" class="btn btn-primary form-control" style="margin-top: 20px;height: 40px">
                        <p style="font-size: 20px">
                        Confirm
                        </p>
                    </button>
                    <hr>
                </form>
                <a href="{{URL::to('/resume')}}" class="btn btn-danger form-control" style="margin-top: 10px;height: 40px">
                    <p style="font-size: 20px">
                        View jobs you've applied from search
                    </p>
                </a>

                <a href="{{URL::to('/resume2')}}" class="btn btn-success form-control" style="margin-top: 10px;height: 40px">
                    <p style="font-size: 20px">
                        View jobs you've applied from matching
                    </p>
                </a>
                <br><br>
                <br>
                <br><br>
                <br>
            </div>
        </div>
    </div>
@endsection