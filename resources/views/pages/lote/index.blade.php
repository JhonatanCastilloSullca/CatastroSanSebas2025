@extends('layout.master')
@push('plugin-styles')
<link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush
@section('content')
<div class="row inbox-wrapper">
  <div class="col-md-12">
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
      </div>
    @endif
    <div class="card">
      <div class="card-body">
          <form action="{{route('lote.editar')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="row">
            <div class="col-md-4">
              <label for="id_lote" class="form-label">Lote:</label>
              <select class="form-select id_lote" id="id_lote" name="id_lote" data-width="100%">
                  <option value="">SELECCIONE</option>
                @foreach($lotes as $lote)
                  <option value="{{$lote->id_lote}}" >{{$lote->id_lote}}</option>
                @endforeach
              </select>
              @error('id_lote')
                <span class="error-message" style="color:red">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-4">
              <label for="nuevo_lote" class="form-label">Nuevo Codigo Lote:</label>
              <input type="text" class="form-control nuevo_lote" id="nuevo_lote" name="nuevo_lote" value="{{old('nuevo_lote')}}">
              @error('nuevo_lote')
                <span class="error-message" style="color:red">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary mt-4">Editar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
@endpush

@push('custom-scripts')
<script>
    $('#id_lote').select2();
</script>

@endpush