
<?php



function renderMenuToHTML($currentPageId,$currentlang) {
    // un tableau qui d\'efinit la structure du site
    $monmenu = array(
    // idPage titre
    'accueil' => array( 'Accueil' ),
    'cv' => array( 'Cv' ),
    'projets' => array('Mes Projets'),
    'contacts' => array('Contacts')
    );
    $mymenu = array(
        // idPage titre
        'accueil' => array( 'Welcome' ),
        'cv' => array( 'Cv' ),
        'projets' => array('My Projects'),
        'contacts' => array('Contacts')
        );

    
    echo "<nav class='menu'><ul>";


    /*if ($currentlang="fr"){
        $htmlfr="";
        foreach($monmenu as $pageId => $pageParameters) {
            if($pageId==$currentPageId)
                $htmlfr.="<li><a id = currentPageId href=\"index.php?page=$pageId&&lang=$currentlang\">".$pageParameters[0]."</a></li>";
            else 
                $htmlfr.= "<li><a href=\"index.php?page=$pageId&&lang=$currentlang\">".$pageParameters[0]."</a></li>";
        }
        echo $htmlfr;
        echo "</ul></nav>";

    }*/


    if($currentlang=="en"){
        $htmlen="";
        foreach($mymenu as $pageId => $pageParameter) {
            if($pageId==$currentPageId)
                $htmlen.="<li><a id = currentPageId href=\"index.php?page=$pageId&&lang=$currentlang\">".$pageParameter[0]."</a></li>";
            else 
                $htmlen.= "<li><a href=\"index.php?page=$pageId&&lang=$currentlang\">".$pageParameter[0]."</a></li>";
        }
        echo $htmlen;
        echo "</ul></nav>";

    }

    else{

        $html="";
        foreach($monmenu as $pageId => $pageParameters) {
            if($pageId==$currentPageId)
                $html.="<li><a id = currentPageId href=\"index.php?page=$pageId\">".$pageParameters[0]."</a></li>";
            else 
                $html.= "<li><a href=\"index.php?page=$pageId\">".$pageParameters[0]."</a></li>";
        }
        echo $html;
        echo "</ul></nav>";
    }
    }
    
?>
    