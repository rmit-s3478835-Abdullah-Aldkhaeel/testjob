@extends('layouts.beforeContentPage')
@section('content')
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-push-4" id="layoutAndColor">
                <h3>My Account</h3>
                <hr>
                <p color="black">Edit Password or Email if you want</p>
                <form action="editProfile" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <div class="input-group" id="layoutAndColor">
                        <span class="input-group-addon" style="color:black">Password</span>
                        <input type="text"  class="form-control" name="pwd"/>
                    </div>

                    <div class="input-group" id="layoutAndColor">
                        <span class="input-group-addon" style="color:black">Email</span>
                        <input type="text"  class="form-control" name="email"/>
                    </div>

                    <button  type="submit" class="btn btn-primary form-control" style="margin-top: 20px;height: 40px">
                        <p style="font-size: 20px">
                        Confirm
                        </p>
                    </button>
                    <hr>
                </form>

                <a href="{{URL::to('/resume')}}" class="btn btn-danger form-control" style="height: 40px">
                    <p style="font-size: 20px">
                    View jobs you've applied for
                    </p>
                </a>


            </div>
        </div>
    </div>
@endsection