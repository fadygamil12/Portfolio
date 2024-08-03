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
    <form action="{{route('addskill')}}" method="post">
        @csrf
        <label for="name"> Name: </label>
        <input name="name" type="text">
        <label for="level"> Level: </label>
        <label id="rangeValLabel"></label>
        <input name="level" type="range" min="10" max="100" step="10" oninput="document.getElementById('rangeValLabel').innerHTML = this.value;">
        <select name="track" id="track">
            <option value="Web Development"> Web Development </option>
            <option value="Data Analysis"> Data Analysis </option>
        </select>
        <button type="submit">submit</button>
    </form>
</body>
</html>