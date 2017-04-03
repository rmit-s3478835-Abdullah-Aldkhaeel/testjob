<html>
<head>
    <title>afterSignIn</title>
    <link rel="stylesheet" href="{{ URL::asset('css/MyAccountCss.css') }}">
<body>
@include('layouts.templateHead')

<div class="div3">
My Account
</div>
<div class="div4">
    <p>Edit Profile</p>
</div>
<div class="divHr"></div>
<div class="divForm">
    <div class="desc">Job description you've posted:<span>{{--extract the data from database--}}</span></div>
    <form action="editProfile" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <table>
                <tr>
                    <td>userName:</td>
                    <td><input type="text" name="username" value="{{--database--}}"/></td>
                </tr>
                <tr>
                    <td>passWord:</td>
                    <td><input type="text" name="passWord" value="{{--database--}}"/></td>
                </tr>
                <tr>
                    <td>eMail:</td>
                    <td><input type="text" name="eMail" value="{{--database--}}"/></td>
                </tr>
                <tr>
                    <td>personalDescription:</td>
                    <td><textarea name="pdescription" rows="3" cols="19" value="{{--database--}}"></textarea></td>
                </tr>
                <tr>
                    <td>jobDescription:</td>
                    <td><textarea name="jdescription" rows="3" cols="19" value="{{--database--}}"></textarea></td>
                </tr>
                <tr>
                    <td>submit</td>
                    <td><input type="submit" name="submit" value="edit"/></td>
                </tr>
            </table>
    </form>
</div>
<div class="divHr"></div>
<div class="desc">
    Number of the resumes you have received:<span>{{--database--}}</span></br>
    <input type="button" onclick="resume()" name="resume" value="view resume" />
</div>
@include('layouts.templateBottom')
</body>
<head/>
</html>
