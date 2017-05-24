@extends('layouts.beforeContentPage')
@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-4 col-md-push-4" id="layoutAndColor">
                <h3>My Account - Employer</h3>
                <hr>
                <p color="black">Create a new job</p>

                <form action="createJob" method="post">
                    <table>
                        <tr>
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <td>Job Title : </td>
                            <td><input type="text" name="job_name"></td>
                        </tr>
                        <tr>
                            <td>Job Rank : </td>
                            <td><input type="text" name="job_rank"></td>
                        </tr>
                        <tr>
                            <td>Job Company : </td>
                            <td><input type="text" name="job_company"></td>
                        </tr>
                        <tr>
                            <td>Job Desc : </td>
                            <td><input type="text" name="job_des"></td>
                        </tr>
                        <tr>
                            <td>Company Des : </td>
                            <td><input type="text" name="company_des"></td>
                        </tr>
                        <tr>
                            <td>Job Category : </td>
                            <td><input type="text" name="jobcategory_id"></td>
                        </tr>
                        <tr>
                                <td><input type="submit" name=submit" value="Create"></td>
                        </tr>
                    </table>
                </form>
                <br>
                <br>

            </div>
        </div>
    </div>
@endsection