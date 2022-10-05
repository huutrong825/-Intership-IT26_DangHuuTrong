<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="style/layout_style.css">
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">RiverCraneVietNam</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="/Product">Sản phẩm</a></li>
                <li><a href="/Customer">Khách hàng</a></li>
                <li><a href="/User">Users</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="Login.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
        </nav>
        <div class="container">
        @yield('content')
        </div>
    </body>
</html>