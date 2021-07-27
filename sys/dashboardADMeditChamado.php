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

    <?php
        $edit = $db->query("SELECT * FROM chamado WHERE id = {$_GET['id']}");
        $arrayEdit = array();
        while($row = $edit->fetchArray(SQLITE3_ASSOC)){
            array_push($arrayEdit, $row);
        }

    ?>

    
    <div class="container-xs divTable editChamado" style="top: 36%">
        <div class="input-group flex-nowrap mb-3">
            <span class="input-group-text" id="addon-wrapping">id</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" id="id" value="<?php echo $arrayEdit[0]['id']?>" disabled>
        </div>
        <div class="input-group flex-nowrap mb-3">
            <span class="input-group-text" id="addon-wrapping">Usuario</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $arrayEdit[0]['nome']?>" disabled>
        </div>  
        <div class="input-group flex-nowrap mb-3">
            <span class="input-group-text" id="addon-wrapping">chamado</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" value="<?php echo $arrayEdit[0]['chamado']?>" disabled>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary btn-lg mb-3" id="submit">Fechar chamado</button>
            <button type="button" class="btn btn-danger btn-lg mb-3" id="submit-cancelar">Cancelar chamado</button>
            <button type="button" class="btn btn-secondary btn-lg mb-3" id="submit-voltar">Voltar</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
    <script src="../js/ajax.js"></script>
</body>
</html>