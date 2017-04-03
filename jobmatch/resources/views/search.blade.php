<html>
<head>
    <title>afterSignIn</title>
    <link rel="stylesheet" href="{{ URL::asset('css/searchCss.css') }}">
<body>
@include('layouts.templateHead')
<div class="div3">
JobSearch
</div>
<div class="div4">
<form action="search" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <table>
<tr>
    <td>
        Find job related to:
        <select name="job">
            <option value="Accout">
                Account
            </option>
            <option value="Computing">
                Computing
            </option>
            <option value="Art">
                Art
            </option>
            <option value="marketing">
                marketing
            </option>
        </select>
    </td>
</tr>
     <td >
    <input type="submit" value="Search" width="100px"/>
     </td>
    </table>
</form>
</div>
@include('layouts.templateBottom')
</body>
<head/>
</html>
