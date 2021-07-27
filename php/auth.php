<?php
    require('conectdb.php');
    session_start();
        $query = $db->query("SELECT * FROM usuarios WHERE login = '{$_POST["login"]}' AND senha = '{$_POST["senha"]}'");
        $data = array();
        while($row = $query->fetchArray(SQLITE3_ASSOC)){
            array_push($data, $row);
        }
        echo json_encode($data);
    
        if ($data[0]['login'] == $_POST["login"] && $data[0]['senha'] == $_POST["senha"]){
            switch ($data[0]['cargo']) {
                case 'adm':
                    $_SESSION['sys'] = $data;
                    header('Location: ../sys/dashboardADM.php');
                    break;
                case 'user':
                    $_SESSION['sys'] = $data;
                    header('Location: ../sys/dashboardUSER.php');
                    break;
                default:
                    $_SESSION['sys'] = null;
                    header('Location: ../');
                    break;
            }
        }else{
            header('Location: ../');
        }
            
?>