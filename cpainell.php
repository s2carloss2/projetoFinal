<?php

if (isset($_SESSION['usuario'])) {
    $usuario = 'carlos@hotmail.com';
    $senha = '12456';

    session_start();

    $_SESSION['usuario'] = $usuario;
    $_SESSION['email'] = $senha;

    
    // $_SESSION['usuario'] = $_POST['usuario'];
    // $_SESSION['email'] = $_POST['email'];





switch ($_GET['pg']) {
    case 'cpainel':
        include_once "app/paineladm/index.php";
        break;

    case 'login':
        include_once "app/paineladm/index.php";
        break;
    
    default:
        # code...
        break;
}
}else{
    include_once "app/paineladm/index.php";

};