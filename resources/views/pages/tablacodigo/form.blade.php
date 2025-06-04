<div class="mb-3">
    <label for="recipient-name" class="form-label">Codigos de tabla:</label>
    <select class="form-select id_tablacodigos" id="id_tablacodigos" name="id_tablacodigos" data-width="100%">
        <option value="">SELECCIONE</option>
        @foreach($desc_tabla as $i => $desctabla)
            <option value="{{ $i }}" {{ old('id_tablacodigos') == $i ? 'selected' : '' }}>
            {{ $i }} - {{ $desctabla }}
            </option>
        @endforeach

    </select>
    @error('id_tablacodigos')
        <span class="error-message" style="color:red">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="recipient-name" class="form-label">Codigo:</label>
    <input type="text" class="form-control codigo" id="codigo" name="codigo" value="{{old('codigo')}}">
    @error('codigo')
        <span class="error-message" style="color:red">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="recipient-name" class="form-label">Descripción:</label>
    <input type="text" class="form-control desc_codigo" id="desc_codigo" name="desc_codigo" value="{{old('desc_codigo')}}">
    @error('desc_codigo')
        <span class="error-message" style="color:red">{{ $message }}</span>
    @enderror
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
