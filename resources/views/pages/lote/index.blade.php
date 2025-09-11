@extends('layout.master')
@push('plugin-styles')
<link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<style>
  .autocomplete-list { position: absolute; z-index: 1050; width: 100%; max-height: 240px; overflow-y: auto; }
  .autocomplete-item { cursor: pointer; padding: .5rem .75rem; }
  .autocomplete-item.active, .autocomplete-item:hover { background: #e9f2ff; }
</style>
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
        @livewire('editar-lote')
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