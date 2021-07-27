<?php
    require('conectdb.php');
    session_start();

    $query = "INSERT INTO chamado(nome, chamado, status) VALUES('".$_POST['openUsuario']."', '".$_POST['openMensagem']."', 'open')";
    $db->exec($query);
    switch ($_SESSION['sys'][0]['cargo']) {
        case 'adm':
            header('Location: ../sys/dashboardADM.php');
            break;
        case 'user':
            header('Location: ../sys/dashboardUSER.php');
            break;
    }
?>