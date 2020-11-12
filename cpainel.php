<?php
// Header
include_once "app/paginas/includes/header.php";

// Navegação 
include_once "app/paginas/includes/navegação.php";

echo "<hr>";

// Páginas do meu Site 
// echo '<h1>Minhas Páginas</h1>';

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