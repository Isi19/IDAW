<?php
    if(isset($_POST['login'])&& isset($_POST['password'])) {
        try{ 
            // Connexion à la BDD
        $bdd=new PDO('mysql:host=localhost; dbname=utilisateur', 'root','');
        }

        catch(Exception $e){
        die ('Erreur:'.$e->getMessage());
        }	           
        
        $insertion=$bdd->prepare('INSERT INTO utilisateur(login, password) VALUES (:login, :password)');

        $insertion->execute(array(
        'login' => $_POST['login'],
        'password' => $_POST['password'],
        ));
        
        if($insertion==true) {
        echo '<p> Les données ont bien été enregistrées</p>';
        }

        else {
        echo '<p>Erreur lors de l\'enregistrement des données </p>';
        }

        $insertion->closeCursor(); // déconnexion
    }

else echo "erreur"
?>