<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= $_SERVER['BASE_URI']?>/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
    </style>
    <title>Pokédex</title>
</head>

<body>

    <!-- header -->
    <header>
        <div class="container-fluid p-0">
            <div>
                <div class="row pb-5 pt-5">
                    <div class="col-lg-12 mx-auto">
                        <nav class="navbar navbar-light bord-arrondi_hearder bg-color-nav_header">
                            <div class="container-fluid">
                                <h3 class="text-color-nav_hearder">Pokédex</h3>
                                <div class="d-flex">
                                    <h3><a class="nav-link text-color-nav_hearder"
                                            href="<?= $router->generate('home') ?>">Liste</a></h3>
                                    <h3><a class="nav-link text-color-nav_hearder"
                                            href="<?= $router->generate('type') ?>">Type</a></h3>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header -->