@extends('layout.master')

@section('content')
<div class="row inbox-wrapper">
    <div class="col-md-12">
        <div class="card">
        <div style="text-align-last: right !important;margin: 10px 10px 0px 0px;">
            <button type="button" class="btn btn-success btn-icon printer" onclick="window.print();">
            <i data-feather="printer"></i>
            </button>
        </div>
        <div class="card-body">
            <div class="row">
            <h4 class="mb-3">Buscar Ficha Catastral</h4>
            {!!Form::open(array('url'=>'reporte/reportelista','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
            <div class="form-group row">
                <div class="col-md-1" style="padding-top: 10px">
                        <span> <strong> Sector </strong></span>
                    <br>                              
                </div>
                <div class="col-md-3">
                    <div class="input-group" id="buscarFecha">
                        <select class="form-control" id="buscarSector" name="buscarSector"  data-live-search="true">
                            <option value="0" {{ $sector2 == '0' ? 'selected' : '' }} >TODOS</option>
                            @foreach($sectores as $sector)
                                <option value="{{$sector->id_sector}}" {{ $sector2 == $sector->id_sector ? 'selected' : '' }} >{{$sector->nomb_sector}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                </div>
                <div class="col-md-1" style="padding-top: 10px">
                        <span> <strong> Manzana </strong></span>
                    <br>                              
                </div>
                <div class="col-md-3">
                    <select class="form-control" id="buscarManzana" name="buscarManzana"  data-live-search="true">
                        <option value="0" {{ $manzana2 == '0' ? 'selected' : '' }} >TODOS</option>
                        
                    </select>
                    <br>                              
                </div>
                <div class="col-md-">
                </div>
                <div class="col-md-1" style="padding-top: 10px">
                        <span> <strong> Nº Ficha </strong></span>
                    <br></br>                              
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" id="buscarFicha" name="buscarFicha" class="form-control" placeholder="Nº Ficha" value="{{$ficha2}}" maxlength="7" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        <br>
                    </div>
                </div>
                <div class="col-md-1" style="padding-top: 10px">
                        <span> <strong> Tipo Ficha </strong></span>
                    <br></br>                              
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <select class="form-control" id="buscarTipo" name="buscarTipo"  data-live-search="true">
                        <option value="0" {{ $tipoficha == '0' ? 'selected' : '' }} >TODOS</option>
                        <option value="01" {{ $tipoficha == '01' ? 'selected' : '' }} >INDIVIDUAL</option>
                        <option value="02" {{ $tipoficha == '02' ? 'selected' : '' }} >COTITULARIDAD</option>
                        <option value="04" {{ $tipoficha == '04' ? 'selected' : '' }} >BIENES COMUNES</option>
                        <option value="03" {{ $tipoficha == '03' ? 'selected' : '' }} >ECONOMICA</option>
                        <option value="05" {{ $tipoficha == '05' ? 'selected' : '' }} >BIEN CULTURAL</option>
                        <option value="06" {{ $tipoficha == '06' ? 'selected' : '' }} >RURAL</option>
                    </select>
                        <br>
                    </div>
                </div>
                <div class="col-md-2 mb-5">
                    <div class="input-group">
                        <button type="submit"  id="buscar" class="btn btn-primary"><i data-feather="search"></i> Buscar</button>
                    </div>
                </div>
            </div>
            
            {{Form::close()}}
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                </div>
            @endif
            <div class="table-responsive ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nº Ficha</th>
                            <th>Sector</th>
                            <th>Manzana</th>
                            <th>Lote</th>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Tipo Ficha</th>
                            <th>Ver Ficha</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ficha as $ficha)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$ficha->nume_ficha}}</td>
                                <td>{{$ficha->lote->manzana->sectore->nomb_sector}}</td>
                                <td>{{$ficha->lote->manzana->codi_mzna}}</td>
                                <td>{{$ficha->lote->codi_lote}}</td>
                                <td>{{date("d/m/Y", strtotime($ficha->fecha_grabado))}}</td>
                                <td>{{$ficha->user->nombres}}</td>
                                <td>
                                @if($ficha->tipo_ficha==01)
                                    INDIVIDUAL
                                </td>
                                <td>
                                    @can('pdf.individual')
                                    <a href="{{route('pdf.individual',$ficha)}}" target="_blank">
                                        <button type="button" class="btn btn-success btn-icon " >
                                        <i data-feather="printer"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                
                                 <td>
                                    @can('ficha.editindividual')
                                    <a href="{{route('ficha.editindividual',$ficha)}}" target="_blank">
                                        <button type="button" class="btn btn-primary btn-icon " >
                                        <i data-feather="edit"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('ficha.destroyindividual')
                                    <a onclick="return confirm('Seguro que desea eliminar la ficha')" href="{{route('ficha.destroyindividual',$ficha)}}" >
                                        <button type="button" class="btn btn-danger btn-icon " >
                                        <i data-feather="trash-2"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                
                                
                                @elseif($ficha->tipo_ficha=="02")
                                    COTITULARIDAD
                                </td>
                                <td>
                                    @can('pdf.cotitularidad')
                                    <a href="{{route('pdf.cotitularidad',$ficha)}}" target="_blank">
                                        <button type="button" class="btn btn-success btn-icon " >
                                        <i data-feather="printer"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                
                                <td>
                                    @can('ficha.editcotitularidad')
                                        <a href="{{route('ficha.editcotitularidad',$ficha)}}" target="_blank">
                                            <button type="button" class="btn btn-info btn-icon " >
                                            <i data-feather="edit"></i>
                                            </button>
                                        </a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Cod. Ref.">
                                            <button type="button" class="btn btn-warning btn-icon edit" data-bs-toggle="modal" data-bs-target="#EditarCodRef" data-id="{{$ficha->id_ficha}}" data-unicat="{{$ficha->id_uni_cat}}">
                                                <i data-feather="edit"></i>
                                            </button>
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('ficha.destroycotitularidad')
                                    <a onclick="return confirm('Seguro que desea eliminar la ficha')" href="{{route('ficha.destroycotitularidad',$ficha)}}" >
                                        <button type="button" class="btn btn-danger btn-icon " >
                                        <i data-feather="trash-2"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                @elseif($ficha->tipo_ficha=="04")
                                    BIENES COMUNES
                                </td>
                                <td>
                                    @can('pdf.bienescomunes')
                                    <a href="{{route('pdf.bienescomunes',$ficha)}}" target="_blank">
                                        <button type="button" class="btn btn-success btn-icon " >
                                        <i data-feather="printer"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                 <td>
                                    @can('ficha.editbiencomun')
                                        <a href="{{route('ficha.editbiencomun',$ficha)}}" target="_blank">
                                            <button type="button" class="btn btn-info btn-icon " >
                                            <i data-feather="edit"></i>
                                            </button>
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('ficha.destroybiencomun')
                                        <a onclick="return confirm('Seguro que desea eliminar la ficha')"  href="{{route('ficha.destroybiencomun',$ficha)}}" target="_blank">
                                            <button type="button" class="btn btn-danger btn-icon " >
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </a>
                                    @endcan
                                </td>
                                @elseif($ficha->tipo_ficha=="03")
                                    ECONOMICA
                                </td>
                                <td>
                                    @can('pdf.economica')
                                    <a href="{{route('pdf.economica',$ficha)}}" target="_blank">
                                        <button type="button" class="btn btn-success btn-icon " >
                                        <i data-feather="printer"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('ficha.editeconomica')
                                        <a href="{{route('ficha.editeconomica',$ficha)}}"  target="_blank" >
                                            <button type="button" class="btn btn-info btn-icon " >
                                            <i data-feather="edit"></i>
                                            </button>
                                        </a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Cod. Ref.">
                                            <button type="button" class="btn btn-warning btn-icon edit" data-bs-toggle="modal" data-bs-target="#EditarCodRef" data-id="{{$ficha->id_ficha}}" data-unicat="{{$ficha->id_uni_cat}}">
                                                <i data-feather="edit"></i>
                                            </button>
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('ficha.destroyeconomica')
                                    <a onclick="return confirm('Seguro que desea eliminar la ficha')"  href="{{route('ficha.destroyeconomica',$ficha)}}">
                                        <button type="button" class="btn btn-danger btn-icon " >
                                        <i data-feather="trash-2"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                @elseif($ficha->tipo_ficha=="05")
                                    BIEN CULTURAL
                                </td>
                                <td>
                                    @can('pdf.bienesculturales')
                                    <a href="{{route('pdf.bienesculturales',$ficha)}}" target="_blank">
                                        <button type="button" class="btn btn-success btn-icon " >
                                        <i data-feather="printer"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    <a href="{{route('ficha.editbiencultural',$ficha)}}"  target="_blank" >
                                        <button type="button" class="btn btn-info btn-icon " >
                                        <i data-feather="edit"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Seguro que desea eliminar la ficha')"  href="{{route('ficha.destroybiencultural',$ficha)}}">
                                        <button type="button" class="btn btn-danger btn-icon " >
                                        <i data-feather="trash-2"></i>
                                        </button>
                                    </a>
                                </td>
                                @elseif($ficha->tipo_ficha=="06")
                                    RURAL
                                </td>
                                <td>
                                    @can('pdf.rural')
                                    <a href="{{route('pdf.rural',$ficha)}}" target="_blank">
                                        <button type="button" class="btn btn-success btn-icon " >
                                        <i data-feather="printer"></i>
                                        </button>
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditarCodRef" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Cod. de Referencial Catastral</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('ficha.updateCod','test')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="id_ficha_eco" id="id_ficha_eco" class="id_ficha_eco" value="{{old('id_ficha_eco')}}">
            <div class="mb-3">
                <label for="unicat_eco" class="form-label">Codigo Antiguo:</label>
                <input type="text" class="form-control" id="unicat_eco" name="unicat_eco" value="{{old('unicat_eco')}}">
            </div>
            <div class="mb-3">
                <label for="unicat_eco" class="form-label">Codigo Nuevo:</label>
                <input type="text" class="form-control" id="unicat_eco_nuevo" name="unicat_eco_nuevo" value="{{old('unicat_eco_nuevo')}}">
                @error('unicat_eco_nuevo')
                    <span class="error-message" style="color:red">{{ $message }}</span>
                @enderror
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection


@push('custom-scripts')
<script>
    var editarEconomica = document.getElementById('EditarCodRef');

    editarEconomica.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget

        var id = button.getAttribute('data-id')
        var unicat = button.getAttribute('data-unicat')

        var idModal = editarEconomica.querySelector('#id_ficha_eco')
        var unicatModal = editarEconomica.querySelector('#unicat_eco')

        idModal.value = id;
        unicatModal.value = unicat;
    });
</script>
@if(count($errors)>0)
<script>
  $(function() {
    $('#EditarCodRef').modal('show');
  });
</script>
@endif
@if($manzana2==0)
    @if($sector2==0)
        <script>

        $("#buscarSector").change(agregarValores);

        function agregarValores(){
            limpiarselect();
            $('#buscarManzana').append("<option value='0' >TODOS</option>");
            <?php foreach ($manzanas as $manzana): ?>
                if('{{$manzana->id_sector}}'==$("#buscarSector option:selected").val()){
                    $('#buscarManzana').append("<option value='{{$manzana->id_mzna}}' >{{$manzana->codi_mzna}}</option>");
                }
            <?php endforeach ?>
        }
        function limpiarselect(){
            $('#buscarManzana').empty();
        }

        </script>
    @else
    <script>
        limpiarselect();
        $('#buscarManzana').append("<option value='0' >TODOS</option>");
        <?php foreach ($manzanas as $manzana): ?>
            if('{{$manzana->id_sector}}'=='{{$sector2}}'){
                $('#buscarManzana').append("<option value='{{$manzana->id_mzna}}' >{{$manzana->codi_mzna}}</option>");
            }
        <?php endforeach ?>

        $('#buscarManzana').val('{{$manzana2}}')
        
        function limpiarselect(){
            $('#buscarManzana').empty();
        }
        $("#buscarSector").change(agregarValores2);
        function agregarValores2(){
            limpiarselect();
            $('#buscarManzana').append("<option value='0' >TODOS</option>");
            <?php foreach ($manzanas as $manzana): ?>
                if('{{$manzana->id_sector}}'==$("#buscarSector option:selected").val()){
                    $('#buscarManzana').append("<option value='{{$manzana->id_mzna}}' >{{$manzana->codi_mzna}}</option>");
                }
            <?php endforeach ?>
        }
    </script>
    @endif
@else
<script>
    limpiarselect();
    $('#buscarManzana').append("<option value='0' >TODOS</option>");
    <?php foreach ($manzanas as $manzana): ?>
        if('{{$manzana->id_sector}}'=='{{$sector2}}'){
            $('#buscarManzana').append("<option value='{{$manzana->id_mzna}}' >{{$manzana->codi_mzna}}</option>");
        }
    <?php endforeach ?>

    $('#buscarManzana').val('{{$manzana2}}')
    
    function limpiarselect(){
        $('#buscarManzana').empty();
    }
    $("#buscarSector").change(agregarValores2);
    function agregarValores2(){
        limpiarselect();
        $('#buscarManzana').append("<option value='0' >TODOS</option>");
        <?php foreach ($manzanas as $manzana): ?>
            if('{{$manzana->id_sector}}'==$("#buscarSector option:selected").val()){
                $('#buscarManzana').append("<option value='{{$manzana->id_mzna}}' >{{$manzana->codi_mzna}}</option>");
            }
        <?php endforeach ?>
    }
</script>

@endif
@endpush