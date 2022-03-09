<?php
    require_once("template_header.php");
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
        'projets' => array('Mes Projets', 'Mes projets')
        );
echo $pages[$currentPageId][1];
?>
    </h1>
</header>

    <?php
    require_once('template_menu.php');
    renderMenuToHTML($currentPageId);
    ?>


    <?php
    $pageToInclude = $currentPageId.".php";
    if(is_readable($pageToInclude))
    require_once($pageToInclude);
    else
    require_once("error.php");
    ?>

<?php
    require_once("template_footer.php");
?>



