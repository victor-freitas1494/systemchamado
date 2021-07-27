document.getElementById('submit').addEventListener('click', function(e){
    e.preventDefault();
    $.ajax({
        method: "POST",
        url: "../php/fecharCamado.php",
        data: {
            id: $('#id').val()
        }
      }).done(function(mng) {
        if (mng == true){
            window.location.href = "../sys/dashboardADM.php";
        }
      });
});

document.getElementById('submit-cancelar').addEventListener('click', function(e){
    e.preventDefault();
    $.ajax({
        method: "POST",
        url: "../php/cancelarCamado.php",
        data: {
            id: $('#id').val()
        }
      }).done(function(mng) {
        if (mng == true){
            window.location.href = "../sys/dashboardADM.php";
        }
      });
});

document.getElementById('submit-voltar').addEventListener('click', function(e){
    e.preventDefault();
    window.location.href = "../sys/dashboardADM.php";
});
