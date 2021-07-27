<?php
   require('../php/conectdb.php');
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="d-print-block navBar">
          <div class="d-print-block imgUser">
              <span><img src="https://img.icons8.com/material-sharp/96/000000/user.png"/></span>
          </div>
          <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item active">
                  <a class="nav-link active" href="#">inicio</a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link " href="dashboardADMchamado.php">abrir chamado</a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link " href="../php/exit.php">exit</a>
              </li>
          </ul>
    </div>

    <div class="container-xs divTable">
        <table class="table">
            <p class="text-center fs-1">chamados abertos</p>
            <thead>
                <tr>
                    <th scope="col">nome</th>
                    <th scope="col">mensagem</th>
                    <th scope="col">situação</th>
                    <th scope="col">modificar</th>
                </tr>
            </thead>
            <tbody>

            <?php
            
            $consultachamado = $db->query("SELECT * FROM chamado where status = 'open'");
            $resultconsulta = array();
            while($row = $consultachamado->fetchArray(SQLITE3_ASSOC)){
                array_push($resultconsulta, $row);
            }
            foreach($resultconsulta as $resul){
            ?>

                <tr>
                    <th><?php echo $resul['nome'];?></th>
                    <td><?php echo $resul['chamado'];?></td>
                    <td><?php echo $resul['status'];?></td>
                    <td><a href="dashboardADMeditChamado.php?id=<?php echo $resul['id'];?>" class="btn btn-outline-primary">editar</a></td>
                </tr>
            <?php    
            }
            ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
</body>
</html>