<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="{{url('public')}}/dist/css/login.css">
</head>
<body>
  <form action="{{url('beranda')}}" class="box" method="get">
    <h1>DM Watcher</h1>
    <input type="text" name="" placeholder="Username">
    <input type="password" name="" placeholder="Password">
    <input type="submit" name="" value="Login">
    <p class="forget">Forget Password ? <a href="#" target="_blank">Klik Disini</a></p>
    <p class="forget">Register / Buat Akun Baru <a href="{{url('register')}}" target="_blank">Klik Disini</a></p>
  </form> 
</body>
</html>				