<?php
function verificaSeLogado()
{
    //futuramemte vira di banco de dados
    $usuario = 'carlos@hot';
    $senha = '123456';

    if ($_POST['usuario'] == $usuario) {
        echo 'igual';
    

    }else{
        echo 'usuario e senha não confere';
    }
}