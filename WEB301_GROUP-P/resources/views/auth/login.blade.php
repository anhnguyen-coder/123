
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HTML5 Login Form with validation Example</title>
    <style>
        body {
    background-color: #9f9da7;
    font-size: 1.6rem;
    font-family: "Open Sans", sans-serif;
    color: #2b3e51;
  }
  
  h2 {
    font-weight: 300;
    text-align: center;
  }
  
  p {
    position: relative;
  }
  
  a,
  a:link,
  a:visited,
  a:active {
    color: #3ca9e2;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }
  a:focus, a:hover,
  a:link:focus,
  a:link:hover,
  a:visited:focus,
  a:visited:hover,
  a:active:focus,
  a:active:hover {
    color: #329dd5;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }
  
  #login-form-wrap {
    background-color: #fff;
    width: 35%;
    margin: 30px auto;
    text-align: center;
    padding: 20px 0 0 0;
    border-radius: 4px;
    box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
  }
  
  #login-form {
    padding: 0 60px;
  }
  
  input {
    display: block;
    box-sizing: border-box;
    width: 100%;
    outline: none;
    height: 60px;
    line-height: 60px;
    border-radius: 4px;
  }
  
  input[type="password"],
  input[type="email"] {
    width: 100%;
    padding: 0 0 0 10px;
    margin: 0;
    color: #8a8b8e;
    border: 1px solid #c2c0ca;
    font-style: normal;
    font-size: 16px;
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    position: relative;
    display: inline-block;
    background: none;
  }
  input[type="password"]:focus,
  input[type="email"]:focus {
    border-color: #3ca9e2;
  }
  input[type="text"]:focus:invalid,
  input[type="email"]:focus:invalid {
    color: #cc1e2b;
    border-color: #cc1e2b;
  }
  input[type="password"]:valid ~ .validation,
  input[type="email"]:valid ~ .validation {
    display: block;
    border-color: #0C0;
  }
  input[type="password"]:valid ~ .validation span,
  input[type="email"]:valid ~ .validation span {
    background: #0C0;
    position: absolute;
    border-radius: 6px;
  }
  input[type="password"]:valid ~ .validation span:first-child,
  input[type="email"]:valid ~ .validation span:first-child {
    top: 30px;
    left: 14px;
    width: 20px;
    height: 3px;
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
  }
  input[type="password"]:valid ~ .validation span:last-child,
  input[type="email"]:valid ~ .validation span:last-child {
    top: 35px;
    left: 8px;
    width: 11px;
    height: 3px;
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
  }
  
  .validation {
    display: none;
    position: absolute;
    content: " ";
    height: 60px;
    width: 30px;
    right: 15px;
    top: 0px;
  }
  
  input[type="submit"] {
    border: none;
    display: block;
    background-color: #3ca9e2;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
    font-size: 18px;
    position: relative;
    display: inline-block;
    cursor: pointer;
    text-align: center;
  }
  input[type="submit"]:hover {
    background-color: #329dd5;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }
  
  #create-account-wrap {
    background-color: #eeedf1;
    color: #8a8b8e;
    font-size: 14px;
    width: 100%;
    padding: 10px 0;
    border-radius: 0 0 4px 4px;
  }
    </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form action="{{ route('login.post') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-6">
            <input type="email" id="email_address" class="form-control" name="email" placeholder="Email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
    </div>

    <div class="col-md-6 offset-md-4">
        <input type="submit" id="login" value="Login">
    </div>
</form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="./registration">Create Account</a><p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>
