<?php
include "settings.php";
$title = $_GET['title'];
$title = rawurlencode($title);
$results = animeSearch($title);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - NimeSearch</title>
    <meta name="description" content="Cari Anime">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=a771b732ae1741b5fa481f15fcbaa313">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css?h=38a515b6b30123300b3619cce6411cec">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 50px;">
        <div class="container"><a class="navbar-brand logo" href="#">NimeSearch</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page" style="padding-top: 50px;">
        <!-- Start: About Us -->
        <section class="clean-block about-us">
            <div class="container" style="padding-top: 15px;padding-bottom: 15px;">
                <div class="row">
                    <?php
                    if(!empty($results->results)){
                        foreach ($results->results as $res) {
                            ?>

                            <div class="col-sm-6 col-lg-4" style="margin-top: 15px;">
                                <div class="card clean-card text-center"><a href="#"><img class="card-img-top w-100 d-block"
                                                                              src="<?php echo $res->image_url?>"></a>
                                    <div class="card-body info">
                                        <h4 class="card-title"><?php echo $res->title?></h4>
                                        <p class="card-text"><?php echo $res->synopsis?></p>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    }
                    else{
                            ?>
                    <div class="col-sm-6 col-lg-4" style="margin-top: 15px;">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                                                      src="">
                            <div class="card-body info">
                                <h4 class="card-title">Tidak Ditemukan</h4>
                                <p class="card-text">-</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- End: About Us -->
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>© 2019 kyrozyn.codes<br>Dibangun menggunakan<br><a href="https://jikan.moe">JikanAPI</a></p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js?h=975b2635c9a06eae9f47d6cae8158a12"></script>
    <script src="assets/js/theme.js?h=417b03f5f0a4f9f27f8c248f532eb5af"></script>
</body>

</html>