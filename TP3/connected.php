<?php 
    require_once("testconnect.php");
    $conn = new mysqli("localhost", "root", "", "utilisateur");
    $users = array();
    $req =  mysqli_query($conn,"select * from utilisateur");
    $nbrows= mysqli_num_rows($req);
    $nbfields=  mysqli_num_fields($req);

    for($i=0; $i < $nbrows; $i++) {
        $line =  mysqli_fetch_row($req);
        $users[$line[1]] = $line[2];
        }
// on simule une base de données
   /* $users = array(
    // login => password
    'riri' => 'fifi',
    'yoda' => 'maitrejedi' );*/
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
        // si login existe et password correspond
        if(array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
        }
        else
            $errorText = "Erreur de login/password";
        } 
    else
        $errorText = "Merci d'utiliser le formulaire de login";

    if(!$successfullyLogged) {
        echo $errorText;
    } 
    else {
        echo "<h1>Bienvenu ".$login."</h1>";
        session_start();
        $_SESSION['login'] = $login;
        if(isset($_SESSION['login']))
        echo $_SESSION['login'];
    }  


?>