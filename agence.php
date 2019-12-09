<!DOCTYPE html>
<html>
<head>
    <!------------------------------------------------------------------
                        PLUGINS CSS
    ------------------------------------------------------------------->
    <title>w2days</title>
    <meta charset="utf-8" />
    <link rel="ico" href="favicon.ico" /> 
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/agence.css" />
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' crossorigin='anonymous' />   
</head>
<body>


    <!------------------------------------------------------------------
                                 MENUS & ENTETE
    ------------------------------------------------------------------->

	 <!-- Debut de la section 1 -->
    <section id= "entete">
        <div id= "entete-fixe">
            <header>
                <!-- Logo -->
                <a href= "index.php"><img alt= "logo" src= "image/logo.png" /></a>
                <!-- Menus -->
                <nav id="cssmenu">
                    <ul>
                        <li><a href= "index.php">Accueil</a></li>
                        <li><a href= "presentation.php">Agence</a></li>
                        <li><a href= "service.php">services</a></li>
                        <li><a href= "contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div id= "bloc-slide">
            <!-- Entête -->
            <div id= "slider">
                <img alt ="slider7" href= "index.php" src = "image/presentation/presentation.png"/>
            </div>
        </div>  
    </section> <!-- EO de la section 1 -->	


    <!------------------------------------------------------------------
                                 NOS VALEURS
    ------------------------------------------------------------------->

    <!-- Debut de la section 2 -->
    <section>
        <h1>NOS VALEURS </h1>
        <!-- debut Trois valeurs principales-->
        <div class="container">
            <!-- Valeur 1 -->
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                        <h3>Design</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">lire plus</a>
                    </div>
                </div>
            </div>
            <!-- Valeur 2 -->
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                        <h3>Code source</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">lire plus</a>
                    </div>
                </div>
            </div>
            <!-- Valeur 3 -->
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                        <h3>Réalisations</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        <a href="#">lire plus</a>
                    </div>
                </div>
            </div>
        </div><!-- EO Trois valeurs principales-->

        <!-- Liens de quelques projets dejà réalisés -->
        <div id="features" class="section lb">
            <div class="">
                <!-- titre -->
                <div class="section-title text-center">
                    <h3>Nous vous offrons une gamme des services réalisées</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div><!-- EO titre -->

                <!-- quelques projets réalisés -->
                <div class="row">
                    <!-- Debut col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="features-left">
                            <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                                <i class="flaticon-coding"></i>
                                <div class="fl-inner">
                                    <h4>TIEMAN HUBERT COULIBALY</h4>
                                    <p>Le site de l'ancien ministre de l'etranger : <a target="_blank" href="http://tiemanhubertcoulibaly.com/">www.tiemanhubertcoulibaly.com</a> </p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                <i class="flaticon-windows"></i>
                                <div class="fl-inner">
                                    <h4>MARIE STOPES</h4>
                                    <p>Formulaires/questionnaires en ligne (base de données) : <a target="_blank" href="http://www.dambemuso.org/">www.dambemuso.org</a></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                                <i class="flaticon-price-tag"></i>
                                <div class="fl-inner">
                                    <h4>PARTI UDD</h4>
                                    <p>Conception d’un site web dynamique www.parti-udd.com : <a target="_blank" href="http://www.parti-udd.com/">www.parti-udd.com</a></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <i class="flaticon-new-file"></i>
                                <div class="fl-inner">
                                    <h4>CREATEAM</h4>
                                    <p>Site web & élaboration de la campagne digitale et e-réputation : <a target="_blank" href="http://www.createam.ml/">www.createam.ml</a></p>
                                </div>
                            </li>
                        </ul>
                    </div><!-- EO col -->

                    <!-- Image portable -->
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <img src="image/presentation/ipad.png" class="img-center img-responsive" alt="">
                    </div><!-- EO image portable -->
                    <!-- Debut col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="features-right">
                            <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                <i class="flaticon-pantone"></i>
                                <div class="fr-inner">
                                    <h4>SOUDAN IMMO</h4>
                                    <p>Site en production, veillez revenir très prochainnement : <a target="_blank" href="#">www.soudanimmo.org</a></p>
                                </div>
                            </li>
                            <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                <i class="flaticon-cloud-computing"></i>
                                <div class="fr-inner">
                                    <h4>CEFCI</h4>
                                    <p>Un cabinet d’études de formations et de conseils en investissement :<a target="_blank" href="http://www.cefci.pro/">www.cefci.pro</a></p>
                                </div>
                            </li>
                            <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                                <i class="flaticon-line-graph"></i>
                                <div class="fr-inner">
                                    <h4>VOOLINKS</h4>
                                    <p>Une agence digitale réalisant des solutions applicatives et innovantes:<a target="_blank" href="http://www.voolinks.com/">www.voolinks.com</a> </p>
                                </div>
                            </li>
                            <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <i class="flaticon-wordpress-logo"></i>
                                <div class="fr-inner">
                                    <h4>SIECLE</h4>
                                    <p>Une application pour le ministère de l’éducation Malien et la Banque Mondiale</p>
                                </div>
                            </li>
                        </ul>
                    </div><!-- EO col -->
                </div><!-- quelques projets réalisés -->
            </div><!-- EO container -->
        </div><!-- EO Liens de quelques projets dejà réalisés-->
    </section>


    <!------------------------------------------------------------------
                                 NOS VALEURS
    ------------------------------------------------------------------->

    <!-- Debut de footer -->                                   
    <footer>
        <div class="service-info-payement">
            <div id="service-client">
                <h2>Service clients</h2>
                <ul>
                    <li><a href="contact.php">Contactez-nous</a></li>
                    <li>Aide</li>
                </ul>
            </div>
            <div id="informations">
                <h2>Informations</h2>
                <ul>
                    <li>Conditions générales d'utilisation</li>
                    <li>RDGP</li>
                </ul>
            </div>
            <div id="payement-securise">
                <h2>Payement Securisé</h2>
                <div id="ico-payement">
                <a href="payement.php" target="_blank"><img src="image/cartes/cb-visa-mastercard.jpg"></a>
                </div>
            </div>
        </div>
            <hr id="hr">
            <div class="social-content">
                <b>Suivez nous:  </b>
                <a href="https://www.facebook.com/TopNetService/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
                 |   © 2019  Tous droits réservés.                      
            </div>
    </footer>  <!-- Debut de footer -->  

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>  
    <script src="js/modernizer.js"></script>
    <script src="js/menu.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</body>

</html>