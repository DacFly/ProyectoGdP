<form action="{{ url('/eventos') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="nombre" value="{{ isset($eventos->nombre)?$eventos->nombre:'' }}">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Fecha de Publicacion</label>
      <input type="date"
        class="form-control" name="fechaP" id="fechaP" aria-describedby="helpId" placeholder="fechaP" value="{{ isset($eventos->fechaP)?$eventos->fechaP:'' }}">
      <small id="helpId" class="form-text text-muted" ></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Fecha del Evento</label>
      <input type="date"
        class="form-control" name="fechaE" id="fechaE" aria-describedby="helpId" placeholder="fechaE" value="{{ isset($eventos->fechaE)?$eventos->fechaE:'' }}">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Descripcion</label>
      <input type="text"
        class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="descripcion" value="{{ isset($eventos->descripcion)?$eventos->descripcion:'' }}">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Direccion</label>
      <input type="text"
        class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="direccion" value="{{ isset($eventos->direccion)?$eventos->direccion:'' }}">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>