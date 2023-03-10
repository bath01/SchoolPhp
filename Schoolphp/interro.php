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
        background: url(image/banner1.jpg) no-repeat;
        background-size: cover;
        background-position: top center;
        padding: 130px 0;
      ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 text-center">
                    <div class="breadcrumb__text">
                        <h1>Interrogation</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Acceuil > </a>
                            <span>Interrogation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Part 2 -->
    <section class="part2 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                    <div class="testimonial__slider owl-carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="room__pic__slider">
                                        <div class="room__pic__item">
                                            <b>
                                                Exercice 1 <br />
                                                Quelles seront les valeurs des variables A et B après
                                                exécution des instructions <br />
                                                suivantes ? <br />
                                                Variables A, B en Entier <br />
                                                Début <br />
                                                A ← 1 <br />
                                                B ← A + 3 <br />
                                                A ← 3 <br />
                                                Fin
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="room__pic__slider">
                                        <div class="room__pic__item">
                                            <b>
                                                Exercice 2 <br />
                                                Quelles seront les valeurs des variables A, B et C
                                                après exécution des instructions <br />
                                                suivantes ? <br />
                                                Variables A, B, C en Entier <br />
                                                Début <br />
                                                A ← 5 <br />
                                                B ← 3 <br />
                                                C ← A + B <br />
                                                A ← 2 <br />
                                                C ← B – A <br />
                                                Fin
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="room__pic__slider">
                                        <div class="room__pic__item">
                                            <b>
                                                Exercice 3 <br />
                                                Quelles seront les valeurs des variables A et B après
                                                exécution des instructions <br />
                                                suivantes ? <br />
                                                Variables A, B en Entier <br />
                                                Début <br />
                                                A ← 5 <br />
                                                B ← A + 4 <br />
                                                A ← A + 1 <br />
                                                B ← A – 4 <br />
                                                Fin <br />
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-lg-1 order-md-1 col-md-6">
                    <div class="room__text">
                        <h3 style="color: black; font-weight: bold">Programmation Web</h3>
                        <ul>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="/programWeb.php">HTML && CSS</a>
                            </li>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="/programWeb.php">JAVASCRIPT</a>
                            </li>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="/programWeb.php">PHP</a>
                            </li>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="/programWeb.php">RESEAU</a>
                            </li>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="/programWeb.php">ANGLAIS</a>
                            </li>
                        </ul>
                        Cliquez simplement sur la matière de votre choix afin de retrouver
                        les devoirs et Interrogations
                        <a href="/programWeb.php" class="btn btn-primary">Programmation Web</a>
                    </div>
                </div>

                <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                    <div class="testimonial__slider owl-carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="room__pic__slider">
                                        <div class="room__pic__item">
                                            <b>
                                                Exercice 1 <br />
                                                Quelles seront les valeurs des variables A et B après
                                                exécution des instructions <br />
                                                suivantes ? <br />
                                                Variables A, B en Entier <br />
                                                Début <br />
                                                A ← 1 <br />
                                                B ← A + 3 <br />
                                                A ← 3 <br />
                                                Fin
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="room__pic__slider">
                                        <div class="room__pic__item">
                                            <b>
                                                Exercice 2 <br />
                                                Quelles seront les valeurs des variables A, B et C
                                                après exécution des instructions <br />
                                                suivantes ? <br />
                                                Variables A, B, C en Entier <br />
                                                Début <br />
                                                A ← 5 <br />
                                                B ← 3 <br />
                                                C ← A + B <br />
                                                A ← 2 <br />
                                                C ← B – A <br />
                                                Fin
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="room__pic__slider">
                                        <div class="room__pic__item">
                                            <b>
                                                Exercice 3 <br />
                                                Quelles seront les valeurs des variables A et B après
                                                exécution des instructions <br />
                                                suivantes ? <br />
                                                Variables A, B en Entier <br />
                                                Début <br />
                                                A ← 5 <br />
                                                B ← A + 4 <br />
                                                A ← A + 1 <br />
                                                B ← A – 4 <br />
                                                Fin <br />
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 order-lg-4 order-md-4 col-md-6 pt-4">
                    <div class="room__text right__text">
                        <h3 style="color: black; font-weight: bold">Programmation</h3>
                        <ul>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="./program.php">JAVA</a>
                            </li>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="./program.php">C#</a>
                            </li>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="./program.php">LANGAGE C</a>
                            </li>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="./program.php">PYTHON</a>
                            </li>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="./program.php">ALGORITHME</a>
                            </li>
                            <li>
                                <a style="color: #ff7900; font-weight: bold" href="./program.php">MATHS</a>
                            </li>
                        </ul>
                        Cliquez simplement sur la matière de votre choix afin de retrouver
                        les devoirs et Interrogations
                        <a href="./program.php" class="btn btn-primary">Programmation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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