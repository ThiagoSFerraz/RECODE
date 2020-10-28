<?php
   // Defino o titulo da minha página
    $titulo = 'Utilizando Constantes';
    // Apenas um nome
    $nome = 'Sandro -$titulo-';
    // A data de nascimento de uma pessoa
    $nascimento = '07/09/1979';
    // O Sobre nome de uma pessoa
    $sobre_nome = 'Nobrega Tavares';
    // Defino o ESTADO da pessoa que é uma constante
    define('ESTADO', 'Recife');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <p><?php echo $nome; ?> <?php echo $sobre_nome; ?>, nascido em <?php echo $nascimento; ?>, nasceu no <?php echo ESTADO; ?></p>
    </body>
</html>