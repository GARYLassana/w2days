<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ----------------------------------------------------------------
                        PLUGINS CSS & JS
    ----------------------------------------------------------------- -->
    <title>w2days</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' crossorigin='anonymous'> 
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery.js"></script>
</head>

<body>


    <!-- ----------------------------------------------------------------
                        MENUS & LOGO
    ----------------------------------------------------------------- -->

    <!-- Debut de la section 1 -->
    <section id= "entete">
        <div id="entete-fixe">
            <header>
                <!-- Logo -->
    	       	<a href="index.php"><img alt="logo" src="image/logo.png" /></a>
                   <!-- Menus -->
                <nav id="cssmenu">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="agence.php">Agence</a></li>
                        <li><a href="service.php">services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>                
            </header>
        </div>
            <p id="text-slide">TOPNETSERVICES Anticipe et pilote l'innovation</p>     
    </section> 
    <!-- EO de la section 1 -->


	<!------------------------------------------------------------------
                        MENUS & LOGO
    ------------------------------------------------------------------->

    <!-- Dedut de la section 2 -->
    <section id="carrousel">
        <div id="wrapper">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider"> 
                    <img alt ="slider1" src="image/slides/slider1.png" /> 
                    <img alt ="slider2" src="image/slides/slider2.png" />
                    <img alt ="slider3" src="image/slides/slider3.png" /> 
                    <img alt ="slider4" src="image/slides/slider4.png" /> 
                    <img alt ="slider5" src="image/slides/slider5.png" /> 
                </div>
            </div>
        </div>
    </section>
    <!-- EO de la section 2 -->


    <!------------------------------------------------------------------
                        BLOC AGENCE
    ------------------------------------------------------------------->

    <!-- Debut de la section 3 -->
    <section> 
        <div class="bloc_agence">

            <!-- EO Titre Agence -->
            <div id="bloc_titre1">
                <h1> AGENCE WEB TOPNETSERVICES </h1>
                <hr id="hr1" />
                <hr id="hr2" />
            </div>
            <video src="image/services/service.mp4" poster="service.mp4"  loop autoplay controls></video>
            <div id="desc_agence">
                <h2>Une agence à vos côtés</h2>
                <hr/>
                <p> Spécialiste des technologies web et du développement de logiciels, TOPNETSERVICES est une agence digitale réalisant des solutions applicatives en ligne sur mesure originales et innovantes.</p>
                <p> Basé en France avec une représentation en internationnale, nous avons réalisé des missions en France et en Afrique (Mali, Benin, Niger, Burkina Faso, Sénégal, Ethiopie etc….).Nous sommes intervenus sur des projets dans de nombreux secteurs, aussi bien pour le compte de PME, d’entrepreneurs que de grands groupes internationaux.</p> 
                <p> Nos ingénieurs développeurs et nos consultants sauront répondre aux défis techniques de chaque projet. Cette maitrise technologique nous permet de réaliser des sites web, des applis mobiles ou des applications métiers sur mesure et d’intégrer les principales solutions technologiques innovantes.</p>
                <em id="lire-plus"><a href="presentation.php">Lire plus...</a></em>
            </div>
        </div> 
    </section><!-- EO de la section 3 -->


   <!------------------------------------------------------------------
                        BLOC SERVICES
    -------------------------------------------------------------------> 

    <!-- Debut de la section 4 -->
    <section>
        <div id="bloc_titre2"><br>
            <h1> SERVICES TOPNETSERVICES </h1>
            <div>
                <hr id="hr1">
                <hr id="hr2">
            </div>
        </div>
        <div class= "desc_services"> 
            <div class= "services">
                <div class= "services_en_flex">
                    <div id= "assurance_qualite">               
                        <h1><i class='fas fa-chalkboard-teacher'></i>Plan d’assurance qualité</h1>
                        <p>Disponibilité et respect de vos valeurs. Notre souci constant sera d’établir une relation durable tout en réalisant un compromis entre performances, coûts et potentiel d’évolutivité.</p>
                    </div>
                    <div id= "innovation">
                        <h1><i class='fab fa-accusoft'></i>Innovation</h1>
                        <p>Recherche de la qualité et innovation sont nos priorités. Nous créons pour vous des solutions à la pointe de la technologie moderne.</p>
                    </div>
                </div>
                <div class= "services_en_flex">
                    <div id= "travail_collaboration">
                        <h1><i class='fas fa-users'></i>Travail collaboratif</h1>
                        <p>L’aptitude de nos experts à travailler en équipe et communiquer avec chaque client grâce à des outils de suivi et des échanges réguliers. Nous optimisons la réussite de vos projets.</p>
                    </div>
                    <div id= "objectifs">
                        <h1><i class='fas fa-chart-line'></i>Atteindre l'objectif</h1>
                        <p>Augmenter votre efficacité digitale. Web design, e-Réputation, réseaux sociaux, mobilité, applications, solutions sur mesure…</p>
                    </div>
                </div>
            </div>
                <img src= "image/services/service.jpg" alt= "service">
        </div>
    </section><!-- EO de la section 4 -->


    <!------------------------------------------------------------------
                        BLOC PROJETS
    ------------------------------------------------------------------->

    <!-- Debut de la section 5 -->
    <section>
        <div>
            <div id="bloc_titre3"><br>
                <h1> COMPETENCES TOPNETSERVICES </h1>
                <div>
                    <hr id="hr1">
                    <hr id="hr2">
                </div>
            </div>
            <div id="page">
                <div class="centrage">
                    <div id="menu-navigation">
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('PHP'); return false;" class="onglet">PHP7</a></div>
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('MySql'); return false;" class="onglet">Sql</a></div>
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('Apache'); return false;" class="onglet">HTML5 & CSS3</a></div>
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('javascript'); return false;" class="onglet">Javascript</a></div>
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('Node_js'); return false;" class="onglet">Node js</a></div>
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('Sublime_Text'); return false;" class="onglet">Express js</a></div>
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('GitHub'); return false;" class="onglet">Anjular js</a></div>
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('Sublime_Text'); return false;" class="onglet">Mongo DB</a></div>
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('Symfony4'); return false;" class="onglet">Symfony4</a></div>
                        <div class="menu-navigation-icone"><a href="#" onclick="AfficheTexte('WordPress'); return false;" class="onglet">WordPress</a></div>
                        <div style="clear: both;"></div>
                    </div>
                    <div id="contenu">
                        <div id="bloc_PHP" class="bloctexte" style="display: block;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                        </div>
                        <div id="bloc_MySql" class="bloctexte" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                        </div>
                        <div id="bloc_Apache" class="bloctexte" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                            </div>
                        <div id="bloc_javascript" class="bloctexte" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                            </div>
                        <div id="bloc_Node_js" class="bloctexte" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                        </div>
                        <div id="bloc_Symfony4" class="bloctexte" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                        </div>
                        <div id="bloc_WordPress" class="bloctexte" style="display: none;">
                            <p>ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                        </div>
                        <div id="bloc_GitHub" class="bloctexte" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                        </div>
                        <div id="bloc_Sublime_Text" class="bloctexte" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                            <p>Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- EO de la section 5 -->


    <!------------------------------------------------------------------
                                    FOOTER
    ------------------------------------------------------------------->

    <!-- Debut du footer -->
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
            <b> Suivez nous :  </b>
            <a href="https://www.facebook.com/TopNetService/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a> | © 2019 Tous droits réservés.                 
        </div>
    </footer>  <!-- EO du footer -->


    <!------------------------------------------------------------------
                            SCRIPT DU SLIDER
    ------------------------------------------------------------------->
    <!-- Debut du script slider -->
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script> <!-- EO du script slider -->

    <!-- Debut du script compétences topnetservices-->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#menu a").mouseover(function() {
                $(this).fadeTo(300, 0.4);
            });
            $("#menu a").mouseout(function() {
                $(this).fadeTo(900, 1);
            });
        });

        function AfficheTexte(nom_du_bloc){
            var id_du_bloc_a_ouvrir = "#bloc_" + nom_du_bloc;
            $(".bloctexte:visible").slideUp(300, function() {
                $(id_du_bloc_a_ouvrir).slideDown(600);
            });
        }
    </script><!-- Debut du script compétences topnetservices-->
    

    <!------------------------------------------------------------------
                        PLUGINS JS
    ------------------------------------------------------------------->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
        <script src="js/menu.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 
    </body>
</html>