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
<main class="container-fluid">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?= url?>img/cit_logo.png" width="40"> NC CIT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= url?>Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url?>Students">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url?>Products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url?>Users">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url?>Users/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>