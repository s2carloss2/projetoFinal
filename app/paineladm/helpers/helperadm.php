<?php
function verificaSeLogado()
{
    //futuramemte vira di banco de dados
    $usuario = 'carlos@hot';
    $senha = '123456';

    if ($_POST['usuario'] == $usuario) {
        $_SESSION['usuario']=$usuario;
        $_SESSION['senha']=$senha;
        return true;
        //echo 'igual';
    

    }else{
        echo 'usuario e senha não confere';
    }
}