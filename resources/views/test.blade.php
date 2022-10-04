<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="#" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Name User:</label>
                <input type="text" class="form-control" placeholder="Enter password" id="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>