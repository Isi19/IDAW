<?php

$conn = new mysqli("localhost", "root", "", "utilisateur");
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

$id = $_POST['id'];
$query="SELECT * from utitilisateur WHERE id = '" . $id . "'";
$result = mysqli_query($conn,$query);
$cust = mysqli_fetch_array($result);
if($cust) {
echo json_encode($cust);
} else {
echo "Error: " . mysqli_error($conn);
}
?>