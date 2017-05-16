@extends('layouts.myAccountPage')
@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-4 col-md-push-4" id="layoutAndColor">
                <h3>My Account - Job Seeker</h3>
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

                <form action="matchJob" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                <div class="checkbox" style="color: red">
                    <label><strong>Skill:</strong></label>
                    <label>
                        <input type="checkbox" name="skill" value="programming" >programming
                    </label>
                    <label>
                        <input type="checkbox" name="skill" value="maintaining">maintaining
                    </label>
                    <label>
                        <input type="checkbox" name="skill" value="communication">communication
                    </label>
                    <label>
                        <input type="checkbox" name="skill" value="coordination">coordination
                    </label>
                </div>

                <div class="checkbox" style="color: blue">
                    <label><strong>hobby:</strong></label>
                    <label>
                        <input type="checkbox" name="hobby" value="basketball" >basketball
                    </label>
                    <label>
                        <input type="checkbox" name="hobby" value="football">football
                    </label>
                    <label>
                        <input type="checkbox" name="hobby" value="tennis">tennis
                    </label>
                    <label>
                        <input type="checkbox" name="hobby" value="cricket">cricket
                    </label>
                    <label>
                        <input type="checkbox" name="hobby" value="tabletennis">table tennis
                    </label>
                </div>

                <div class="form-group">
                    <label><strong>Job experiences :</strong></label>
                    <select name="job" class="form-control">
                        <option  value="zero" selected="selected">--0 year--</option>
                        <option  value="1year">--1 year--</option>
                        <option  value="2year">--2 years--</option>
                        <option  value="3year">--3 years--</option>
                        <option  value="more">--more than 3 years--</option>
                    </select>
                </div>

                    <button  type="submit" class="btn btn-success form-control" style="margin-top: 10px;height: 40px">
                        <p style="font-size: 20px">
                            MatchJob
                        </p>
                    </button>
                </form>

                <a href="{{URL::to('/resume')}}" class="btn btn-danger form-control" style="margin-top: 10px;height: 40px">
                    <p style="font-size: 20px">
                    View jobs you've applied for
                    </p>
                </a>

                <br><br>
                <br>

            </div>
        </div>
    </div>
@endsection