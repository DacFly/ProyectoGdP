<form action="{{ url('/usuarios') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="nombre" value="{{ isset($usuarios->nombre)?$usuarios->nombre:'' }}">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Cedula</label>
      <input type="text"
        class="form-control" name="cedula" id="cedula" aria-describedby="helpId" placeholder="cedula" value="{{ isset($usuarios->cedula)?$usuarios->cedula:'' }}">
      <small id="helpId" class="form-text text-muted" ></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Rol</label>
      <input type="text"
        class="form-control" name="rol" id="rol" aria-describedby="helpId" placeholder="rol" value="{{ isset($usuarios->rol)?$usuarios->rol:'' }}">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Telefono</label>
      <input type="text"
        class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="telefono" value="{{ isset($usuarios->telefono)?$usuarios->telefono:'' }}">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Direccion</label>
      <input type="text"
        class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="direccion" value="{{ isset($usuarios->direccion)?$usuarios->direccion:'' }}">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Correo</label>
      <input type="text"
        class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="correo" value="{{ isset($usuarios->correo)?$usuarios->correo:'' }}">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>