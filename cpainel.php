<!-- 

if (isset($_SESSION['usuario'])) {
    $usuario = 'carlos@hotmail.com';
    $senha = '12456';

    session_start();

    $_SESSION['usuario'] = $usuario;
    $_SESSION['email'] = $senha;

    
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['email'] = $_POST['email'];


switch ($_GET['pg']) {
    case 'cpainel':
        include_once "app/paineladm/index.php";
        break;

    case 'login':
        include_once "app/paineladm/index.php";
        break;
    
    default:
        code...
        break;
}
}else{
    include_once "app/paineladm/index.php";

};


echo '<hr>';

//Rodapé
include_once "app/paginas/includes/footer.php"; -->

<?php
include_once "app/paineladm/helpers/helperadm.php";

session_start();
//echo $_SESSION['usuario'];

//Definindo Variavel
$pg = 'cpainel';

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
}

//verifica se ha alguem logado
if (isset($_SESSION['usuario'])) {

    switch ($pg) {
        case 'cpainel':
            include_once "app/paineladm/paginas/includes/header.php";

            include_once "app/paineladm/paginas/includes/navegação.php";

            include_once "app/paineladm/paginas/inicial.php";

            include_once "app/paineladm/paginas/contato.php";
            
            include_once "app/paineladm/paginas/produtos.php";
            
            include_once "app/paineladm/paginas/includes/footer.php";
            break;

        case 'sair':
            session_destroy();
            header('location: ' .$_SERVER['PHP_SELF']);

            break;

        default:
            include_once "app/paineladm/paginas/includes/header.php";

            include_once "app/paineladm/paginas/includes/navegação.php";

            include_once "app/paineladm/paginas/inicial.php";
            
            include_once "app/paineladm/paginas/includes/footer.php";
            break;
    }
} else {
    //include_once "app/paineladm/paginas/login.php";
    //verifica se foi submetido algum metodo POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (verificaSeLogado()) {
            include_once "app/paineladm/paginas/includes/header.php";

            include_once "app/paineladm/paginas/includes/navegação.php";

            include_once "app/paineladm/paginas/inicial.php";
            
            include_once "app/paineladm/paginas/includes/footer.php";
        }
        //echo "o metodo foi igual a post";
    } else {
        include_once "app/paineladm/paginas/login.php";
        //echo 'não houve submissão de formulario';
    }
}
