<?php   
//header
include_once "app/paginas/includes/header.php";

//navegação
include_once "app/paginas/includes/navegação.php";

echo "hr'";

//Fim Header
include_once "app/paginas/includes/footer.php";

//Páginas do meu Site

//Fim Páginas do meu Site


//Rodapé

//o certo
  
<?php
// Header
include_once "app/site/paginas/includes/header.php";

// Navegação 
include_once "app/site/paginas/includes/navegacao.php";

echo "<hr>";

// Páginas do meu Site 
//echo '<h1>Minhas Páginas</h1>';
$paginas=  isset($_GET['pg']);
if ($paginas) {
    
    # code...

} else {
    # code...
}

echo '<hr>';

// Rodapé
include_once "app/site/paginas/includes/footer.php";