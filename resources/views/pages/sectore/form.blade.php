<div class="mb-3">
  <label for="recipient-name" class="form-label">Codigo de Sector:</label>
  <input type="text" class="form-control codi_sector" id="codi_sector" name="codi_sector" value="{{str_pad($ultimo,2,'0',STR_PAD_LEFT)}}" readonly>
  @error('codi_sector')
    <span class="error-message" style="color:red">{{ $message }}</span>
  @enderror
</div>
<div class="mb-3">
  <label for="recipient-name" class="form-label">Nombre de Sector:</label>
  <input type="text" class="form-control nomb_sector" id="nomb_sector" name="nomb_sector" value="{{old('nomb_sector')}}">
  @error('nomb_sector')
    <span class="error-message" style="color:red">{{ $message }}</span>
  @enderror
</div>
<div class="mb-3">
  <label for="recipient-name" class="form-label">Ficha Individual:</label>
  <input type="text" class="form-control fichaindividual" id="fichaindividual" name="fichaindividual" value="{{old('fichaindividual')}}">
  @error('nomb_sector')
    <span class="error-message" style="color:red">{{ $message }}</span>
  @enderror
</div>
<div class="mb-3">
  <label for="recipient-name" class="form-label">Ficha Cotitular:</label>
  <input type="text" class="form-control fichacotitular" id="fichacotitular" name="fichacotitular" value="{{old('fichacotitular')}}">
  @error('nomb_sector')
    <span class="error-message" style="color:red">{{ $message }}</span>
  @enderror
</div>
<div class="mb-3">
  <label for="recipient-name" class="form-label">Ficha Economica:</label>
  <input type="text" class="form-control fichaeconomica" id="fichaeconomica" name="fichaeconomica" value="{{old('fichaeconomica')}}">
  @error('nomb_sector')
    <span class="error-message" style="color:red">{{ $message }}</span>
  @enderror
</div>
<div class="mb-3">
  <label for="recipient-name" class="form-label">Ficha Bien Comun:</label>
  <input type="text" class="form-control fichabiencomun" id="fichabiencomun" name="fichabiencomun" value="{{old('fichabiencomun')}}">
  @error('nomb_sector')
    <span class="error-message" style="color:red">{{ $message }}</span>
  @enderror
</div>
<div class="mb-3">
  <label for="recipient-name" class="form-label">Ficha Cultural:</label>
  <input type="text" class="form-control fichacultural" id="fichacultural" name="fichacultural" value="{{old('fichacultural')}}">
  @error('nomb_sector')
    <span class="error-message" style="color:red">{{ $message }}</span>
  @enderror
</div>
<div class="mb-3">
  <label for="recipient-name" class="form-label">Ficha Rural:</label>
  <input type="text" class="form-control ficharural" id="ficharural" name="ficharural" value="{{old('ficharural')}}">
  @error('nomb_sector')
    <span class="error-message" style="color:red">{{ $message }}</span>
  @enderror
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>
