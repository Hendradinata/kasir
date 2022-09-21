<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up Aplikasi Kasir</title>
    <link rel="icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <style>
        html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background: #40BA2C;
}


.form-signin {
  width: 100%;
  max-width: 420px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
h1{
  font-family: Roboto;
  text-align: left;
  margin-top:40px;
}
h5{
  font-family: Roboto;
  text-align: left;
  margin-top:50px;
}
h6{
  font-family: Roboto;
  text-align: left;
  margin-bottom:50px;
}
p{
  font-family: Lato;
  text-align: left;
  margin-bottom:1px;
}

    </style>
</head>
<body class="text-center">
    
    <form class="form-signin" method="POST">
      
      <img class="mb-4" src="assets/images/ssp.png" alt="" width="400px" height="150px">
      <h1 style="font-weight:10000;"><b>Daftar</b></h1>
      <h6>Lengkapi form berikut untuk mendaftar </h6>
      <div class="form-group mb-2">
        <p><b> Username</b> <p>
        <label for="inputusername" class="sr-only">Username</label>
        <input type="text" id="inputusername" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>
      <div class="form-group mb-2">
        <p><b> Email</b> <p>
        <label for="inputemail" class="sr-only">Email</label>
        <input type="email" id="inputemail" name="email" class="form-control" placeholder="Email" required autofocus>
      </div>
      <div class="form-group mb-2">
        <p><b> Password</b> <p>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="form-group mb-2">
        <p><b> No Telp</b> <p>
        <label for="inputTelp" class="sr-only">Password</label>
        <input type="number" id="inputTelp" name="telp" class="form-control" placeholder="No Telp" required>
      </div>
      <button class="btn btn-primary btn-block" name="login" style="font-weight:700;" type="submit">Daftar</button>
      <h5>Sudah memiliki Akun? </h5>
      <button class="btn btn-basic btn-block" name="login" style="font-weight:700;" type="submit">Login</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>