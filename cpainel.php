<?php
$paginas= isset($_GET['pg']);

if ($paginas) {
    # code...
    switch ($_GET['pg']) {
        
        case 'cpainel':
            include_once "app/paineladm/paginas/login.php";
            break;
        
        default:
        include_once "app/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/paginas/inicial.php";
}


echo '<hr>';

// Rodapé
//include_once "app/paginas/includes/footer.php";