@extends('layouts.inicio')
@section('content')
<img  id="canasta" src="../images/bolsaComida.png" title="Pedido"></img>

<!--<img  id="comida" src="../images/burguer.png"></img>
<p id="descripcion">Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.</p>
<p id="dia">LUNES</p>
<p id="nombreComida">Hamburguesa Clásica</p>
<precio>$54</precio>
<input type="number" placeholder="Cantidad" name="cantidad" id="pedido"> 
<input type="submit" class="button" value="Agregar" id="agregarBoton"> -->
<input type="submit" class="button" value="Cerrar Sesion" id="cerrarSesion">




<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../images/tacos.png" alt="..." style="height:400px;  position:relative; left:100px;">
      <div class="carousel-caption">
        <center>
        <h1>MARTES</h1>
        <h2>Tacos de guisos</h2>
        <h3>$40</h3>
    <p style="width:350px;">Los tacos de guisos pueden ser servidos en harina o maiz, contamos con guisos como: deshebrada, chicharron, picadillo</p>
      </center>
      </div>
    </div>
    <!--Separador -->
    <div class="item">
      <img src="../images/burguer.png" alt="..." style="height:400px; position:relative; left:100px;">
      <div class="carousel-caption">
       <center>
        <h1 >Miercoles</h1>
        <h2>Hamburguersa Clasica</h2>
        <h3>$59</h3>
    <p style="width:350px;">La hamburguesa clasica incluye carne, dos quesos, jamon, tomate, lechuga</p>
      </center>
        ...
      </div>
    </div>
    ...
    <!--Separador -->
    <div class="item">
      <img src="../images/platilloMuestra.png" alt="..." style="height:400px; position:relative; left:100px;">
      <div class="carousel-caption">
       <center>
        <h1 >Jueves</h1>
        <h2>Mole Clasico</h2>
        <h3>$40</h3>
    <p style="width:350px;">La hamburguesa clasica incluye carne, dos quesos, jamon, tomate, lechuga</p>
      </center>
      </div>
    </div>
<!--Separador -->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>







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
@endsection