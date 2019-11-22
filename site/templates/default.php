<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap" rel="stylesheet">

        <!-- page CSS -->
        <link rel="stylesheet" href="assets\css\default.css">


        <title><?= $page->title() ?></title>
        <script src="https://kit.fontawesome.com/1ca334bc77.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="new_section">
            <div class="container">
                <div class="row">
                    <div class="col-6 offset-3">
                        <h1><?= $page->title() ?></h1>
                        <h4 id="h4_header"><?= $page->description()->kirbytext() ?></h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="img_placeholder"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_section">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <h2><?= $page->introduction_title()->kirbytext() ?></h2>
                        <h4><?= $page->introduction_subtitle()->kirbytext() ?></h4>
                        <p><?= $page->introduction_paragraph()->kirbytext() ?></p>
                    </div>
                    <div class="col-4 offset-1">
                        <h2><?= $page->introduction_tldr()->kirbytext() ?></h2>
                        <ul>
                            <li><?= $page->introduction_tldr_list()->kirbytext() ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_section">
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        <p><?= $page->text()->kirbytext() ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_section">
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        <h3>Download workshop bestanden</h3>
                    </div>
                </div>
                <div class="row">
                    <div class=col-4>
                        <button class="button_download">Presentatie</button>
                    </div>
                    <div class=col-4>
                        <button class="button_download">Voorbeeld uitwerking</button>
                    </div>
                    <div class=col-4>
                        <button class="button_download">Uitwerk template</button>
                    </div>
                    <div class=col-4>
                        <button class="button_download">Uitwerk handout</button>
                    </div>
                    <div class=col-4>
                        <button class="button_download">Onderbouwing oid</button>
                    </div>
                </div>
            </div>
        </section>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
