<!DOCTYPE html>
<html><!-- Debut html-->
<head>
     <!------------------------------------------------------------------
                         PLUGINS CSS
     ------------------------------------------------------------------->
        <title>w2days</title>
        <meta charset="utf-8" />
        <link rel="ico" href="favicon.ico">
		<meta name='viewport' content='width=device-width, initial-scale=1'> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.0.0/flatly/bootstrap.min.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' crossorigin='anonymous'>
        <link rel="stylesheet" type="text/css" href="css/captcha.css" />  
		<link rel="stylesheet" href="css/style.css" />    
        <link rel="stylesheet" href="css/contact.css" />
</head>
<body><!-- Debut body-->


    <!------------------------------------------------------------------
                        MENUS, SLIDER ET LOGO
    ------------------------------------------------------------------->

    <!-- Debut de la section 1 -->
    <section id= "entete">
        <div id="entete-fixe">
            <!-- Logo -->
            <header>
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
            <p id="text-slide">TopNetServices toujours à votre disposition </p>
        <!-- Slider -->
        <div id="slider">
            <video src="image/services/contact.mp4" poster="contact.mp4"  loop autoplay></video><!-- controls: permet d'aficher le play de la video -->
        </div>
    </section> <!-- EO de la section 1-->


    <!------------------------------------------------------------------
                                CONTACT
    ------------------------------------------------------------------->

    <!-- Debut de la section 2 -->
    <section class="contenu_contact">
        <!-- Bureau principal -->
        <div class="adresses">
            <div id="bureau-agence">
                <h2>Bureau principal</h2>
                <hr>
                <ul>
                    <li><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10586.856338871186!2d1.4946334338748406!3d48.44282700394399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e40d330b9f8a55%3A0x495998ada34128b7!2sAFPA!5e0!3m2!1sfr!2sfr!4v1572259214107!5m2!1sfr!2sfr" style="color:#ffffff" target="_blank" allowfullscreen> 7 rue du général de Gaulle, 28600 Luisant</a></li>
                    <li>06 00 00 00 00</li>
                    <li>contact@topnetservices.com</li>
                </ul>
            </div>
            <video src="image/services/maps.mp4" class="video_maps" poster="maps.mp4"  loop autoplay></video>
        </div><!-- EO Bureau principal -->

        <!-- Debut du Formulaire de contact-->
        <div class="formulaire">
            <div id="bloc_titre_contact">
                <h1> CONTACT </h1>
            </div>
            <!-- Debut de form-->
            <form validate="true" method="POST" action="databasew2days.php">
                <div class="form-group">
                    <label for="Nom & Prénom">Nom & Prénom</label>
                    <input type="text" name="nom_prenom" class="form-control"  placeholder="Votre nom et prénom" required>
                </div>
                <div class="form-group">
                    <label for="Entreprise">Entreprise</label>
                    <input name="entreprise" type="text" name="entreprise" class="form-control" placeholder="Le nom de l'entreprise" required>
                </div>
                <div class="form-group">
                    <label for="E-mail">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Votre adresse mail" required>
                </div>
                <div class="form-group">
                    <label for="Tel">Tél</label>
                    <input class="form-control" name="telephone" type="text" placeholder="Votre numéro de téléphone">
                </div>
                <div class="form-group">
                    <label for="Nationnalite">Nationnalité</label>
                    <select name="pays" class="form-control" required>
                        <option value="Selectionner votre nationnalité" selected="selected">Selectionner votre nationnalité</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                            <option value="Congo, Republic of the">Congo, Republic of the</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaçao">Curaçao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="North Korea">North Korea</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestine, State of">Palestine, State of</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Martin">Saint Martin</option>
                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sint Maarten">Sint Maarten</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Korea">South Korea</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Sudan, South">Sudan, South</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City">Vatican City</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Sujet">Sujet</label>
                    <input type="text" name="sujet" class="form-control" placeholder="Le sujet de votre prise de contact" required>
                </div>
                <div class="form-group">
                    <label for="Sujet">Message</label>
                    <textarea type="text" name="message_info" class="form-control" placeholder="Votre message" required></textarea>
                </div>

                <!--div class="form-group">
                    <p>Choisissez l'image png ou jpg; taille entre [50kb - 100 kb]
                        <input type="file" data-file-types="image/jpeg,image/png" data-file-max-size="100kb"data-file-min-size="50kb" required>
                    </p>
                </div>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
                <--?php
                    $corps = '';
                    $rand = '';
                    $chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    for($i=0; $i<5; $i++) { // on genere les 5 caracteres 
                        $carac = strlen($chaine);
                        $carac = rand(0,($carac-1));
                        $rand .= $chaine[$carac];
                    }
                ?>
                <div class="form-group" id="captcha">
                    <label for="captcha">Saisissez ce code :</label>
                    <input type="text" name="captcha" id="captcha" size="10"/>
                    <span class="code_captcha">
                        <img src="image.php?mot=<-?php echo $rand;?>" alt="image captcha"/>
                    </span>
                    <br /><span id="msg_captcha" class="msg_erreur"></span>
                </div-->
                <div class="checkbox-form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="accepter" value="true" required="required"><a href="#" target="_blank">En cochant cette case, j’accepte la Politique de confidentialité de ce site</a></label>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form><!-- EO de form-->
        </div><!-- EO du Formulaire de contact-->
    </section><!-- EO de la section 2 -->


    <!------------------------------------------------------------------
                                FOOTER
    ------------------------------------------------------------------->
    <!-- Debut de footer-->
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
    </footer> <!-- EO de footer--> 
    
    <script src="js/menu.js"></script> 
</body><!-- EO de body--> 
</html><!-- EO de html--> 