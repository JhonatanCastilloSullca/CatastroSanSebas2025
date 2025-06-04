@extends('layout.master')

@section('content')
<div class="row inbox-wrapper">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <h4 class="mb-3">Editar Rol</h4>
          {!! Form::model($role, ['route'=>['roles.update',$role], 'method'=>'put'])!!}

          <div class="mb-5">
            <input type="text" class="form-control" name="name" placeholder="Nombre del Rol" value="{{$role->name}}">
            @error('name')
              <span class="error-message" style="color:red">{{ $message }}</span>
            @enderror
          </div>
          <h4 class="mb-3">Permisos</h4>
          @foreach($permissions as $permission)
            <div class="col-md-3">
              <div class="form-check form-switch mb-2">
                {!! Form::checkbox ('permissions[]',$permission->id, null, ['class' => 'form-check-input'])!!} 
                <label class="form-check-label" for="formSwitch1">{{$permission->description}}</label>
              </div>
            </div>
          @endforeach
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
      {!! Form::close()!!}
      </div>
    </div>
  </div>
</div>

@endsection
