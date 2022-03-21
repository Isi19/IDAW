<?php
$cookie_name ="css";
$cookie_value = "style1";

if(isset($_GET['css']))
    $cookie_value =$_GET['css'];
setcookie($cookie_name,$cookie_value,time()+ 3600);
?>


<form id="style_form" action="index1.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<?php



if(isset($_COOKIE['css'])){
    $_COOKIE['css'] = $_GET['css'];
    $b =  $_COOKIE['css']; 
    echo "<link rel=\"stylesheet\" href=\"$b.css\">" ;
}
    
else{
    if (isset($_GET['css']))
        $c = $_GET['css'];
        echo "<link rel=\"stylesheet\" href=\"$c.css\">" ;
}


?>





