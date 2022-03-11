<?php
    require_once("template_header.php");
    $currentlang = "fr";
    if(isset($_GET['lang'])) {
    $currentlang = $_GET['lang'];
    }
    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
    }

?>

<header>
        <h1>
        <?php
        $pages = array(
            'accueil' => array( 'Accueil', 'Site Personnel' ),
            'cv' => array( 'Cv', 'CV d'."'".' Isidore' ),
            'projets' => array('Mes Projets', 'Mes projets'),
            'contacts' => array('Contacts', "Contactez nous")
            );
        $pages_en = array(
            // idPage titre
            'accueil' => array( 'Welcome','Personal website' ),
            'cv' => array( 'Cv','Isdore'."'".'s CV' ),
            'projets' => array('My Projects', 'My Projects'),
            'contacts' => array('Contacts', 'Contact us')
            );

        switch ($currentlang) {
            case "fr":
                echo $pages[$currentPageId][1];
                break;
        
            case "en":
                echo $pages_en[$currentPageId][1];
                break;
        
            default:
            echo $pages[$currentPageId][1];
        }
         ?>
        </h1>

        <div class="language-link">
        <a class="language-link-item" href="index.php?page=<?php echo $currentPageId ?>&&lang=fr"
            <?php if($currentlang == 'fr'){?> style="color: #ff9900;"<?php } ?>>Français</a> 

        <a class="language-link-item" href="index.php?page=<?php echo $currentPageId ?>&&lang=en" <?php if($currentlang == 'en'){?>
            style="color: #ff9900;" <?php } ?>>Anglais</a>
        </div>

 </header>

    <?php
    require_once('template_menu.php');
    renderMenuToHTML($currentPageId,$currentlang);
    ?>


    <?php

    switch ($currentlang) {
        case "fr":
            $pageToInclude = $currentlang."/".$currentPageId.".php";
            break;

        case "en":
            $pageToInclude = $currentlang."/".$currentPageId.".php";
            break;

        default:
        $pageToInclude = "fr/".$currentPageId.".php";
    }
    if(is_readable($pageToInclude))
    require_once($pageToInclude);
    else
    require_once("error.php");
    ?>

<?php
    require_once("template_footer.php");
?>



