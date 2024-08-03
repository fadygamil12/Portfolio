<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href="{{asset("css/open-iconic-bootstrap.min.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if(Session::has('fail'))
        <span>{{Session::get('fail')}}</span>
    @endif
    <div class="row w-100 p-0">
    <div class="col-8 p-5 m-auto align-self-center">
    <form method="post" action="{{route('login')}}">
        @csrf
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" name="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" name="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

  </div>

  <!-- Submit button -->
  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
</form>
    </div>
    </div>
</body>
</html>