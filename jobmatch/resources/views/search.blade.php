@extends('layouts.search')
@section('content')
    <div class="container">
        <div class="row">
            <br>
            <br>

            <div class="box">
                <br>
                <h3>Select Classification</h3>
                <br>
                <form  class="searchBox" action="search" method="post" style="text-align: center;">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <select name="job" class="form-control">
                            <option  value="computing">Computing</option>
                            <option  value="art">Art</option>
                            <option  value="sales">Sales</option>
                            <option  value="real estate">Real Estate</option>
                        </select>
                        <br></br>
                        <button type="submit" class="btn-btn-danger" >Search</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection
