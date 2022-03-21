

<?php
$conn = new mysqli("localhost", "root", "", "utilisateur");
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

//echo "Connexion succeed\n";
$response = array();
$req =  mysqli_query($conn,"select * from utitilisateur");

if(mysqli_num_rows($req) >  0){
	
	$tmp=array();
	$response["utitilisateur"]=array();
	
	while($cur=mysqli_fetch_array($req))
	{
		$tmp["id"]= $cur["id"];
		$tmp["nom"]=$cur["nom"];
		$tmp["prenom"]=$cur["prenom"];
		$tmp["dateNaissance"]=$cur["datenaissance"];
		$tmp["aimeCours"]=$cur["aimecours"];
		$tmp["remarques"]=$cur["remarques"];
		
		array_push($response["utitilisateur"],$tmp);
	}
	$response["success"]=1;
	echo json_encode($response);
		
}
else
{
	$response["success"]=0;
	$response["message"]="no data found";
	echo json_encode($response);
	
}


?>