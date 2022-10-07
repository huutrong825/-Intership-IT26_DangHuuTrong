<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng nhập</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/layout_style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="login">

<div class="main">
  <h2 style="text-align:center">Đăng nhập</h2>
  <form action="/login" method='post'>
      @csrf
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      <p style="color:red" class="help is-danger">{{ $errors->first('email') }}</p>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      <p style="color:red" class="help is-danger">{{ $errors->first('password') }}</p>
    </div>
    <button style="display: block;text-align: center" type="submit" class="btn btn-primary">Login</button>
    <div>
        <label>Chưa có tài khoản <a href="/register">Tạo tài khoản</a></label>
    </div>
  </form>
</div>

</body>
</html>
