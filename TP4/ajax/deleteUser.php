<?php
$conn = new mysqli("localhost", "root", "", "utilisateur");
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
$id = $_POST['id'];
$query = "DELETE FROM utitilisateur WHERE id='" . $id . "'";
$res = mysqli_query($conn, $query);
if($res) {
echo json_encode($res);
} else {
echo "Error: "  . mysqli_error($conn);
}
?>