@extends('layouts.beforeContentPage')
@section('content')
    @if(Session::get('name'))
        <div class=" alert alert-danger col-md-8 col-md-push-1">
            <a href="#" class="close" data-dismiss="alert">
                &times;
            </a>
            <strong>   {{Session::get('name')}}</strong>
        </div>
    @endif
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 5px">
        <div class="row">
            <div class="col-md-10 col-md-push-1" id="layoutAndColor">
                <form action="matchResult" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading"   style="height: 350px">
                       <strong>JobMatching: </strong>

                        <button class="btn btn-success btn-lg" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="margin-left:100px">
                           Please select the skills >
                        </button>

                        <button class="btn btn-danger btn-lg" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"style="margin-left:100px">
                            Please select the interests >
                        </button>

                        <button class="btn btn-warning btn-lg" role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3" style="margin-left:100px">
                            Please select the Experience >
                        </button>

                        <div class="collapse" id="collapseExample">
                            <div class="well">
                        <div class="checkbox" style="color: #0c0c0c">
                            <label><strong>Skill:</strong></label>
                            <label>
                                <input type="checkbox" name="skill[]" value="programming" >programming
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="maintaining">maintaining
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="communication">communication
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="management">management
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="reading Newspaper">reading Newspaper
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="integratingCapacity">integratingCapacity
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="marketing capacity">marketing capacity
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="coordination">coordination
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="design">design
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="critical thinking">critical thinking
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="operating capacity">operating capacity
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="debug">debug
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="innovation">innovation
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="playing game">playing game
                            </label>
                            <label>
                                <input type="checkbox" name="skill[]" value="visiting Technical website">visiting Technical website
                            </label>
                        </div>
                            </div>
                        </div>

                        <div class="collapse" id="collapseExample1"  style="color: #0c0c0c">
                            <div class="well">
                                <div class="checkbox">
                                <label><strong>Interest:</strong></label>
                                <label>
                                    <input type="checkbox" name="interests[]" value="basketball" >basketball
                                </label>
                                <label>
                                    <input type="checkbox" name="interests[]" value="football">football
                                </label>
                                <label>
                                    <input type="checkbox" name="interests[]" value="tennis">tennis
                                </label>
                                <label>
                                    <input type="checkbox" name="interests[]" value="cricket">cricket
                                </label>
                                <label>
                                    <input type="checkbox" name="interests[]" value="table tennis">table tennis
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample3"  style="color: #0c0c0c">
                            <div class="well">
                        <select class="form-control" name="experience">
                            <option  value="zero">--0 year--</option>
                            <option  value="1year">--1 year--</option>
                            <option  value="2year">--2 years--</option>
                            <option  value="3year">--3 years--</option>
                            <option  value="more">--more than 3 years--</option>
                        </select>
                    </div>
                        </div>
                    </div>
                    <button  type="submit" class="btn btn-default form-control" style="height: 40px">
                        <p style="font-size: 20px">
                            MatchJob
                        </p>
                    </button>
                </div>

                </form>
            </div>
        </div>
    </div>
@endsection