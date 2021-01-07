  <!DOCTYPE html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
  <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- référencement -->
            <title>Site Restaurant</title>
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
            <link rel="stylesheet" href="css/style.css">
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
                    <img src="images/logo.png" alt="logo restaurant">
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
                                    <a class="nav-link" href="contact.php">Contact</a>
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

                <section id="carousel">
                    <!-- d-none d-md-block : cache l'élément si l'écran est plus petit que le point de cassure md -->
                    <div id="carouselPlats" class="carousel slide d-none d-md-block" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselPlats" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselPlats" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/image-1.jpg" class="d-block h-60" alt="caroussel-plat-1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Plat 1</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    <a href="#" class="btn btn-outline-dark">+ Détails</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/image-2.jpg" class="d-block h-60" alt="caroussel-plat-2">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Plat 2</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a href="#" class="btn btn-outline-dark">+ Détails</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselPlats" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselPlats" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </section>
                <section id="menu" class="container mt-2">
                    <div class="row no-gutters">
                            <div class="text-center mb-3">
                                <h3>Nos Menu</h3>
                                <p class="texte-couleur-principale">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque 
                                    sapiente aperiam minima veritatis deleniti placeat, ad obcaecati,
                                    molestias id nam, inventore ea explicabo eos exercitationem 
                                    ipsum similique mollitia totam blanditiis.
                                </p>
                            </div>
                            <div class="row">
                                <figure class="col-md-6">
                                    <img src="images/delicious_1.jpg" alt="image-menu-petit-déjeuner" class="d-none d-md-block">
                                    <figcaption class="text-left mx-2">
                                        <h5>Petit déjeuner</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis 
                                            deserunt illum dignissimos sequi consequatur sed. Modi ipsam 
                                        </p>
                                        <a href="#" class="btn btn-outline-dark">Commander</a>
                                    </figcaption>
                                </figure>
                                <figure class="col-md-6">
                                    <img src="images/delicious_2.jpg" alt="image-menu-déjeuner"class="d-none d-md-block">
                                    <figcaption class="text-left mx-2">
                                        <h5>Déjeuner</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis 
                                            deserunt illum dignissimos sequi consequatur sed. Modi ipsam 
                                        </p>
                                        <a href="#" class="btn btn-outline-dark">Commander</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- pb:espace entre les deux lignes -->
                            <div class="row">
                                <figure class="col-md-6">
                                    <img src="images/delicious_3.jpg" alt="image-menu-dinner"class="d-none d-md-block">
                                    <figcaption class="text-left mx-2">
                                        <h5>Dinner</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis 
                                            deserunt illum dignissimos sequi consequatur sed. Modi ipsam 
                                        </p>
                                        <a href="#" class="btn btn-outline-dark">Commander</a>
                                    </figcaption>
                                </figure>
                                <figure class="col-md-6">
                                    <img src="images/delicious_4.jpg" alt="image-menu-fast-food"class="d-none d-md-block">
                                    <figcaption class="text-left mx-2">
                                        <h5>Fast-Food</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis 
                                            deserunt illum dignissimos sequi consequatur sed. Modi ipsam 
                                        </p>
                                        <a href="#" class="btn btn-outline-dark">Commander</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                </section>

                <section id="nos-plats" class="text-center mt-2">
                    <div class="container">
                        <h3>Nos plats</h3>
                        <p class="texte-couleur-principale">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
                                consequuntur? Omnis possimus numquam beatae quaerat asperiores praesentium eaque 
                                dignissimos maxime amet deserunt, iusto dolores at iure 
                                architecto sed cumque corporis!
                        </p>
                    </div>
                    <div class="container-fluid">
                        <div class="row justify-content-center" >
                            <a href="#">
                                <figure>
                                    <div class="effet-hover">
                                        <img src="images/1.jpg" alt="image galerie 1" >
                                    </div>
                                    <figcaption class="align-items-left effet-hover">
                                        <h4>Plat 1</h4>
                                        <p>
                                            Plat 1
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure>
                                    <div class="effet-hover">
                                        <img src="images/2.jpg" alt="image galerie 2" >
                                    </div>
                                    <figcaption>
                                        <h4>Plat 2</h4>
                                        <p>
                                            Plat 2
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure>
                                    <div class="effet-hover">
                                        <img src="images/3.jpg" alt="image galerie 3" >
                                    </div>
                                    <figcaption>
                                        <h4>Plat 3</h4>
                                        <p>
                                            Plat 3
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure>
                                    <div class="effet-hover">
                                        <img src="images/4.jpg" alt="image galerie 4" >
                                    </div>
                                    <figcaption>
                                        <h4>Plat 4</h4>
                                        <p>
                                            Plat 4
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure>
                                    <div class="effet-hover">
                                        <img src="images/5.jpg" alt="image galerie 5" >
                                    </div>
                                    <figcaption>
                                        <h4>Plat 5</h4>
                                        <p>
                                            Plat 5
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure>
                                    <div class="effet-hover">
                                        <img src="images/6.jpg" alt="image galerie 6" >
                                    </div>
                                    <figcaption>
                                        <h4>Plat 6</h4>
                                        <p>
                                            Plat 6
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure>
                                    <div class="effet-hover">
                                        <img src="images/7.jpg" alt="image galerie 7" >
                                    </div>
                                    <figcaption>
                                        <h4>Plat 7</h4>
                                        <p>
                                            plat 7
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure>
                                    <div class="effet-hover">
                                        <img src="images/8.jpg" alt="image galerie 8" >
                                    </div>
                                    <figcaption>
                                        <h4>Plat 8</h4>
                                        <p>
                                            Plat 8
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </section>
                <section id="equipe" class="container text-center mt-2">
                    <h3>Notre équipe</h3>
                    <p class="texte-couleur-principale">
                        lorem ipsum dolor
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-4 mt-3">
                            <img src="images/chef-1.jpg" alt="image-chef-1" class="rounded-circle">
                            <p>
                                <strong class="text-capitalize">Titre chef</strong>
                                <br>
                                <small class="texte-couleur-principale">commentaire chef</small>
                            </p>
                        </div>
                        <div class="col-md-4 mt-3">
                            <img src="images/chef-2.jpg" alt="image-chef-2" class="rounded-circle">
                            <p>
                                <strong class="text-capitalize">Titre chef</strong>
                                <br>
                                <small class="texte-couleur-principale">commentaire chef</small>
                            </p>
                        </div>
                        <div class="col-md-4 mt-3">
                            <img src="images/chef-3.jpg" alt="image-chef-3" class="rounded-circle">
                            <p>
                                <strong class="text-capitalize">Titre chef</strong>
                                <br>
                                <small class="texte-couleur-principale">commentaire chef</small>
                            </p>
                        </div>
                    </div>
                </section>
                <section id="deco" class="row justify-content-center align-items-center mt-2">
                    <div class="col-md-6 text-center">
                        <!-- pb: barre non centré  avec le texte-->
                        <div class="barre-deco"></div>
                        <h2>Lorem ipsum dolor</h2>
                        <div class="barre-deco"></div>
                    </div>
                </section>
                <section id="reservation" class="container mb-3">
                    <div class="row justify-content-center mb-5 mt-3">
                        <div class="col-md-6 text-center">
                            <h3>Réservation</h3>
                            <p class="texte-couleur-principale h4"> adaptés à vos envies</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <input type="date" class="form-control" id="date-res">
                        </div>
                        <div class="col-md-2">
                            <input type="time" class="form-control" id="heure-res">
                        </div>
                        <div><span class="material-icons md-14">people</span></div>
                        <div class="col-md-2">
                            <select class="form-control" id="nombrePersonnes">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <a href="#" class="btn btn-outline-dark">Réserver</a>
                    </div>
                </section>
                <!-- pb: image saute entre les différent slide -->
                <section id="commentaire" class="align-items-center">
                    <div id="carousel-commentaire" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-commentaire" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-commentaire" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <blockquote class="blockquote text-center pt-2">
                                    <p>
                                        <img src="./images/chef-thumb.jpg" alt="miniature-chef" class="rounded-circle justify-content-center">
                                        <br>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere veniam animi voluptatum eius, 
                                    </p>
                                    <div class="blockquote-footer">Raphaël Simon</div>
                                </blockquote>
                            </div>
                            <div class="carousel-item">
                                <blockquote class="blockquote text-center pt-2">
                                    <p>
                                        <img src="./images/chef-thumb.jpg" alt="miniature-chef" class="rounded-circle justify-content-center">
                                        <br>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere veniam animi voluptatum eius, 
                                    </p>
                                    <div class="blockquote-footer">Raphaël Simon</div>
                                </blockquote>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-commentaire" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-commentaire" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </section>
                <section id="blog" class="container mt-2">
                        <h3 class="text-center">Notre Blog</h3>
                        <p class="text-center texte-couleur-principale">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            Exercitationem ducimus atque, vero doloribus libero odio provident 
                        </p>
                        <div class="card-deck">
                            <div class="card">
                              <img src="./images/news-1.jpg" class="card-img-top" alt="blog-new-1">
                              <div class="card-body">
                                <h5 class="card-title">Carte 1</h5>
                                <h6 class="card-text texte-couleur-">17 Juiller 2020 par AuteurXYZ</h6>
                                <p class="card-text pb-3">LLorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate earum fugit sit incidunt vel error distinctio deleniti accusantiu</p>
                                <a href="#" class="text-decoration-none">+ details</a>
                              </div>
                            </div>
                            <div class="card">
                              <img src="./images/news-2.jpg" class="card-img-top" alt="blog-news-2">
                              <div class="card-body">
                                <h5 class="card-title">Carte 2</h5>
                                <h6 class="card-text">17 Juiller 2020 par AuteurXYZ</h6>
                                <p class="card-text pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate earum fugit sit incidunt vel error distinctio deleniti accusantium</p>
                                <a href="#" class="text-decoration-none">+ details</a>
                              </div>
                            </div>
                            <div class="card">
                              <img src="./images/news-3.jpg" class="card-img-top" alt="blog-news-3">
                              <div class="card-body">
                                <h5 class="card-title">Carte 3</h5>
                                <h6 class="card-text">17 Juiller 2020 par AuteurXYZ</h6>
                                <p class="card-text pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni fuga tempore neque beatae natus cupiditate explicabo commodi quisquam eius</p>
                                <a href="#" class="text-decoration-none">+ details</a>
                              </div>
                            </div>
                          </div>
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
                </section>
                
            </main>

                    <!-- JavaScript Bundle with Popper -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        </body>
  </html>