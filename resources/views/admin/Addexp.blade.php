<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(Session::has('sucsess'))
        <span>{{Session::get('sucsess')}}</span>
    @endif
    <form action="{{route('addexp')}}" method="post">
        @csrf
        <label for="startYear"> startYear: </label>
        <input name="startYear" type="number">
        <label for="endYear"> endYear: </label>
        <input name="endYear" type="number">
        <label for="position"> position: </label>
        <input name="position" type="text">
        <label for="organization"> organization: </label>
        <input name="organization" type="text">
        <label for="description"> description: </label>
        <input name="description" type="longtext">

        <button type="submit">submit</button>
    </form>
</body>
</html>