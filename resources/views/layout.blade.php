<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ատամնաբուժարան</title>
    <link rel="icon" type="image/x-icon" href="{{asset("assets/img/favicon.ico")}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{mix("css/app.css")}}" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Ատամնաբուժարան</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Մեր մասին</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Ծառայություններ</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Կապ</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
@yield("content")
<!-- Contact-->
<section class="contact-section bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Հասցե</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">ք․ Վանաձոր Տիգրան Մեղ 88/88</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50"><a href="#!">hcontact@atamnabujaran.am</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Հեռահոսահամար</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">+374 77 00 00 00 </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container">Ատամնաբուժառան © 2021</div></footer>
<!-- Bootstrap core JS-->
<!-- Core theme JS-->
<script src="{{mix("js/app.js")}}"></script>
</body>
</html>
