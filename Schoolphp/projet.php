<?php
// session_start();
try {
    $dbb = new PDO('mysql:host=localhost;dbname=school', 'root', 'root');
    // $dbb = new PDO('mysql:host=localhost;dbname=school', 'root', 'root');
} catch (PDOException $e) {
    die("Erreur de Connexion a la base <br>" . $e->getMessage());
}


function CallAPI($method, $api, $data)
{
    $url = "http://localhost:8888/api/controllers/" . $api;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    switch ($method) {
        case "GET":
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            break;
        case "POST":
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            break;
        case "DELETE":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            break;
    }
    $response = curl_exec($curl);
    $data = json_decode($response);

    /* Check for 404 (file not found). */
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    // Check the HTTP Status code
    switch ($httpCode) {
        case 201:
            $error_status = "200: Success";
            return ($data);
            break;
        case 404:
            $error_status = "404: API introuvable";
            break;
        case 500:
            $error_status = "500: les serveurs ont répondu par une erreur.";
            break;
        case 502:
            $error_status = "502: les serveurs peuvent être en panne ou en cours de mise à niveau. Espérons qu'ils iront bien bientôt !";
            break;
        case 503:
            $error_status = "503: service non disponible. Espérons qu'ils iront bien bientôt !";
            break;
        default:
            $error_status = "Erreur non documentée: " . $httpCode . " : " . curl_error($curl);
            break;
    }
    curl_close($curl);
    echo $error_status;
    die;
}

if (isset($_POST['idProjet'])) {
    $idProjet = htmlspecialchars(trim($_POST['codeLProjet']));
    $data = array('idProjet' => $idProjet);
    $result = CallAPI('DELETE', "deletePro.php", $data);
}






// Déclaration des Variables
if (isset($_POST['toto'])) {
    $titre = htmlspecialchars(trim($_POST['titre']));
    $descrip = htmlspecialchars(trim($_POST['descrip']));

    if (isset($titre) and !empty($titre)) {
        if (isset($descrip) and !empty($descrip)) {
            $ins = $dbb->prepare("SELECT * FROM projet WHERE titreProjet= ? AND descripProjet = ?");
            $ins->execute([$titre, $descrip]);
            $verif = $ins->rowCount();

            if ($verif == 0) {
                $req = $dbb->prepare("INSERT INTO projet(titreProjet,descripProjet) VALUES(?,?)");
                $req->execute([$titre, $descrip]);
                $erreur = "Merci pour l'enregistrement";
                // header('location:./projet.php');
            }
        } else if ($verif == 1) {
            $erreur = "Vous avez dejà un projet Merci";
        }
    }
} else {
    $erreur = "Donnez votre projet svp";
}

$projets = json_decode(file_get_contents('http://localhost:8888/api/controllers/readAllPro.php'));


// Vérification des Champs vides

?>
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

    <div class="breadcrumb-option" style="
        background: url(image/projectcycle-1024x614.jpeg)
          no-repeat;
        background-size: cover;
        background-position: center;
        padding: 130px 0;
      ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 text-center">
                    <div class="breadcrumb__text">
                        <h1>Vos Projets</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.php" style="text-shadow: black 0.5px 1px;">Acceuil > </a>
                            <span>Vos Projets</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5" style="margin-bottom: 400px;">
        <div class="row">
            <h2 style="font-weight: bold;">
                Vos Projets
            </h2>
            <p style="font-size: 25px"><em>Donnez nous simplement <b>le titre</b> et <b>la description </b> du projet
                    sur
                    lequel
                    vous
                    avez travaillez etant encore Etudiant
                    , Veuillez
                    rempli le formulaire ci-dessous
                    Svp!</em>
            </p>
            <div class="contact__form">
                <form action="#" method="post">
                    <div class="col-lg-12 mb-4" style="color:red; text-align:center; font-weight:bold;">
                        <?php
                        if (isset($erreur)) {
                            echo $erreur;
                        }
                        ?>
                    </div>
                    <input type="text" name="titre"
                        placeholder="Le titre (ex: Conception d'une App web sur le Cacao)" />
                    <textarea name="descrip" id="" cols="30" rows="10"
                        placeholder="Description concernant votre projet..."></textarea>
                    <button name="toto" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <h1 style="font-weight: bold; text-decoration: underline;">
            Voici Les projets données par tous Merci de les regarder afin de découvrir d'autre projet !
        </h1>
        <?php foreach ($projets[0] as $projet) : ?>
        <div class="row">
            <div class="col-lg-12">
                <!-- espace pour les elements a afficher -->
                <h2>Le Projet : <b><?= $projet->titreProjet ?></b></h2>
                <div>
                    <h3 style="font-weight:600; text-decoration:underline;">La Desciption</h3>
                    <p>
                        <?= $projet->descripProjet ?>
                    </p>
                </div>
            </div>
        </div>
        <div style="display: flex;">
            <a href="#" class="btn btn-primary">Ajouter</a>
            <?php
                echo ' <form action="./projet.php" method="POST"><input type="hidden"
                                name="codeLProjet" value=' . $projet->idProjet . ' >
                                <input type="submit" class="btn btn-primary Hu" style="width:118px;height:50px"
                                 name="idProjet"  value="Supprimer">
                                </form> '
                ?>
        </div>
        <?php endforeach; ?>
    </div>

    <style>
    .Hu {
        background-color: #ff7900;
        border-color: #ff7900;
        font-weight: bold;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        padding-right: 30px;
        margin-left: 10px;
    }

    .Hu:hover {
        border-color: #ff7900;
        transition: 0.3s;
        color: #ff7900;
        background-color: white;
    }
    </style>

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
                            <p style="color:white;">Copyright ©<i style="color: black;" class="fa fa-xing"></i>
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