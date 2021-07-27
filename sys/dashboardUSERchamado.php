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
              <li class="nav-item">
                  <a class="nav-link" href="dashboardUSER.php">inicio</a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link active" href="#">abrir chamado</a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link " href="../php/exit.php">exit</a>
              </li>
          </ul>
    </div>

    <div class="container-xs openCall">
        <form action="../php/onpencall.php" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">usuario</span>
                <input type="text" class="form-control" value="<?php echo $_SESSION['sys'][0]['nome'];?>" aria-label="Username" aria-describedby="basic-addon1" name="openUsuario">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="digite a mensagem" id="floatingTextarea2" style="height: 100px" name="openMensagem"></textarea>
                <label for="floatingTextarea2">mensagem</label>
            </div>
            <button type="submit" class="btn btn-primary submitcall btn-lg">Abrir chamado</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
</body>
</html>