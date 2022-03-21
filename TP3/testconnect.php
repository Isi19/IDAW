<?php
$conn = new mysqli("localhost", "root", "", "utilisateur");
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

//echo "Connexion succeed\n";
$response = array();
$req =  mysqli_query($conn,"select * from utilisateur");
/*
if(mysqli_num_rows($req) >  0){
	
	$tmp=array();
	$response["utilisateur"]=array();
	
	while($cur=mysqli_fetch_array($req))
	{
		$tmp["id"]= $cur["id"];
		$tmp["login"]=$cur["login"];
		$tmp["password"]=$cur["password"];
		
		array_push($response["utilisateur"],$tmp);
	}
	$response["success"]=1;
	echo json_encode($response);
		
}*/

$nbrows= mysqli_num_rows($req);

$nbfields=  mysqli_num_fields($req);

echo "<table>";
for($i=0; $i < $nbrows; $i++) {
    $line =  mysqli_fetch_row($req);
    echo "<tr>";
    echo "<th> $line[0] </th>";
    echo "<td> $line[1] </td>";
    echo "<td> $line[2] </td>";

    echo "</tr>";
}
echo "</table>";


?>