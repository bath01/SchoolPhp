<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School</title>
    <!-- Icon Title -->
    <link rel="shortcut icon" href="image/school.png" type="image/x-icon" />

    <!-- Bootstrap File Css -->
    <link rel="stylesheet" href="bootstraap/bootstrap-5.1.3-dist/css/bootstrap.css" />

    <!-- Css File -->
    <link rel="stylesheet" href="Css/Style.css" />

    <!-- FontAwesone for icon in the page -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a style="font-size: 30px; font-weight: bold; text-decoration: underline;" class="navbar-brand"
                href="#">L'<img src="image/graduation.png" width="50px" height="50px" alt="">Ecole</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"
                        style="font-weight: bold; color: black; text-decoration: underline; ">L'<img
                            src="image/graduation.png" width="50px" height="50px" alt="">Ecole</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: black; font-weight: 600;" aria-current="page"
                                href="./index.php">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black; font-weight: 600;" href="./devoir.php">Devoir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black; font-weight: 600;"
                                href="./interro.php">Interrogation</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="font-weight: bold; text-decoration: underline;"
                                href="/programWeb.php" id="offcanvasNavbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Programmation Web
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" style="color: #ff7900; font-weight: 600;"
                                        href="./htCss.php">Html&Css</a></li>
                                <li><a class="dropdown-item" style="color: #ff7900; font-weight: 600;"
                                        href="./js.php">JavaScript</a></li>
                                <li><a class="dropdown-item" style="color: #ff7900; font-weight: 600;"
                                        href="./Php.php">Php</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" style="color: #ff7900; font-weight: 600;"
                                        href="./reseau.php">Réseau</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="font-weight: bold; text-decoration: underline;"
                                href="/program.php" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Programmation
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" style="color: #ff7900; font-weight: 600;"
                                        href="./java.php">Java</a>
                                </li>
                                <li><a class="dropdown-item" style="color: #ff7900; font-weight: 600;"
                                        href="./csharp.php">C#</a>
                                </li>
                                <li><a class="dropdown-item" style="color: #ff7900; font-weight: 600;"
                                        href="./c.php">Langage
                                        C</a></li>
                                <li><a class="dropdown-item" style="color: #ff7900; font-weight: 600;"
                                        href="./python.php">Python</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" style="color: #ff7900; font-weight: 600;"
                                        href="./Algo.php">Algorithme</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" style="color: black; font-weight: 600;" href="./projet.php">Projet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black; font-weight: 600;"
                                href="./commentaire.php">Commentaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black; font-weight: 600;" href="./inscrit.php">Les
                                Inscrits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black; font-weight: 600;" href="./publication.php">Les
                                publications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black; font-weight: 600;" href="./contact.php">Contact</a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Part 1 -->
    <div class="breadcrumb-option" style="
        background: url(image/7.jpg) no-repeat;
        background-size: cover;
        background-position: top center;
        padding: 130px 0;
      ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 text-center">
                    <div class="breadcrumb__text">
                        <h1 style="color: #ff7900">JAVASCRIPT</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Acceuil > </a>
                            <span>JAVASCRIPT</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Devoirs -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-5 mr-auto mb-5 align-self-center">
                <div class="mb-5">
                    <h2 style="
                font-weight: bold;
                color: black;
                text-decoration: underline;
              ">
                        Mes Devoirs
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="image/html.jpg">
                    <img src="image/html.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <i style="text-decoration: underline">Exercice 1 : </i>
                <b style="font-size: 40px">
                    Concevoir une page avec des carrousels
                </b>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="image/html (2).jpg">
                    <img src="image/html (2).jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <i style="text-decoration: underline">Exercice 2 : </i>
                <b style="font-size: 40px">
                    Mettre en place Un site avec une barre de recherche en JavaScript
                </b>
            </div>
            <div class="col-lg-4 col-md-6">
                <i style="text-decoration: underline">Exercice 3 : </i>
                <b style="font-size: 40px">
                    Citez toutes les fonctions propres a javascript ....
                </b>
            </div>
            <div class="col-lg-4 col-md-6">
                <i style="text-decoration: underline">Exercice 4 : </i>
                <b style="font-size: 40px">
                    Concevoir Un site complet d'e-commerce en Html et Css et aussi
                    JavaScript....
                </b>
            </div>
        </div>
    </div>
    <hr />
    <hr />

    <!-- Interrogations -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-5 mr-auto mb-5 align-self-center">
                <div class="mb-5">
                    <h2 style="
                font-weight: bold;
                color: black;
                text-decoration: underline;
              ">
                        Mes Interrogations
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="image/js1.jpg">
                    <img src="image/js1.jpg" alt="" class="img-fluid" />
                </a>
            </div>

            <div class="col-lg-6 col-md-6">
                <a href="image/js2.jpg">
                    <img src="image/js2.jpg" alt="" class="img-fluid" />
                </a>
            </div>

            <div class="col-lg-6 col-md-6 pt-2">
                <a href="image/js3.jpg">
                    <img src="image/js3.jpg" alt="" class="img-fluid" />
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer set-bg">
        <div class="container">
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="./index.php">L'<img src="image/graduation.png" width="50px" height="50px"
                                        alt="">Ecole</a>
                            </div>
                            <h4>(+225) 0705364991</h4>
                            <ul>
                                <li>Abidjan(Bonou), Yaou</li>
                                <li>Bathdorgeleskouakou@gmail.com</li>
                            </ul>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer__widget">
                            <h4>Notre Espace</h4>
                            <ul>
                                <li><a href="./index.php">Acceuil</a></li>
                                <li><a href="./devoir.php">Devoir</a></li>
                                <li><a href="./interro.php">Interrogation</a></li>
                                <li><a href="./program.php">Programmation</a></li>
                                <li><a href="/programWeb.php">Programmation Web</a></li>
                            </ul>
                            <ul>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <div class="footer__newslatter">
                            <h4>L'E-mail</h4>
                            <form action="#">
                                <input type="text" disabled placeholder="Bathdorgeleskouakou@gmail.com">
                                <button type="submit">Applique</button>
                            </form>
                            <div class="footer__newslatter__find">
                                <h5>Find Us:</h5>
                                <div class="footer__newslatter__find__links">
                                    <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                    <a href="#"><i class="fa fa-map-o"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-forumbee"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p style="color: white;">Copyright ©<i style="color: black;" class="fa fa-xing"></i>
                                Bathdorgeleskouakou-2021-All Right Reserved</p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="footer__copyright__links">
                            <li><a href="#">Mes Devoirs</a></li>
                            <li><a href="#">Une expérience Formidable</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap File Js -->
    <script src="bootstraap/bootstrap-5.1.3-dist/js/bootstrap.js"></script>

    <!-- Script JQuery -->
    <script src="Js/jQuery 3.4.1.js"></script>

    <!-- Preloader JavaScript -->
    <script>
    $(window).on("load", function() {
        $("#preloder").fadeOut(2000);
    });
    </script>
</body>

</html>