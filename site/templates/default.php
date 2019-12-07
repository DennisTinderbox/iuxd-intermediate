<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fontawesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- page CSS -->
        <link rel="stylesheet" href="assets\css\default.css">

        <title><?= $page->title() ?></title>
    </head>
    <body class="smooth-scroll">
        <section class="workflowHeader">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2">
                        <h1><?= $page->title() ?></h1>
                        <?= $page->description()->kirbytext() ?>
                    </div>
                </div>
                <div class="row">
                  <div class="col-12 center">
                    <a id="startButton" class="btn btn-xl btn-info" href="#startDiv" role="button">Let's go! <i class="fa fa-rocket"></i></a>
                  </div>
                </div>
            </div>
        </section>

        <section class="intro" id="startDiv">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <?= $page->introduction_title()->kirbytext() ?>
                        <?= $page->introduction_subtitle()->kirbytext() ?>
                        <?= $page->introduction_paragraph()->kirbytext() ?>
                    </div>
                    <div class="col-12 col-md-4 offset-md-1">
                      <div class="card tldr">
                        <div class="card-body">
                          <?= $page->introduction_tldr()->kirbytext() ?>
                          <?= $page->introduction_tldr_list()->kirbytext() ?>
                          <a id="skipLeren" class="btn btn-info" href="#pipeline" role="button"><i class="fa fa-forward"></i> Skip uitleg</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="new_section uitleg_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                      <div class="uitleg">
                        <nav id="navbar-example2" class="navbar sticky-top">
                          <ul class="nav nav-pills justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link active" href="#een">Voorbereiding</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#twee">Het juiste gereedschap kiezen</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#drie">Je gereedschapskist</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#vier">Gereedschap koppelen</a>
                            </li>
                          </ul>
                        </nav>
                        <div data-spy="scroll" data-target="#navbar-example2" data-offset="20" class="scrollspy">
                          <hr id="een">
                          <?= $page->voorbereiding_title()->kirbytext() ?>
                          <?= $page->voorbereiding_paragraph()->kirbytext() ?>
                          <hr id="twee">
                          <?= $page->kiezen_title()->kirbytext() ?>
                          <?= $page->kiezen_paragraph()->kirbytext() ?>
                          <hr id="drie">
                          <?= $page->toolkit_title()->kirbytext() ?>
                          <?= $page->toolkit_paragraph()->kirbytext() ?>
                          <hr id="vier">
                          <?= $page->koppelen_title()->kirbytext() ?>
                          <?= $page->koppelen_paragraph()->kirbytext() ?>
                          <div class="col-12 center">
                            <a id="startButton" class="btn btn-xl btn-primary" href="#pipeline" role="button">Pipelines <i class="fa fa-arrow-down"></i></a>
                            <br><br>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_section" id="pipeline">
            <div class="container">

              <div class="row">
                  <div class="col-12 col-md-7">
                      <?= $page->pipelining_title()->kirbytext() ?>
                      <?= $page->pipelining_subtitle()->kirbytext() ?>
                      <?= $page->pipelining_paragraph()->kirbytext() ?>
                  </div>
                  <div class="col-12 col-md-4 offset-md-1">
                    <div class="card tldr">
                      <div class="card-body">
                        <?= $page->pipelining_tldr()->kirbytext() ?>
                        <?= $page->pipelining_tldr_list()->kirbytext() ?>
                        <a id="skipPipelines" class="btn btn-info" href="#opdracht" role="button"><i class="fa fa-forward"></i> Skip uitleg</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 tekst-small">
                    <?= $page->pipelining_uitleg_title()->kirbytext() ?>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="..." alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                  </div>
                  <style>
                      .carousel-item {
                          background: purple;
                      }
                      .d-block {
                          background-color: green;
                      }
                  </style>
              </div>

                <div class="row">
                    <div class="col-12">
                      <h3></h3>
                      <p></p>
                        <hr>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_section" id="opdracht">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                      <h3><?= $page->opdracht_title()->kirbytext() ?></h3>
                    </div>
                    <div class="col">
                      <div class="card tldr">
                        <div class="card-header">
                          Uitleg
                        </div>
                        <div class="card-body">
                          <?= $page->opdracht_paragraph()->kirbytext() ?>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card tldr">
                        <div class="card-header">
                          Stappen
                        </div>
                        <div class="card-body">
                          <?= $page->opdracht_stappen()->kirbytext() ?>
                          <?= $page->opdracht_stappen_list()->kirbytext() ?>
                          <a id="skipOpdracht" class="btn btn-info" href="#figmastuk" role="button"><i class="fa fa-forward"></i> Naar figma</a>
                        </div>
                      </div>
                      <div class="card tldr">
                        <div class="card-header">
                          Tutorial
                        </div>
                        <div class="card-body youtube">
                          <?= $page->tutorial()->kirbytext() ?>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row" id="figmastuk">
                  <hr>
                  <div class="col-12">
                    <h3>Probeer het zelf:</h3>
                    <iframe style="border: none;" width="100%" height="700" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2F9LQEmwxWFgX235C8N883lv%2FWorkshop-Workflow-Data-Template%3Fnode-id%3D0%253A1" allowfullscreen></iframe>
                  </div>
                  <hr>
                </div>
            </div>
        </section>

        <section class="new_section" id="toepassing">
            <div class="container">
                <div class="row">
                    <div class="col-12 tekst-small">
                      <h3><?= $page->toepassing_title()->kirbytext() ?></h3>
                      <p><?= $page->toepassing_paragraph()->kirbytext() ?></p>
                    </div>
                    <hr>
                </div>
            </div>
        </section>

        <section class="new_section">
            <div class="container">
                <div class="row">
                <div class="col-12 col-md-8">
                        <h3>Download workshop bestanden</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="../../assets/documents/[Workflow_Presentatie]_Workshop_ van_Heest_Michel_0908582_Klein_Dennis_0927931.pdf" download>
                          <button class="button_download">Presentatie</button>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                      <a href="../../assets/documents/[Workflow_Voorbeelduitwerking]_Workshop_ van_Heest_Michel_0908582_Klein_Dennis_0927931.fig" download>
                        <button class="button_download">Voorbeeld uitwerking</button>
                      </a>
                    </div>
                    <div class="col-12 col-md-4">
                      <a href="../../assets/documents/[Workflow_Opdracht_Template]_Workshop_ van_Heest_Michel_0908582_Klein_Dennis_0927931.fig" download>
                        <button class="button_download">Uitwerk template</button>
                      </a>
                    </div>
                    <div class="col-12 col-md-4">
                      <a href="../../assets/documents/[Workflow_Handout]_Workshop_ van_Heest_Michel_0908582_Klein_Dennis_0927931.pdf" download>
                        <button class="button_download">Uitwerk handout</button>
                      </a>
                    </div>
                    <div class="col-12 col-md-4">
                      <a href="../../assets/documents/[Workflow_Onderbouwing_Onderzoek]_Workshop_ van_Heest_Michel_0908582_Klein_Dennis_0927931.pdf" download>
                        <button class="button_download">Onderbouwing oid</button>
                      </a>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <section class="new_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h3>Bronnen</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <p><?= $page->bronnen()->kirbytext() ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="assets\js\smooth-scrolling.js"></script>
    </body>
</html>
