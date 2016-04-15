<html>
<link rel="stylesheet" type="text/css" href="../css/MenuStyle.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link href="../images/comida.png" rel="shortcut icon">
<script src="../js/jquery.js" type="text/javascript"> </script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<head>
<title>AnniesKitchen</title>
</head>
<center>
<p id="instrucciones">Escoge la semana para visualizar el menu:</p>
<br>
<select id="semana" onchange="cambioSemana()">
<option selected value="1">Semana 1 (Actual)
<option value="2">Semana 2
<option value="3">Semana 3
</select>
<br><br>
<TABLE id="tablaMenu">
<tr>
<td>Martes</td>
<td>Miercoles</td>
<td>Jueves</td>
<td>Viernes</td>
</tr>
<tr>
<td><img id="platilloMartes" src="../images/platilloMuestra.png"></img></td>
<td><img id="platilloMiercoles" src="../images/tacos.png"></img></td>
<td><img id="platilloJueves" src="../images/burguer.png"></img></td>
<td><img id="platilloViernes" src="../images/menudo.png"></img></td>
</tr>
<tr>
<td id="Martes">S1: Platillo 1</td>
<td id="Miercoles">S1: Platillo 2</td>
<td id="Jueves" >S1: Platillo 3</td>
<td id="Viernes" >S1: Platillo 4</td>
</tr>
</TABLE>
</center>

<script>
$( document ).on('ready', function() {
//function cambioSemana() {
  $("#semana").on("change", function(){


              for (var i=0; i<2; i++){
                var jsonObject = {
                    "numero": $("#semana").val(),
                    "diaa": i
                };

                $.ajax({
                    type: "POST",
                    url: "../php/getMenu.php",
                    dataType: "json",
                    data: jsonObject,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    success: function(jsonData) {
                        //alert("Si hay Menu");
                        var x = document.getElementById("semana").value;
                        var k = jsonData.Semana;
                        if (x==k){
    //document.getElementById("Martes").innerHTML = jsonData.nombre;
    document.getElementById(jsonData.dia).innerHTML = jsonData.nombre+"<br>"+jsonData.descripcion+"<br>"+"Precio: $"+jsonData.precio;
    //document.getElementById("Miercoles").innerHTML = jsonData.nombre;
    //document.getElementById("jue").innerHTML = "S1: Platillo 3";
    //document.getElementById("vier").innerHTML = "S1: Platillo 4";
    document.getElementById("platillo"+jsonData.dia).src="../images/"+jsonData.imagen;
    //document.getElementById("platillo2").src="../images/tacos.png";
    //document.getElementById("platillo3").src="../images/burguer.png";
    //document.getElementById("platillo4").src="../images/menudo.png";
  } /* else if (x=='semana2'){
    document.getElementById("mar").innerHTML = "S2: Platillo 1";
    document.getElementById("mier").innerHTML = "S2: Platillo 2";
    document.getElementById("jue").innerHTML = "S2: Platillo 3";
    document.getElementById("vier").innerHTML = "S2: Platillo 4";
    document.getElementById("platillo1").src="../images/pollo.png";
    document.getElementById("platillo2").src="../images/quesadillas.png";
    document.getElementById("platillo3").src="../images/camaron.png";
    document.getElementById("platillo4").src="../images/verduras.png";
  } else if (x=='semana3'){
    document.getElementById("mar").innerHTML = "S3: Platillo 1";
    document.getElementById("mier").innerHTML = "S3: Platillo 2";
    document.getElementById("jue").innerHTML = "S3: Platillo 3";
    document.getElementById("vier").innerHTML = "S3: Platillo 4";
    document.getElementById("platillo1").src="../images/hotdog.png";
    document.getElementById("platillo2").src="../images/tacos.png";
    document.getElementById("platillo3").src="../images/quesadillas.png";
    document.getElementById("platillo4").src="../images/burguer.png";
  } */
                        //window.location.replace("../Html/Menu.html");   
                       
                    },
                    error: function(errorMsg){
                        alert("No hay Menu");
                    }
                }); 
                } //cierra for
                //window.location.replace("../Html/home.php"); 

/*
    var x = document.getElementById("semana").value;
    if (x=='semana1'){
    document.getElementById("mar").innerHTML = "S1: Platillo 1";
    document.getElementById("mier").innerHTML = "S1: Platillo 2";
    document.getElementById("jue").innerHTML = "S1: Platillo 3";
    document.getElementById("vier").innerHTML = "S1: Platillo 4";
    document.getElementById("platillo1").src="../images/platilloMuestra.png";
    document.getElementById("platillo2").src="../images/tacos.png";
    document.getElementById("platillo3").src="../images/burguer.png";
    document.getElementById("platillo4").src="../images/menudo.png";
  } else if (x=='semana2'){
    document.getElementById("mar").innerHTML = "S2: Platillo 1";
    document.getElementById("mier").innerHTML = "S2: Platillo 2";
    document.getElementById("jue").innerHTML = "S2: Platillo 3";
    document.getElementById("vier").innerHTML = "S2: Platillo 4";
    document.getElementById("platillo1").src="../images/pollo.png";
    document.getElementById("platillo2").src="../images/quesadillas.png";
    document.getElementById("platillo3").src="../images/camaron.png";
    document.getElementById("platillo4").src="../images/verduras.png";
  } else if (x=='semana3'){
    document.getElementById("mar").innerHTML = "S3: Platillo 1";
    document.getElementById("mier").innerHTML = "S3: Platillo 2";
    document.getElementById("jue").innerHTML = "S3: Platillo 3";
    document.getElementById("vier").innerHTML = "S3: Platillo 4";
    document.getElementById("platillo1").src="../images/hotdog.png";
    document.getElementById("platillo2").src="../images/tacos.png";
    document.getElementById("platillo3").src="../images/quesadillas.png";
    document.getElementById("platillo4").src="../images/burguer.png";
  } */
}); //Cierra funcion cambioSemana
}); //Cierra document ready
</script>





<center id="modal">
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" id="modal">Haz tu pedido</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pedido</h4>
      </div>
      <div class="modal-body">



  <form>

    <div class="form-group row">
    <label class="col-sm-3">Dias</label>
    <div class="col-sm-9">
      
      <label class="checkbox-inline">
        <input type="checkbox" id="checkLunes" value="lunes">   Lun
      </label>

      <label class="checkbox-inline">
        <input type="checkbox" id="checkMartes" value="martes">    Mar
      </label>

      <label class="checkbox-inline">
        <input type="checkbox" id="checkMiercoles" value="miercoles">    Mie
      </label>

      <label class="checkbox-inline">
        <input type="checkbox" id="checkJueves" value="jueves">    Jue
      </label>
     
    </div>
  </div>


  <div class="form-group row">
    <label class="col-sm-3">Cant. de Platillos</label>
    <div class="col-sm-9">
      
      <label class="checkbox-inline">
        <input type="text" class="form-control" id="inputLunes" placeholder="#" maxlength="2" size="2">
      </label>

      <label class="checkbox-inline">
       <input type="text" class="form-control" id="inputMartes" placeholder="#" maxlength="2" size="2">
      </label>

      <label class="checkbox-inline">
        <input type="text" class="form-control" id="inputMiercoles" placeholder="#" maxlength="2" size="2">
      </label>

      <label class="checkbox-inline">
        <input type="text" class="form-control" id="inputJueves" placeholder="#" maxlength="2" size="2">
      </label>
     
    </div>
  </div>



  <div class="form-group  row">


    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputName" placeholder="Nombre">
    </div>


    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputApellido" placeholder="Apellido">
    </div>

  </div>


  <div class="form-group row">


    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputTel" placeholder="Telefono">
    </div>

    <div class="col-sm-6">
      <textarea class="form-control" rows="5" id="inputComment" placeholder="Comentarios"></textarea>
    </div>

  </div>


  <div class="form-group row">

  <div class="form-group col-sm-4">
    <label class="sr-only" for="exampleInputAmount">Total(in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Total">
      <div class="input-group-addon">.00</div>
    </div>
  </div>


    <div class= "col-sm-8">
      <button type="submit" class="btn btn-secondary">Enviar</button>
    </div>
  </div>

</div>
 

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</center>







@include('partials.navegacion')

</html>