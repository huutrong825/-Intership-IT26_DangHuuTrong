<!doctype html>
<html>
<head>
    <title>Login Form</title>
</head>

<body>
    <form method="post" action="/admin/create">
        @csrf
        <p>Title<br>
            <input type="text" name="title" value=""></p>

        <p>Description<br>
            <textarea rows="5" cols="40" name="description"></textarea></p>

        <p><button type="submit">Submit</button></p>
    </form>
</body>
</html>