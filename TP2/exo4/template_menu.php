
<?php
function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
    

    $mymenu = array(
    // idPage titre
    'index' => array( 'Accueil' ),
    'cv' => array( 'Cv' ),
    'projets' => array('Mes Projets')
    );


    echo "<nav class='menu'><ul>";
    $html="";

    foreach($mymenu as $pageId => $pageParameters) {
        if($pageId==$currentPageId)
            $html.="<li><a id = currentPageId href=\"$pageId.php\">".$pageParameters[0]."</a>/li>";
        else 
            $html.= "<li><a href=\"$pageId.php\">".$pageParameters[0]."</a>/li>";
    }
    echo $html;
    echo "</ul></nav>";

    }
?>
    