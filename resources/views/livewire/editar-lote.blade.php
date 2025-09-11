<div class="row">
    <div class="col-md-4 position-relative">
        <label class="form-label">Sector / Manzana / Lote:</label>

        <input type="text"
            class="form-control"
            placeholder="Buscar lote (mín. 2 caracteres)"
            wire:model.debounce.300ms="query"
            autocomplete="off">

        @if($showList)
        <div class="card shadow-sm mt-1 autocomplete-list">
            <ul class="list-group list-group-flush">
            @foreach($suggestions as $i => $text)
                <li class="list-group-item autocomplete-item {{ $highlight === $i ? 'active' : '' }}"
                    wire:click="selectIndex({{ $i }})">
                {{ $text }}
                </li>
            @endforeach
            </ul>
        </div>
        @endif

        <input type="hidden" name="id_lote" wire:model="id_lote">
    </div>

  <div class="col-md-3">
    <label for="nuevo_mzna" class="form-label">Nuevo Codigo Manzana:</label>
    <input type="text" class="form-control" id="nuevo_mzna" name="nuevo_mzna" wire:model.defer="nuevo_mzna">
    @error('nuevo_mzna') <span class="error-message" style="color:red">{{ $message }}</span> @enderror
  </div>

  <div class="col-md-3">
    <label for="nuevo_lote" class="form-label">Nuevo Codigo Lote:</label>
    <input type="text" class="form-control" id="nuevo_lote" name="nuevo_lote" wire:model.defer="nuevo_lote">
    @error('nuevo_lote') <span class="error-message" style="color:red">{{ $message }}</span> @enderror
  </div>

  <div class="col-md-2 d-flex align-items-end">
    <button type="submit" class="btn btn-primary w-100" wire:click="save()">Editar</button>
  </div>
</div>
