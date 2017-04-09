@extends('layouts.beforeContentPage')
@section('content')
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-push-4" id="layoutAndColor">
                <p style=" color: white">Please edit your personal information:</p>
                <form action="editProfile" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="input-group">
                            <span class="input-group-addon" style="color:black">username</span>
                            <input type="text"  class="form-control" name="username"/>
                        </div>

                    <div class="input-group" id="layoutAndColor">
                        <span class="input-group-addon" style="color:black">password</span>
                        <input type="text"  class="form-control" name="pwd"/>
                    </div>

                    <div class="input-group" id="layoutAndColor">
                        <span class="input-group-addon" style="color:black">reset</span>
                        <input type="text"  class="form-control" name="reset"/>
                    </div>

                    <div class="input-group" id="layoutAndColor">
                        <span class="input-group-addon" style="color:black">email</span>
                        <input type="text"  class="form-control" name="email"/>
                    </div>

                    <div class="input-group" id="layoutAndColor">
                        <span class="input-group-addon" style="color:black">personalDescription</span>
                        <textarea rows="3" cols="5" class="form-control" name="personalDescription"></textarea>
                    </div>
                    <button  type="submit" class="btn btn-primary form-control" style="margin-top: 20px;height: 40px">
                        <p style="font-size: 20px">
                        edit
                        </p>
                    </button>
                </form>
                <p style="margin-top: 20px;color: white">
                    please enter the button if you want to check your resume:
                </p>
                <a href="{{URL::to('/resume')}}" class="btn btn-danger form-control" style="height: 40px">
                    <p style="font-size: 20px">
                    view resume
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection