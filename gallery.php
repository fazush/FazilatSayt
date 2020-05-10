<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
     
</head>

<body class="bg-secondary">

<?php 
     include 'Gstyle.php';   
 ?>

<nav class="nav nav-justified sahifa1">
    <a class="nav-item nav-link" href="index.php" title="Bosh sahifaga o'tish"><img src="images/GEntypo_2302(0)_32.png"><b>First Page</b></a>
    <a class="nav-item nav-link active" href="gallery.php"><img src="images/Galer.png"><b>Gallery</b></a>
    <a class="nav-item nav-link" href="services.php"><img src="images/GEntypo_d83d(2)_32.png"><b>Servises</b></a>
    <a class="nav-item nav-link" href="about.php"><img src="images/GEntypo_d83d(0)_32.png"><b>About Us</b></a>
    <a class="nav-item nav-link" href="contact.php"><img src="images/GEntypo_d83d(1)_32.png"><b>Contact Us</b></a>
</nav>


    <h1 class="display-1 header bg-light" style="font-family: 'Harlow Solid Italic';"><i>Hotel Uzbekistanga marhamat.</i></h1>
<div class="row" id="carousel1">
    <div class="col-2"></div>
    <div class="col-8">
    <div class="carousel slide carousel-fade" id="carouselEqt" data-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="images/2019-07-02%20(1).jpg" alt="Hotel Uzbekistan" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="images/bosh.jpg" alt="Hotel Uzbekistan" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="images/unnamed%20(4).jpg" alt="Hotel Uzbekistan" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="images/unnamed (49).jpg" alt="Hotel Uzbekistan" class="d-block w-100">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselEqt" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselEqt" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
</div>
        <div class="card-group text-center m-5">
            <div class="card border-danger bordered">
                <img src="images/IMG_20190325_152456.jpg" alt="Hotel Uzbekistan" class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title text-danger"><b>Mehmonxona rasmlari</b></h1>
                    <button class="btn btn-warning" data-toggle="collapse" data-target="#myDIV">To'liq ko'rish</button>
                </div>
            </div>
            <div class="card border-danger bordered">
                <img src="images/IMG_20190325_170314.jpg" alt="Hotel Uzbekistan" class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title text-danger"><b>Dam olish xonalari</b></h1>
                    <button class="btn btn-warning" data-toggle="collapse" data-target="#myDIV2">To'liq ko'rish</button>
                </div>
            </div>
            <div class="card border-danger bordered">
                <img src="images/PS0A2917.JPG" alt="Hotel Uzbekistan" class="card-img-top" style="height: 56%">
                <div class="card-body">
                    <h1 class="card-title text-danger"><b>Yashash xonalari</b></h1>
                    <button class="btn btn-warning" data-toggle="collapse" data-target="#myDIV3">To'liq ko'rish</button>
                </div>
            </div>
            <div class="card border-danger bordered">
                <img src="images/IMG_20190325_153241.jpg" alt="Hotel Uzbekistan" class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title text-danger"><b>Ovqatlanish zallari</b></h1>
                    <button class="btn btn-warning" data-toggle="collapse" data-target="#myDIV4">To'liq ko'rish</button>
                </div>
            </div>
        </div>

<div class="accordion" id="accordionID">
    <div  class="collapse" id="myDIV" data-parent="#accordionID">

        <div class="header1" id="myHeader">
            <button class="btn btn-danger"  onclick="one()">1</button>
            <button class="btn btn-danger"onclick="two()">2</button>
            <button class="btn btn-danger"  onclick="four()">4</button>
            <button class="btn btn-danger close d-inline-block" type="button" data-toggle="collapse" data-target="#myDIV">x</button>
        </div>

        <div class="row">
            <div class="column">
                <img src="images/IMG_20190325_152456.jpg">
                <img src="images/UA1A9943.jpg">
                <img src="images/unnamed (1).jpg">
                <img src="images/unnamed (4).jpg">
            </div>
            <div class="column">
                <img src="images/unnamed (16).jpg" >
                <img src="images/unnamed (17).jpg">
                <img src="images/unnamed (20).jpg">
                <img src="images/PS0A3005.JPG">
            </div>
            <div class="column">
                <img src="images/unnamed (24).jpg">
                <img src="images/unnamed (25).jpg">
                <img src="images/unnamed (52).jpg">
                <img src="images/unnamed (23).jpg">
            </div>
            <div class="column">
                <img src="images/unnamed (5).jpg">
                <img src="images/unnamed (6).jpg">
                <img src="images/unnamed (10).jpg">
                <img src="images/unnamed (14).jpg">
            </div>
        </div>

    </div>

    <div  class="collapse" id="myDIV2" data-parent="#accordionID">

        <div class="header1" id="myHeader">
            <button class="btn btn-danger" onclick="one()">1</button>
            <button class="btn btn-danger" onclick="two()">2</button>
            <button class="btn btn-danger" onclick="four()">4</button>
            <button class="btn btn-danger close d-inline-block" type="button" data-toggle="collapse" data-target="#myDIV2">x</button>
        </div>

        <div  class="row">
            <div class="column">
                <img src="images/IMG_20190325_170047.jpg">
                <img src="images/IMG_20190325_170346.jpg">
                <img src="images/IMG_20190325_170314.jpg">
            </div>
            <div class="column">
                <img src="images/IMG_20190325_170336.jpg">
                <img src="images/PS0A2809.JPG">
                <img src="images/PS0A2815.JPG">
                <img src="images/PS0A2921.JPG">
            </div>
            <div class="column">
                <img src="images/PS0A3016.JPG">
                <img src="images/PS0A3021.JPG">
                <img src="images/PS0A3032.JPG">
                <img src="images/PS0A3035.JPG">
            </div>
            <div class="column">
                <img src="images/PS0A3018.JPG">
                <img src="images/PS0A2899.JPG">
                <img src="images/PS0A3025.webp">
                <img src="images/PS0A2835.JPG">
            </div>
        </div>

    </div>

    <div  class="collapse" id="myDIV3" data-parent="#accordionID">

        <div class="header1" id="myHeader">
            <button class="btn btn-danger" onclick="one()">1</button>
            <button class="btn btn-danger" onclick="two()">2</button>
            <button class="btn btn-danger" onclick="four()">4</button>
            <button class="btn btn-danger close d-inline-block" type="button" data-toggle="collapse" data-target="#myDIV3">x</button>
        </div>

        <div  class="row">
            <div class="column">
                <img src="images/PS0A2857.JPG">
                <img src="images/PS0A2905.JPG">
                <img src="images/IMG_20190325_154855.jpg">
                <img src="images/IMG_20190325_153117.jpg">
            </div>
            <div class="column">
                <img src="images/photo_2019-08-20_18-54-26.jpg">
                <img src="images/IMG_20190325_155539.jpg">
                <img src="images/IMG_20190325_155035.jpg">
                <img src="images/PS0A2900.JPG">
            </div>
            <div class="column">
                <img src="images/PS0A2917.JPG">
                <img src="images/PS0A2945.webp">
                <img src="images/UA1A9826.jpg">
                <img src="images/photo_2019-08-20_18-54-35.jpg">
            </div>
            <div class="column">
                <img src="images/UA1A9779.jpg">
                <img src="images/UA1A9765.jpg">
                <img src="images/UA1A9783.jpg">
            </div>
        </div>

    </div>

    <div  class="collapse" id="myDIV4" data-parent="#accordionID">

        <div class="header1" id="myHeader">
            <button class="btn btn-danger" onclick="one()">1</button>
            <button class="btn btn-danger " onclick="two()">2</button>
            <button class="btn btn-danger" onclick="four()">4</button>
            <button class="btn btn-danger close d-inline-block" type="button" data-toggle="collapse" data-target="#myDIV4">x</button>
        </div>


        <div  class="row">
            <div class="column">
                <img src="images/unnamed (3).jpg">
                <img src="images/IMG_20190325_153241.jpg">
                <img src="images/unnamed (8).jpg">
            </div>
            <div class="column">
                <img src="images/unnamed (15).jpg">
                <img src="images/IMG_20190325_153244.jpg">
                <img src="images/unnamed (19).jpg">
                <img src="images/unnamed (29).jpg">
            </div>
            <div class="column">
                <img src="images/unnamed (9).jpg">
                <img src="images/IMG_20190325_153248.jpg">
                <img src="images/unnamed (34).jpg">
                <img src="images/unnamed (37).jpg">
            </div>
            <div class="column">
                <img src="images/unnamed (13).jpg">
                <img src="images/unnamed (27).jpg">
                <img src="images/unnamed (41).jpg">
                <img src="images/unnamed (30).jpg">
            </div>
        </div>

    </div>
</div>


</body>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
var elements = document.getElementsByClassName('column');
var i;
function one() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "100%";
        elements[i].style.flex = "100%";
    }
}
function two() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "50%";
        elements[i].style.flex = "50%";
    }
}
function four() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "25%";
        elements[i].style.flex = "25%";
    }
}

$ ('.carousel').carousel();
 
</script>
</html>