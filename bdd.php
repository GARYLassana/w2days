<?php
        // Connexion à la base de données
        try
        {
                $bdd = new PDO('mysql:host=localhost; dbname=projet_w2days; charset=utf8', 'root', '');

                // Insertion du message à l'aide d'une requête préparée
                $req = $bdd->prepare('INSERT INTO contact_w2days (nom_prenom, entreprise, email, telephone, pays, sujet, message_info, accepter) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
                $req->execute(array($_POST['nom_prenom'], $_POST['entreprise'], $_POST["email"], $_POST['telephone'], $_POST['pays'], $_POST['sujet'], $_POST['message_info'], $_POST['accepter']));
        
                echo 'Les infos ont bien été ajoutés !';
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

?>