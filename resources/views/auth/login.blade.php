<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Login | {{ config('app.name') }}</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{url('/backend/images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{url('/backend/images/favicon.png')}}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{url('/backend/images/favicon.png')}}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{url('/backend/images/favicon.png')}}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{url('/backend/images/favicon.png')}}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{url('/backend/images/favicon.png')}}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{url('/backend/images/favicon.png')}}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{url('/backend/images/favicon.png')}}" sizes="152x152">
        <link rel="apple-touch-icon" href="{{url('/backend/images/favicon.png')}}" sizes="180x180">
        <!-- END Icons -->

        <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url(/new/img/loginbg.jpg);
      background-size: cover;
      background-attachment: fixed;
    }

    /* align items center vertically and horizontally  */
    .container {
      display: flex;
      justify-content: center;
      align-items: center !important;
      height: 100vh;
    }

    .form {
      border-radius: 5px !important;
      width: 370px;
      padding: 5px;
      height: 500px;
      background-color: rgba(90, 90, 90, 0.75);
      box-shadow: 0 5px 30px black;
    }

    .btn button {
      padding: 3px;
      margin: 30px 0px 40px 30px;
      border-style: none;
      background-color: transparent;
      color: beige;
      font-size: 18px;
      font-weight: 550;
    }

    .formGroup {
      display: flex;
      justify-content: center;
    }

    .formGroup input {
      border: none;
      width: 80%;
      border-bottom: 2px solid white;
      padding: 10px;
      margin-bottom: 20px;
      font-size: 14px;
      font-weight: bold;
      background-color: white;
      border-radius: 5px;
      border-color: black;
      color: black;
    }

    input:focus {
      outline: none !important;
      border-bottom: 2px solid rgb(91, 243, 131);
      font-size: 17px;
      font-weight: bold;
      color: black;
    }

    ::placeholder {
      color: white;
    }

    .checkBox {
      display: flex;
      justify-content: center;
      margin: 16px !important;
    }

    #checkbox {
      margin-right: 10px;
      height: 15px;
      width: 15px;
    }

    .text {
      color: rgb(199, 197, 197);
      font-size: 13px;
    }

    .btn2 {
      padding: 10px;
      width: 150px;
      border-radius: 20px;
      background-color: rgb(10, 136, 43);
      border-style: none;
      color: white;
      font-weight: 600;
    }

    .btn2:hover {
      background-color: rgba(10, 136, 43, 0.95);
    }

    .btn button:hover {
      border-bottom: 2px solid rgb(91, 243, 131);
    }

    /* hide signup form */


    /* Login form code */
    .login {
      margin-top: 40px;
    }

    .login .checkBox {
      margin-top: 30px !important;
    }

    ::placeholder {
      color: black;
      opacity: 1;
      /* Firefox */
    }

    :-ms-input-placeholder {
      /* Internet Explorer 10-11 */
      color: black;
    }

    ::-ms-input-placeholder {
      /* Microsoft Edge */
      color: black;
    }
  </style>
    </head>
    <body>
  <div class="container">
    <div class="form">
      <div class="btn">

      </div>

      <!------ Login Form -------- -->
      <form class="login" action="{{ url('/login') }}" method="post">
        @csrf
        <img class="img-fluid" src="{{url('/new/img/forMoreWhite.png')}}" style="max-width: 100%;" alt="Logo Footer">

        <br />
        <br />
        @if(session()->has('message'))
            <div class="alert alert-success">
                <i class="fa fa-hand-o-right" aria-hidden="true"></i> {{ session()->get('message') }}
            </div>
        @endif 
        <h1 style="text-align: center;color: white;">Business Panel</p>
          <br />
          <div class="formGroup">
          <input type="email" placeholder="Login Email" name="email" required autocomplete="off" value="{{ old('email') }}">
            <!-- @if ($errors->has('email'))
                <span class="text-sm text-danger">{{ $errors->first('email') }}</span>
            @endif -->
          </div>
          <div class="formGroup">
            <input type="password" id="password" name="password" placeholder="Password" required autocomplete="off">
            <!-- @if ($errors->has('password'))
                <span class="text-sm text-danger">{{ $errors->first('password') }}</span>
            @endif -->

          </div>
          <div class="formGroup">
            @if ($errors->has('email'))
                <p class="" style="color:red;font-size:14px !important;">{{ $errors->first('email') }}</p>
            @endif
            @if ($errors->has('password'))
                <p class="" style="color:red;font-size:14px !important;">{{ $errors->first('password') }}</p>
            @endif

          </div>
          <!-- <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">Keep me signed in on this device</span>
        </div> -->
          <div class="formGroup">
            <button type="submit" class="btn2">Sign In</button>
          </div>
          
      </form>

    </div>
  </div>

  <script>
    /* Show login form on button click */

    $('.loginBtn').click(function () {
      $('.login').show();
      $('.signUp').hide();
      /* border bottom on button click */
      $('.loginBtn').css({ 'border-bottom': '2px solid #ff4141' });
      /* remove border after click */
      $('.signUpBtn').css({ 'border-style': 'none' });
    });


    /* Show sign Up form on button click */

    $('.signUpBtn').click(function () {
      $('.login').hide();
      $('.signUp').show();
      /* border bottom on button click */
      $('.signUpBtn').css({ 'border-bottom': '2px solid #ff4141' });
      /* remove border after click */
      $('.loginBtn').css({ 'border-style': 'none' });
    });
</script>

</body>
</html>
<script>
    /* Show login form on button click */

    $('.loginBtn').click(function () {
      $('.login').show();
      $('.signUp').hide();
      /* border bottom on button click */
      $('.loginBtn').css({ 'border-bottom': '2px solid #ff4141' });
      /* remove border after click */
      $('.signUpBtn').css({ 'border-style': 'none' });
    });


    /* Show sign Up form on button click */

    $('.signUpBtn').click(function () {
      $('.login').hide();
      $('.signUp').show();
      /* border bottom on button click */
      $('.signUpBtn').css({ 'border-bottom': '2px solid #ff4141' });
      /* remove border after click */
      $('.loginBtn').css({ 'border-style': 'none' });
    });</script>