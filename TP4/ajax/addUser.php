<?php
    if(isset($_POST['nom'])) {
        try{ 
            // Connexion à la BDD
        $bdd=new PDO('mysql:host=localhost; dbname=utilisateur', 'root','');
        }

        catch(Exception $e){
        die ('Erreur:'.$e->getMessage());
        }
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $naissance = $_POST['dateNaissance'];
        $aime =  $_POST['aimeCours'];
        $remarques =  $_POST['remarques'];
        if(empty($_POST['id'])){
            $query =  "INSERT INTO utitilisateur(nom,prenom,datenaissance,aimecours,remarques) VALUES ('$nom', '$prenom', '$naissance', '$aime', '$remarques')";  
        }  
        else{
            $id = $_POST['id'];
            $query = "UPDATE utitilisateur SET  nom ='$nom' , prenom ='$prenom', datenaissance = '$naissance' ,aimecours ='$aime',remarques = '$remarques' WHERE id= '$id' " ; 
        } 
        
        $insertion=$bdd->prepare($query);

        $insertion -> execute(array(
        'nom'=>$nom,
        'prenom'=>$prenom,
        'datenaissance'=>$naissance,
        'aimecours'=>$aime,
        'remarques'=>$remarques,
        ));
        
        if($insertion==true) {
        echo '<p> Les données ont bien été enregistrées</p>';
        }

        else {
        echo '<p>Erreur lors de l\'enregistrement des données </p>';
        }

        $insertion->closeCursor(); // déconnexion
    }

    else echo "erreur";
?>