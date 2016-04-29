

  <form method="POST" action="{{action('HomeController@guardarPedido') }}" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group row">



  <div class="form-group row">
    <label class="col-sm-3">Cant. de Platillos</label>
    <div class="col-sm-9">
      
      <div class="col-sm-3">
        <span>Lun:</span> <input id="qLu" type="number" value="0" name="qLu" class="form-control dias" id="inputLunes" placeholder="0" maxlength="2" size="2">
      </div>

      <div class="col-sm-3">
        <span>Mar:</span><input id="qMa" type="number" value="0" name="qMa" class="form-control dias" id="inputMartes" placeholder="0" maxlength="2" size="2">
      </div>

      <div class="col-sm-3">
        <span>Mie:</span><input id="qMi" type="number" value="0" name="qMi" class="form-control dias" id="inputMiercoles" placeholder="0" maxlength="2" size="2">
      </div>

      <div class="col-sm-3">
        <span>Jue:</span><input id="qJu" type="number" value="0" name="qJu" class="form-control dias" id="inputJueves" placeholder="0" maxlength="2" size="2">
      </div>
     
    </div>
  </div>



  <div class="form-group  row">


    <div class="col-sm-6">
      <input type="text" name="nombre" class="form-control" id="inputName" placeholder="Nombre" required>
    </div>


    <div class="col-sm-6">
      <input type="text" name="apellido" class="form-control" id="inputApellido" placeholder="Apellido">
    </div>

  </div>


  <div class="form-group row">


    <div class="col-sm-6">
      <input type="text" name="telefono" class="form-control" id="inputTel" placeholder="Telefono" required>  
    </div>

    <div class="col-sm-6">
      <textarea class="form-control" name="comentario" rows="5" id="inputComment" placeholder="Comentarios"></textarea>
    </div>

  </div>


  <div class="form-group row">

  <div class="form-group col-sm-4">
    <label class="sr-only" for="exampleInputAmount">Total(en pesos)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input id="total" type="text" name="total" class="form-control" id="exampleInputAmount" placeholder="Total" disabled>
      <div class="input-group-addon">.00</div>
    </div>
  </div>


    <div class= "col-sm-8">
      <button type="submit" class="btn btn-secondary">Enviar</button>
    </div>
  </div>

</div>
 
</form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>