<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC Tutorial with Bootstrap 5</title>
    <link href="<?= url ?>bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?= url ?>css/style.css" rel="stylesheet">
</head>
<body>
<div class="login-form">
    <div class="card">
        <div class="card-header bg-success">
            <div class="card-title text-center">Welcome</div>
        </div>
        <div class="card-body">
            <form action="<?= url ?>Users/login" method="post">
                <label>Username</label>
                <input name="username" class="form-control" required>
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
        </div>
        <div class="card-footer">
            <button name="login" type="submit" class="btn btn-success">Login</button>
        </div>
        </form>
    </div>
</div>
</body>
</html>