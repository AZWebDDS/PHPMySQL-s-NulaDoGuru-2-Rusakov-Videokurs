<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Проверочный файл index.html с Bootstrap 4</title>

    <!-- Live Reload JS для Sublime Text 3-->
    <!--<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>-->


</head>

<body>

<!--TODOs-->
<!--TODO Подключить Git к PhpStorm-->

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>
</div>

<div class="container-fluid">
    <div class="jumbotron">

        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">Это тестовый файл <b>index.html</b> с подключенным Bootstrap 4</p>
        <hr class="m-y-md">
        <div class="col-lg-12">
            <div class="container">
                <!--
                TODO Окружить кнопки margin 10px
                -->
                <div class="row-fluid justify-content-lg-around justify-content-sm-center">
                    <a class="mt-sm-3 mb-sm-3 col-lg-4 col-sm mb-2 btn btn-primary" href="https://getbootstrap.com/"
                       target="_blank" role="button">Подробнее о Bootstrap 4 (eng)</a>
                    <a class="mt-sm-3 mb-sm-3 col-lg-4 col-sm btn btn-primary" href="http://bootstrap-4.ru"
                       target="_blank" role="button">Подробнее о Bootstrap 4 (рус)</a>
                </div>
            </div>

            <p class="alert alert-warning mt-3">
                NB: Кнопки и выпадающее меню должны работать.
                <br>Для Sublime Text 3: на период разработки подключен Live Reload JS. После окончания разработки этот
                JS нужно отключить.
            </p>
        </div>
    </div>
</div>

<div class="container-fluid">
    sdASDAFaF
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


</body>

</html>