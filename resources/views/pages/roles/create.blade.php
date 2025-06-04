@extends('layout.master')

@section('content')
<div class="row inbox-wrapper">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <h4 class="mb-3">Crear Rol</h4>
        <form action="{{route('roles.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="mb-5">
            <input type="text" class="form-control" name="name" placeholder="Nombre del Rol" value="{{old('name')}}">
            @error('name')
              <span class="error-message" style="color:red">{{ $message }}</span>
            @enderror
          </div>
          <h4 class="mb-3">Permisos</h4>
          <div class="row">
          @foreach($permissions as $permission)
            <div class="col-md-3">
              <div class="form-check form-switch mb-2">
                <input type="checkbox" class="form-check-input" name="permissions[]" value="{{$permission->id}}" {{ (is_array(old('permissions')) && in_array($permission->id, old('permissions'))) ? ' checked' : '' }}> 
                <label class="form-check-label" for="formSwitch1">{{$permission->description}}</label>
              </div>
            </div>
          @endforeach
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection
