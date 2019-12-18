<?php
    include "settings.php";
    $id = $_GET['id'];
    if(!empty($id)){
        $results = detailAnime($id);
    }
    else{
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detail <?php echo $results->title?> - NimeSearch</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6" ><img src="<?php echo $results->image_url?>" width="100%"></div>
                            <div class="col-md-6">
                                <div class="info">
                                    <h3><?php echo $results->title?></h3>
                                    <h6><?php echo $results->type?> : <?php echo $results->duration?></h6>
                                    <h6><b><?php echo $results->premiered?></b></h6>
                                    <h6><?php echo $results->rating?></h6>
                                    <h6><?php
                                        $k = "";
                                        $len = count($results->genres);
                                        foreach($results->genres as $i => $r){
                                            $ty = ", ";
                                            if ($i == $len - 1) {
                                                $ty="";
                                            }
                                            $k=$k.$r->name.$ty;
                                        }
                                    echo $k;?></h6>
                                    <div class="price">
                                        <h3><?php echo $results->score?>★</h3>
                                    </div>
                                    <div class="summary">
                                        <h4>Synopsis</h4>
                                        <p><?php echo $results->synopsis?></p>
                                    </div>
                                    <div class="summary">
                                        <h4>Background</h4>
                                        <p><?php
                                            if(!empty($results->background)){
                                                echo $results->background;
                                            }
                                            else{
                                                echo "-";
                                            }
                                            ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                        <div class="row" style="padding-top: 50px">
                            <div class="summary">
                                <h4>Opening Themes</h4>
                                <p><?php foreach ($results->opening_themes as $no => $op){
                                    $no = $no+1;
                                        echo $no.". ".$op."<br>";
                                    }?></p>
                            </div>
                            <div class="summary" style="padding-left: 20px">
                                <h4>Ending Themes</h4>
                                <p><?php foreach ($results->ending_themes as $no => $op){
                                        $no = $no+1;
                                        echo $no.". ".$op."<br>";
                                    }?></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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