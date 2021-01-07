<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="restaurant de spécialité XYZ à Toulouse, meilleur chef de l'année 2020">
    <meta name="keywords" content="restaurant indien panneer curry végétarien vegan">
    <!-- fin référencement -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../www/css/style.css">
    <link rel="stylesheet" href="css/style_responsive.css">
  </head>
  <body>
        <main id="accueil" class="container-fluid">
            <section id="coordonnee" class="row justify-content-around">
                <!-- pb : pas d'angle à la fin de la div comparé à l'ojectif / responif : contenu pas très bien centré (suggestion?)-->
                <div id="telephone" class="col-md-4" >
                    <span class="border-right pr-3"><span class="material-icons md-14 ml-5">call</span> <a href="tel:00.00.00.00.00" class="text-decoration-none">00.00.00.00.00</a></span>
                    <span class="material-icons md-14">call</span><a href="tel:00.00.00.00.00" class="text-decoration-none">00.00.00.00.00</a>
                </div>
                <div id="email" class="col-md-4 text-center">
                    <span class="material-icons md-14">email</span><a href="mailto:monemail@monresto.com" class="text-decoration-none">monemail@monresto.com</a>
                </div>
                <div id="login-inscription" class="col-md-3" >
                    <span class="material-icons md-14">login</span> <a href="#" class="text-decoration-none">Se connecter</a> 
                    <span class="material-icons md-14">description</span><a href="#" class="text-decoration-none">S'inscrire</a> 
                </div>
                <div id="langue" class="col-md-1 justify-content-end">
                    <select>
                            <option value="FR">Fr</option>
                            <option value="EN">En</option>
                            <option value="CN">Cn</option>
                    </select>
                </div>
            </section>

            <section id="logo" class="row ">
                <img src="../www/images/logo.png" alt="logo restaurant">
            </section>

            <section id="barre-navigation" class="row sticky-top">
                <nav class="navbar  navbar-expand-md navbar-light col-md-8 offset-md-2" style="background-color: #ffffff;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barre-navigation-principale" aria-controls="barre-navigation-principale" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="barre-navigation-principale">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#accueil">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#reservation">Réservation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#menu">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#nos-plats">Galerie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Boutique</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../www/contact.php">Contact</a>
                            </li>
                        </ul>
                        <!-- pb: zone recherche vraiment décallé par rapport au menu et ouverture d'input sur le côté droit.-->
                        <button type="button" class="btn ml-2" data-toggle="collapse" data-target="#cherche">
                            <span class="material-icons">search</span>
                        </button>
                        <input  id="cherche"class="ml-3 collapse" type="text" placeholder="Rechercher">
                    </div>
                </nav>
            </section>
            <section>
                <?php
                    echo $contenu_page;
                ?>
            </section>
            <section id="menu-site" class="row justify-content-center mt-4">
                <div id="information" class="col-md-2">
                    <h5>Informations</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                    </ul>
                </div>
                <div id="nos-services" class="col-md-2">
                    <h5>Nos Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                        <li><a href="#" class="text-decoration-none"><span class="material-icons md-14">send</span>liens</a></li>
                    </ul>
                </div>
                <div id="contactez-nous" class="col-md-2">
                    <h5>Contactez-nous</h5>
                    <address>
                        <p>
                            <h5 class="texte-couleur-principale">Email</h5>
                            <a href="monemail@macompanie.com">monemai@macompanie.com</a>
                        </p>
                        <p>
                            <h5 class="texte-couleur-principale">Téléphone</h5>
                            <a href="tel:0512131614">0501020304</a>
                        </p>
                            <h5 class="texte-couleur-principale">Adresse</h5>
                            <h6>Batiment truc</h6>
                            <h6>Rue Machin</h6>
                            <h6>31000 Toulouse</h6>
                        </p>
                    </address>
                </div>
                <div id="reseaux-sociaux" class="col-md-2">
                        <h5>Réseaux Sociaux</h5>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-square mr-3"></i>Facebook</a></li>
                            <li><a href="#"><i class="fab fa-twitter-square mr-3"></i>Twitter</a></li>
                            <li><a href="#"><i class="fab fa-facebook-square mr-3"></i>LinkedIn</a></li>
                            <li><a href="#"><i class="fab fa-twitter-square mr-3"></i>Pinterest</a></li>
                            <li><a href="#"><i class="fa fa-rss mr-3" aria-hidden="true"></i>Rss</a></li>
                        </ul>
                </div>
                <div id="menu-bas"  class="container text-center mt-4 border-bottom border-top">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#accueil">Accueil</a></li>
                        <li class="list-inline-item"><a href="#">A Propos</li>
                        <li class="list-inline-item"><a href="#nos-plats">Services</a></li>
                        <li class="list-inline-item"><a href="#">Commandes</a></li>
                        <li class="list-inline-item"><a href="#blog">Blog</a></li>
                        <li class="list-inline-item"><a href="#">Boutique</a></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <footer class="container mt-2">
                    <h6>Copyright 2020 XYZ companie</h6>
                </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>