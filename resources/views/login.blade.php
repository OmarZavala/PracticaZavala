<form action="{{route('Cr56amax')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="inbase" class="form-label">Nombre de usuario</label>
        <input type="text" class="form-control" name="innombre" id="innombre">
    </div>
    <div class="mb-3">
        <label for="inaltura" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="incontra" id="incontra">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>