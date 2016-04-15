<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
</head>
<body>





<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

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


</body>
</html>