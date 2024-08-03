<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/open-iconic-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("css/aos.css")}}">
    <link rel="stylesheet" href="{{asset("css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("css/icomoon.css")}}">
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    @if(Session::has('sucsess'))
        <span>{{Session::get('sucsess')}}</span>
    @endif
    <form action="/admin/update/{{$exp->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group col-8 justify-content-center">
        <div>
            <label for="startYear"> startYear: </label>
            <input name="startYear" value="{{$exp->startYear}}" type="number">
        </div>
        <div>
            <label for="endYear"> endYear: </label>
            <input name="endYear" value="{{$exp->endYear}}" type="number">
        </div>
        <div>
            <label for="position"> position: </label>
            <input name="position" value="{{$exp->position}}" type="text">
        </div>
        <div>
            <label for="organization"> organization: </label>
            <input name="organization" value="{{$exp->organization}}" type="text">
        </div>
        <div>
            <label for="description"> description: </label>
            <textarea name="description" type="longtext" rows=20 cols=50> {{$exp->description}} </textarea>
        </div>
        
        </div>

        <button type="submit">submit</button>
    </form>
</body>
</html>