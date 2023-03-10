<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <!-- Icon Title -->
    <link rel="shortcut icon" href="image/school.png" type="image/x-icon">

    <!-- Bootstrap File Css -->
    <link rel="stylesheet" href="bootstraap/bootstrap-5.1.3-dist/css/bootstrap.css">

    <!-- Css File -->
    <link rel="stylesheet" href="Css/Style.css">

    <!-- FontAwesone for icon in the page -->
    <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
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
                                        href="./Php.php">Php</a></li>
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

    <!-- Carrousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/1.jpg" alt="" height="600px" width="100%">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="color:  #fff;text-shadow: black 1px 2px;">Bienvenue Dans Mon Domaine</h1>
                        <p style="color:  #ff7900; font-weight: bold; font-size: 20px;">Je suis dans le domaine
                            Informatique <i class="fa fa-desktop"></i></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/7.jpg" alt="" height="600px" width="100%">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 style="color:  #fff;text-shadow: black 1px 2px;">Science Informatique <i
                                class="fa fa-desktop"></i></h1>
                        <p style="color:  #ff7900; font-weight: bold; font-size: 20px;"> Inscrit en Licence Science
                            Informatique en 3 ans </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/banner1.jpg" alt="" height="600px" width="100%">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1 style="color:  #fff;text-shadow: black 1px 2px;">Un Mélange de Formation</h1>
                        <p style="color:  #ff7900; font-weight: bold; font-size: 20px;">Plus précisement une combinaison
                            de programmation et de réseau informatique <i class="fa fa-desktop"></i></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Objectif du site  -->
    <div class="container">
        <div class="row">
            <h1 class="pb-4 pt-3" style="color: black; text-align:center; text-decoration: underline;">Bienvenue à toi
                </h4>
                <h2 style="color: black;">Je Suis Un Etudiant !</h2>

                <div class="col-lg-6 col-md-12 banner-image pb-4">
                    <img src="image/4.jpg" alt="banner-img" class="img-fluid rounded">
                </div>

                <div class="col-lg-6 col-md-12 site-title">
                    Je suis un Etudiant en Licence 3 en <strong>Science Informatique<strong>.
                            Je me spécialise dans ce domaine en Developpement web et mobile et sans oublier le réseau.

                            <p>
                                <b>Ce Site School est fait pour partager avec tous mes Devoirs et Interrogations</b>
                            </p>
                </div>
        </div>
    </div>

    <!-- Devoir et Interrogation -->
    <div class="spad">
        <div class="site-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <div class="block-heading-1">
                            <h2 class="text-black" style="text-decoration: underline;">Devoir & Interrogation</h2>
                            <p>
                                Nous allons vous présentez simplement
                                des exercies(devoir et Interrogation) de chaque matière dans le domaine Science
                                informatique.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 mb-5" data-aos="fade-right">
                        <img src="image/5.jpg" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-5 ml-auto align-self-center dis">
                        <h3 class="text-black text-uppercase mb-4" style="font-weight: bold;">Devoir</h3>
                        <p class="mb-5">
                            <strong>
                                Au travers de cette partie devoirs nous allons vous présenter tout les devoirs
                                c'est-à-dire au minimum 2 par matière.
                            </strong> <br>
                            Cliquez ici pour en savoir plus <a href="./devoir.php" class="btn btn-primary">Devoir</a>
                        </p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-6 mb-5 order-lg-2" data-aos="fade-left">
                        <img src="image/1.jpg" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-lg-1 dis">
                        <h3 class="text-black text-uppercase mb-4" style="font-weight: bold;">Interrogation</h3>
                        <p class="mb-5">
                            <strong>
                                Au travers de cette partie Interrogation nous allons vous présenter toutes les
                                Interrogations c'est-à-dire au minimum 2 par matière.
                            </strong> <br>
                            Cliquez ici pour en savoir plus <a href="./interro.php"
                                class="btn btn-primary">Interrogation</a>
                        </p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-6 mb-5 order-lg-2" data-aos="fade-left">
                        <img src="./image/projectcycle-1024x614.jpeg" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-lg-1 dis">
                        <h3 class="text-black text-uppercase mb-4" style="font-weight: bold;">Projet</h3>
                        <p class="mb-5">
                            <strong>
                                Au travers de cette partie projet nous allons juste partager nos connaissance en terme
                                de projet en donnant le titre et le contenu de votre projet
                            </strong> <br>
                            Cliquez ici pour en savoir plus <a href="./projet.php" class="btn btn-primary">Projet</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Présentation des matières -->
    <div class="pb-4 btn1">
        <div class="site-section">
            <div class="container">
                <h2 class="section-title center" style="color: black; text-decoration: underline;">Toutes les matières
                    possibles</h2>
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <p>
                            Dans cette partie nous allons voir toutes les matières dans lesquelles vous aurez mes
                            devoirs et Interrogations en image et texte.
                            Ces matières sont:
                        <ul>
                            <li><a style="color: #ff7900;" href="./programWeb.php">HTML && CSS</a></li>
                            <li><a style="color: #ff7900;" href="./programWeb.php">JAVASCRIPT</a></li>
                            <li><a style="color: #ff7900;" href="./programWeb.php">PHP</a></li>
                            <li><a style="color: #ff7900;" href="./programWeb.php">RESEAU</a></li>
                            <li><a style="color: #ff7900;" href="./program.php">JAVA</a></li>
                            <li><a style="color: #ff7900;" href="./program.php">C#</a></li>
                            <li><a style="color: #ff7900;" href="./program.php">LANGAGE C</a></li>
                            <li><a style="color: #ff7900;" href="./program.php">PYTHON</a></li>
                            <li><a style="color: #ff7900;" href="./program.php">ALGORITHME</a></li>
                            <li><a style="color: #ff7900;" href="./program.php">MATHS</a></li>
                            <li><a style="color: #ff7900;" href="./programWeb.php">ANGLAIS</a></li>
                        </ul>
                        </p>
                    </div>
                </div>
                Cliquez ici pour en savoir plus sur nos contacts <a href="./contact.php"
                    class="btn btn-primary">Contact</a>
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
                                <li><a href="./programWeb.php">Programmation Web</a></li>
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