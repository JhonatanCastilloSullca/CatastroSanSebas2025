
<div class="row">
    <form id="contact" method="POST" class="forms-sample" enctype="multipart/form-data" wire:submit.prevent="register">
    {{csrf_field()}}
    <div class="col-md-12 grid-margin stretch-card" >
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="row form-group">
                        <h4 class="mb-4"> DATOS GENERALES</h4>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > NUMERO DE FICHA</label>
                                <input   type="text" class="form-control" placeholder="" name="numeficha" wire:model.lazy="numeficha"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="7" tabindex="1"  @if($errors->has('numeficha')) autofocus @endif >
                                @error('numeficha')
                                    <span class="error-message" style="color:red" >{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > NUMERO DE FICHAS POR LOTE</label>
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <input  type="text" class="form-control" placeholder="" name="nume_ficha_lote" wire:model="nume_ficha_lote" maxlength="3" tabindex="2">
                                        @error('nume_ficha_lote')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <input type="text" class="form-control" placeholder="" name="nume_ficha_lote2" wire:model="nume_ficha_lote2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="3">
                                        @error('nume_ficha_lote2')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">1</div> CÓDIGO ÚNICO CATASTRAL - CUC</label>
                                <input type="text" class="form-control" placeholder="" name="cuc" wire:model.defer="cuc" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="12" tabindex="4">
                                @error('cuc')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->    
                    <div class="row  form-group">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">2</div> CÓDIGO DE REFERENCIA CATASTRAL</label>
                                <div class="row row3 mb-3" style="place-content: center;text-align: center;">
                                    <div class="col-md-3 row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label labelpeque" >DPTO.</label>
                                            <input type="number" class="form-control" name="dpto" readonly wire:model="dpto" tabindex="5">
                                            @error('dpto')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label labelpeque" >PROV.</label>
                                            <input type="number" class="form-control" name="prov" readonly wire:model="prov" tabindex="6">
                                            @error('prov')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label labelpeque" >DIST.</label>
                                            <input type="number" class="form-control" name="dist" readonly wire:model="dist" tabindex="7">
                                            @error('dist')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3 row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label labelpeque d-inline-flex">SECTOR</label>
                                            <input type="text" class="form-control" placeholder="" name="sector" wire:model.defer="sector" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" tabindex="8">
                                            @error('sector')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label labelpeque d-inline-flex">MANZANA</label>
                                            <input type="text" class="form-control" placeholder="" name="mzna" wire:model.defer="mzna" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="9">
                                            @error('mzna')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex">LOTE</label>
                                            <input type="text" class="form-control" placeholder="" name="lote" wire:model.defer="lote" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="10">
                                            @error('lote')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex">EDIFICA</label>
                                            <input type="text" class="form-control" placeholder="" name="edifica" wire:model.defer="edifica" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" tabindex="11">
                                            @error('edifica')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex">ENTRADA</label>
                                            <input type="text" class="form-control" placeholder="" name="entrada" wire:model.defer="entrada" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" tabindex="12">
                                            @error('entrada')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex">PISO</label>
                                            <input type="text" class="form-control" placeholder="" name="piso" wire:model.defer="piso" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" tabindex="13">
                                            @error('piso')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex">UNIDAD</label>
                                            <input type="text" class="form-control" placeholder="" name="unidad" wire:model.defer="unidad" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="14">
                                            @error('unidad')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex">DC</label>
                                            <input type="number" class="form-control" readonly placeholder="" name="dc" wire:model="dc" tabindex="15">
                                            @error('dc')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-icon mt-3" wire:click="calcularDC">
                                        <i class="mdi mdi-calculator"></i>
                                    </button>
                                </div>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->    
                    <div class="row form-group">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">3</div> CÓDIGO CONTRIBUYENTE DE RENTAS</label>
                                <input type="text" class="form-control" placeholder=""name="codi_cont_rentas" wire:model="codi_cont_rentas" maxlength="15" tabindex="16">
                                @error('codi_cont_rentas')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">4</div> CÓDIGO PREDIAL DE RENTAS</label>
                                <input type="text" class="form-control" placeholder=""name="codi_pred_rentas" wire:model="codi_pred_rentas" maxlength="15" tabindex="17">
                                @error('codi_pred_rentas')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    
                    <div class="row form-group">
                        <h4 class="mb-4"> UBICACION DEL PREDIO CATASTRAL</h4>
                        <div class="col-md-12 mb-5">
                            <div class="table-responsive">
                                <table id="vias" class="table">
                                    <thead>
                                        <tr >
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadrorequired">5</div> CÓDIGO DE VIA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">6</div> TIPO DE VIA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">7</div> NOMBRE DE VIA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadrorequired">8</div>PUERTA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">9</div> N° MUNICIPAL</label></th>                
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">10</div> COND. NUMER. </label></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i=0;$i<$cont;$i++)
                                        <tr >
                                            <td>
                                                <select class="form-select" id="via_id{{$i}}" name="via_id[]" data-width="100%" wire:model="tipoVia.{{$i}}" data-live-search tabindex="18">
                                                    <option value="">Seleccione</option>
                                                        @foreach($vias as $via)
                                                            <option value="{{str_pad($via->id_via,12,'0',STR_PAD_LEFT)}}">{{$via->codi_via}} {{$via->tipo_via}} {{$via->nomb_via}}</option>
                                                        @endforeach
                                                </select>  
                                                @error('tipoVia.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                {{$tipoViatipo[$i]}}
                                            </td>
                                            <td>
                                                {{$tipoVianombre[$i]}}
                                            </td>
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_puerta[]" id="tipo_puerta.{{$i}}" wire:model="tipopuerta.{{$i}}"  tabindex="18">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','TPR')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('tipopuerta.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="" name="nume_muni[]" id="nume_muni.{{$i}}" wire:model="nume_muni.{{$i}}" maxlength="20" tabindex="18">
                                                @error('nume_muni.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="cond_nume[]" id="cond_nume.{{$i}}" wire:model="cond_nume.{{$i}}" tabindex="18">
                                                    <option value=""  >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','CNP')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('cond_nume.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                @if($i==$cont-1)
                                                    <button type="button" class="btn btn-success btn-icon" wire:click="aumentarUbicacion" tabindex="18">+</button>
                                                @else
                                                    <button type="button" class="btn btn-danger btn-icon" wire:click="reducirUbicacion" tabindex="18">-</button>
                                                @endif
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">    
                        
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">11</div> TIPO DE EDIFICACION</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_edificacion" id="tipo_edificacion" wire:model="tipo_edificacion" tabindex="23">
                                    <option value=""  >SELECCIONE</option>
                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','TED')->orderby('codigo','asc')->get() as $tablacodigo)
                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                    @endforeach
                                </select>
                                @error('tipo_edificacion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">11</div> TIPO DE INTERIOR</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_interior" id="tipo_interior" wire:model="tipo_interior" tabindex="24">
                                    <option value=""  >SELECCIONE</option>
                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','TIN')->orderby('codigo','asc')->get() as $tablacodigo)
                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                    @endforeach
                                </select>
                                @error('tipo_interior')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">13</div> N° DE INTERIOR</label>
                                <input type="text" class="form-control" placeholder="" name="nume_interior" wire:model="nume_interior" maxlength="4" tabindex="25">
                                @error('nume_interior')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">14</div> CODIGO HURBANO</label>
                                    <select  class="form-select insumo_id" id="hab_urbana_id" name="hab_urbana_id" data-width="100%" wire:model="tipoHabi" tabindex="26">
                                        <option value="">Seleccione</option>
                                        @foreach($hab_urbanas as $hab_urbana)
                                            <option value="{{str_pad($hab_urbana->id_hab_urba,10,'0',STR_PAD_LEFT)}}">{{$hab_urbana->codi_hab_urba}} {{$hab_urbana->tipo_hab_urba}} {{$hab_urbana->nomb_hab_urba}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <span class="text-danger">@error('tipoHabi'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">15</div> NOMBRE DE LA HABILITACION URBANA</label>
                                <input type="text" class="form-control" name="nomb_hab_urba" readonly placeholder="Nombre Habilitacion Urbana" wire:model="nomb_hab_urba" tabindex="27">
                                <span class="text-danger">@error('nomb_hab_urba'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-2">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">16</div> ZONA/SECTOR/ETAPA</label>
                                <input type="text" class="form-control" name="zona_dist" wire:model="zona_dist" placeholder="Zona, Sector, Etapa" onkeydown="return /[a-z. ;]/i.test(event.key)" tabindex="28" maxlength="15"> 
                                <span class="text-danger">@error('zona_dist'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">17</div> MANZANA</label>
                                <input type="text" class="form-control" name="mzna_dist" wire:model="mzna_dist" placeholder="Manzana" maxlength="15" tabindex="29">
                                <span class="text-danger">@error('mzna_dist'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-1">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">18</div> LOTE</label>
                                <input type="text" class="form-control"  name="lote_dist" wire:model="lote_dist" placeholder="Lote"  maxlength="5" tabindex="30">
                                <span class="text-danger">@error('lote_dist'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">19</div> SUB-LOTE</label>
                                <input type="text" class="form-control"  name="sub_lote_dist" wire:model="sub_lote_dist" placeholder="Sublote"  maxlength="6" tabindex="31">
                                <span class="text-danger">@error('sub_lote_dist'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    
                    <div class="row form-group">
                        <h4 class="mb-4"> IDENTIFICACIÓN DEL TITULAR CATASTRAL</h4>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">20</div> TIPO DE TITULAR</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_persona" id="tipo_persona" wire:model="tipoTitular" tabindex="32">
                                        <option value="">SELECCIONE</option>
                                        @foreach(\App\Models\TablaCodigo::where('id_tabla','=','TPE')->orderby('codigo','asc')->get() as $tablacodigo)
                                            <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('tipoTitular')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row form-group" wire:ignore id="natural">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">21</div> ESTADO CIVIL</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="esta_civil1" id="esta_civil1" wire:model="esta_civil1" tabindex="33">
                                        <option value="" >SELECCIONE</option>
                                        @foreach(\App\Models\TablaCodigo::where('id_tabla','=','ECV')->orderby('codigo','asc')->get() as $tablacodigo)
                                            <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('esta_civil1')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">22</div> TIPO DOC. IDENTIDAD</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_doc1" id="tipo_doc1" wire:model="tipo_doc1" tabindex="34">
                                        <option value="" >SELECCIONE</option>
                                        @foreach(\App\Models\TablaCodigo::where('id_tabla','=','DOC')->orderby('codigo','asc')->get() as $tablacodigo)
                                            <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('tipo_doc1')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">23</div> N° DOC.</label>
                                    <div class="btn-group">
                                        <input type="text" class="form-control" placeholder="" name="nume_doc1" id="nume_doc1" wire:model.defer="numedoc1" tabindex="35">
                                        <button type="button" class="btn btn-info btn-icon" wire:click="buscarTitular" ><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                                @error('numedoc1')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                                @if ($message = Session::get('success'))
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @endif
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">24</div> NOMBRES</label>
                                <input type="text" class="form-control" placeholder="" name="nombres1" id="nombres1" wire:model="nombres1" onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="36">
                                @error('nombres1')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->            
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">25</div> APELLIDO PATERNO</label>
                                <input type="text" class="form-control" placeholder="" name="ape_paterno1" id="ape_paterno1" wire:model="ape_paterno1" onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="37">
                                @error('ape_paterno1')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">26</div> APELLIDO MATERNO</label>
                                <input type="text" class="form-control" placeholder="" name="ape_materno1" id="ape_materno1" wire:model="ape_materno1" onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="38">
                                @error('ape_materno1')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <div id="casado" wire:ignore>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div wire:ignore>
                                        <label class="form-label d-inline-flex" > <div class="divcuadrorequired">22</div> TIPO DOC. IDENTIDAD</label>
                                        <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_doc2" id="tipo_doc2" wire:model="tipo_doc2"  tabindex="39">
                                            <option value="" >SELECCIONE</option>
                                            @foreach(\App\Models\TablaCodigo::where('id_tabla','=','DOC')->orderby('codigo','asc')->get() as $tablacodigo)
                                                <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('tipo_doc2')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">23</div> N° DOC.</label>
                                    <div class="btn-group">
                                        <input type="text" class="form-control" placeholder="" name="nume_doc2" id="nume_doc2" wire:model.lazy="numedoc2" tabindex="40">
                                        <button type="button" class="btn btn-info btn-icon" wire:click="buscarTitularEsposa"><i class="fa fa-search"></i></button>
                                    </div>
                                    @error('numedoc2')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                    @if ($message = Session::get('danger'))
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @endif
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row form-group">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">24</div> NOMBRES</label>
                                    <input type="text" class="form-control" placeholder="" name="nombres2" id="nombres2"  wire:model="nombres2" onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="41">
                                    @error('nombres2')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->            
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">25</div> APELLIDO PATERNO</label>
                                    <input type="text" class="form-control" placeholder="" name="ape_paterno2" id="ape_paterno2"  wire:model="ape_paterno2" onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="42">
                                    @error('ape_paterno2')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">26</div> APELLIDO MATERNO</label>
                                    <input type="text" class="form-control" placeholder="" name="ape_materno2" id="ape_materno2" wire:model="ape_materno2" onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="43">
                                    @error('ape_materno2')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                    </div>    
                    <div class="row form-group" wire:ignore id="juridica">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">27</div> Nº DE R.U.C.</label>
                                <div class="btn-group">
                                    <input type="text" class="form-control" placeholder="" name="nume_doc3" wire:model.lazy="numedoc3"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="11" tabindex="44">
                                    <button type="button" class="btn btn-info btn-icon" wire:click="buscarTitularRuc"><i class="fa fa-search"></i></button>
                                </div>
                                @error('numedoc3')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                                @if ($message = Session::get('warning'))
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @endif
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">28</div> RAZON SOCIAL</label>
                                <input type="text" class="form-control" placeholder="" name="razon_social" wire:model="razon_social" maxlength="100" tabindex="45">
                                @error('razon_social')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <!--SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">29</div> PERSONA JURIDICA</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_persona_juridica" id="tipo_persona_juridica" wire:model="tipo_persona_juridica" tabindex="46">
                                        <option value="" >SELECCIONE</option>
                                        @foreach(\App\Models\TablaCodigo::where('id_tabla','=','TPJ')->orderby('codigo','asc')->get() as $tablacodigo)
                                            <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('tipo_persona_juridica')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <h4 class="mb-4"> DOMICILIO FISCAL DEL TITULAR CATASTRAL</h4>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">30</div> UBICACION</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="ubicacionpersona" id="ubicacionpersona" wire:model="ubicacionpersona" tabindex="47">
                                        <option value="" >SELECCIONE</option>
                                        <option value="01">01 IGUAL A UNIDAD UU.CC.</option>
                                        <option value="02">02 OTROS</option>
                                    </select>
                                </div>
                                @error('ubicacionpersona')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3 mb-3">
                            <div wire:ignore>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">31</div> Departamento</label>
                                <select   class="form-select " data-width="100%" data-live-search="true"  name="departamentootros" id="departamentootros" wire:model="departamentootros" tabindex="48">

                                </select>
                            </div >
                            @error('departamentootros')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>  
                        <div class="col-md-3 mb-3">
                            <div wire:ignore>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">32</div> Provincias</label>
                                <select   class="form-select " name="provinciaotros" id="provinciaotros"  wire:model="provinciaotros" tabindex="49">

                                    
                                </select>
                            </div >
                            @error('provinciaotros')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">33</div> DISTRITO</label>
                                    <select   class="form-select " name="distritootros" id="distritootros"  wire:model="distritootros" tabindex="50">

                                        
                                    </select>
                                </div>
                                @error('distritootros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group" id="ubicacion">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">5</div> CÓDIGO DE VIA</label>
                                <input type="text" class="form-control" placeholder="" name="codigoviaotros" maxlength="6" wire:model="codigoviaotros" tabindex="51">
                                @error('codigoviaotros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">6</div> TIPO DE VIA</label>
                                <input type="text" class="form-control" placeholder="" name="tipoviaotros" wire:model="tipoviaotros" tabindex="52" maxlength="5">
                                @error('tipoviaotros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">7</div> NOMBRE DE VIA</label>
                                <input type="text" class="form-control" placeholder="" name="nombreviaotros" wire:model="nombreviaotros" tabindex="53" maxlength="100">
                                @error('nombreviaotros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">9</div> N° MUNICIPAL</label>
                                <input type="text" class="form-control" placeholder="" name="nmunicipalotros" maxlength="6" wire:model="nmunicipalotros" tabindex="54">
                                @error('nmunicipalotros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">13</div> N. INTERIOR</label>
                                <input type="text" class="form-control" placeholder="" name="ninteriorotros" maxlength="5" wire:model="ninteriorotros" tabindex="55" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                @error('ninteriorotros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">14</div> CODIGO HURBANO</label>
                                <input type="text" class="form-control" placeholder="" name="codigohurbanootros" wire:model="codigohurbanootros" tabindex="56"  maxlength="4">
                                @error('codigohurbanootros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">15</div> NOMBRE DE LA HABILITACION URBANA</label>
                                <input type="text" class="form-control" placeholder="" name="nombrehhurbanaotros" wire:model="nombrehhurbanaotros" tabindex="57" maxlength="100">
                                @error('nombrehhurbanaotros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-2">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">16</div> ZONA/SECTOR/ETAPA</label>
                                <input type="text" class="form-control" placeholder="" name="zonaootros" maxlength="50" wire:model="zonaootros" tabindex="58">
                                @error('zonaootros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">17</div> MANZANA</label>
                                <input type="text" class="form-control" placeholder="" name="manzanaotros" maxlength="5" wire:model="manzanaotros" tabindex="59">
                                @error('manzanaotros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-1">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">18</div> LOTE</label>
                                <input type="text" class="form-control" placeholder="" name="loteotros" wire:model="loteotros" maxlength="5" tabindex="60">
                                @error('loteotros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">19</div> SUB-LOTE</label>
                                <input type="text" class="form-control" placeholder="" name="subloteotros" wire:model="subloteotros" maxlength="5" tabindex="61">
                                @error('subloteotros')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">34</div> TELEFONO</label>
                                <input type="text" class="form-control" placeholder="" name="telefonodomicilio" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="10" wire:model="telefonodomicilio" tabindex="62">
                                @error('telefonodomicilio')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">35</div>ANEXO</label>
                                <input type="text" class="form-control" placeholder="" name="anexodomicilio" maxlength="5" wire:model="anexodomicilio" tabindex="63">
                                @error('anexodomicilio')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">36</div> CORREO ELECTRONICO</label>
                                <input type="text" class="form-control" placeholder="" name="emaildomicilio" maxlength="100" wire:model="emaildomicilio" tabindex="64">
                                @error('emaildomicilio')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <h4 class="mb-4"> CARACTERISTICAS DE LA TITULARIDAD</h4>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">37</div> CONDICION DEL TITULAR</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="cond_titular" id="cond_titular" wire:model="condtitular" tabindex="65">
                                    <option value=""  >SELECCIONE</option>
                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','CTT')->orderby('codigo','asc')->get() as $tablacodigo)
                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                    @endforeach
                                </select>
                                @error('condtitular')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->            
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">38</div> FORMA DE ADQUISICION</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="form_adquisicion" id="form_adquisicion" wire:model="form_adquisicion" tabindex="66">
                                    <option value="" >SELECCIONE</option>
                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','FAQ')->orderby('codigo','asc')->get() as $tablacodigo)
                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                    @endforeach
                                </select>
                                @error('form_adquisicion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">33</div> FECHA DE ADQUISICION</label>
                                <input type="date" class="form-control" placeholder="" name="fecha_adquisicion" wire:model="fecha_adquisicion" tabindex="67">
                                @error('fecha_adquisicion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <h4 class="mb-3"> DESCRIPCION DEL PREDIO</h4>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">40</div> CLASIFICACION DEL PREDIO</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="clasificacion" id="clasificacion" wire:model="clasificacion" tabindex="68">
                                    <option value=""   >SELECCIONE</option>
                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','CDP')->orderby('codigo','asc')->get() as $tablacodigo)
                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                    @endforeach
                                </select>
                                @error('clasificacion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->            
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">41</div> PREDIO CATASTRAL EN</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="cont_en" id="cont_en" wire:model="cont_en" tabindex="69">
                                    <option value="" >SELECCIONE</option>
                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','PEN')->orderby('codigo','asc')->get() as $tablacodigo)
                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                    @endforeach
                                </select>
                                @error('cont_en')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->                                                            
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">42</div> CODIGO DE USO</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="codi_uso" id="codi_uso" wire:model="codi_uso" tabindex="70">
                                        <option value="" >SELECCIONE</option>
                                        @foreach($usos as $uso)
                                            <option value="{{$uso->codi_uso}}">{{$uso->codi_uso}} {{$uso->desc_uso}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('codi_uso')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->    
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">44</div> ZONIFICACION</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="zonificacion" id="zonificacion" wire:model="zonificacion" tabindex="71">
                                    <option value="">SELECCIONE</option>
                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','ZON')->orderby('codigo','asc')->get() as $tablacodigo)
                                    <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                    @endforeach
                                </select>                                
                                @error('zonificacion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->            
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">45</div> AREA DE TERRENO ADQUIRIDO (M2)</label>
                                <input type="text" class="form-control" placeholder="" name="area_declarada" wire:model="area_declarada" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="72">
                                @error('area_declarada')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->  
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">46</div>  AREA DE TERRENO VERIFICADA (M2)</label>
                                <input type="text" class="form-control" placeholder="" name="area_verificada1" wire:model="area_verificada1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="12" tabindex="73">
                                @error('area_verificada1')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->                                                            
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <div class="col-md-4">
                            <div class="mb-3 divcuadroceleste">
                                <label class="form-label d-inline-flex"  > LINDEROS DE LOTE (ML)</label>                                                                
                            </div><!-- Col -->            
                            <div class="mb-3 divcuadroceleste">                                                
                                <label class="form-label d-inline-flex"  > FRENTE</label>                               
                            </div><!-- Col -->            
                            <div class="mb-3 divcuadroceleste">                                                
                                <label class="form-label d-inline-flex"  > DERECHA</label>                               
                            </div><!-- Col -->            
                            <div class="mb-3 divcuadroceleste">                                                
                                <label class="form-label d-inline-flex"  > IZQUIERDA</label>                               
                            </div><!-- Col -->            
                            <div class="mb-3 divcuadroceleste">                                                
                                <label class="form-label d-inline-flex"  > FONDO</label>                               
                            </div><!-- Col -->            
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">47</div> MEDIDA EN CAMPO</label>                                
                            </div><!-- Col -->    
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" name="fren_campo" wire:model="fren_campo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');" maxlength="200" tabindex="74">
                                @error('fren_campo')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div><!-- Col -->                                        
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" name="dere_campo" wire:model="dere_campo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');" maxlength="200" tabindex="76">
                                @error('dere_campo')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div><!-- Col -->                                        
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" name="izqu_campo" wire:model="izqu_campo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');" maxlength="200" tabindex="78">
                                @error('izqu_campo')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div><!-- Col -->                                        
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" name="fond_campo" wire:model="fond_campo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');" maxlength="200" tabindex="80">
                                @error('fond_campo')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div><!-- Col -->                                        
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">48</div>COLIDANCIAS EN CAMPO</label>                                
                            </div><!-- Col -->    
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" name="fren_colinda_campo" wire:model="fren_colinda_campo" maxlength="200" tabindex="75">
                                @error('fren_colinda_campo')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div><!-- Col -->                                        
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" name="dere_colinda_campo" wire:model="dere_colinda_campo" maxlength="200" tabindex="77">
                                @error('dere_colinda_campo')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div><!-- Col -->                                        
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" name="izqu_colinda_campo" wire:model="izqu_colinda_campo" maxlength="200" tabindex="79">
                                @error('izqu_colinda_campo')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div><!-- Col -->                                        
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" name="fond_colinda_campo" wire:model="fond_colinda_campo" maxlength="200" tabindex="81">
                                @error('fond_colinda_campo')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div><!-- Col -->                                        
                        </div>                                                     
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <h4 class="mb-4"> SERVICIOS BASICOS</h4>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">49</div> LUZ</label>                            
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="formSwitch1" name="luz" wire:model="luz"  tabindex="82">
                                </div>
                            </div>                            
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">50</div> AGUA</label>                            
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="agua" wire:model="agua" tabindex="83">
                                </div>
                            </div>                            
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">51</div> TELEFONO</label>                            
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="telefono" wire:model="telefono" tabindex="84">
                                </div>
                            </div>                            
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">52</div> DESAGÛE</label>                            
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="desague" wire:model="desague" tabindex="85">
                                </div>
                            </div>                            
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">53</div> GAS</label>                            
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="gas" wire:model="gas" tabindex="86">
                                </div>
                            </div>                            
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">54</div> INTERNET</label>                            
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="internet" wire:model="internet" tabindex="87">
                                </div>
                            </div>                            
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" style="width: 250px;"> <div class="divcuadro">55</div> CONEXION TV POR CABLE O CABLE SATELITAL</label>
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="tvcable" wire:model="tvcable" tabindex="88">
                                </div>
                            </div>                            
                        </div>
                    </div><!-- Row --> 
                    <!-- Construcciones -->
                    
                    <div class="row form-group">    
                        <h4 class="mb-4"> CONSTRUCCIONES</h4>
                        <div class="col-md-12 mb-5">
                            <div class="table-responsive">
                                <table id="vias" class="table">
                                    <thead>
                                        <tr >
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">56</div> N° PISO</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">57</div> FECHA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">58</div> MEP</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">59</div> ECS</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">60</div> ECC</label></th>                
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">61</div> MUROS </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">62</div> TECHOS </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">63</div> PISOS </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">64</div> P. Y V. </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">65</div> REVEST. </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">66</div> BAÑOS </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">67</div> INST. E. </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">68</div> AREA V. </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">69</div> UCA{{$cont2}} </label></th>
                                            <th>

                                            @if($codi_uso == "070101")
                                                
                                            @else
                                                @if($cont2>0)
                                                @else
                                                    <button type="button" class="btn btn-success btn-icon" wire:click="aumentarConstruccion" tabindex="90">{{$codi_uso}}</button>
                                                @endif
                                            @endif

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i=0;$i<$cont2;$i++)
                                        <tr >
                                            <td>
                                                <input type="text" class="form-control"  name="nume_piso[]" placeholder="N° piso" id="num_piso.{{$i}}"  wire:model="num_piso.{{$i}}"  maxlength="2" tabindex="90">
                                                @error('num_piso.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="month" class="form-control"  name="fecha[]" placeholder="FECHA" id="fecha.{{$i}}"  wire:model="fecha.{{$i}}" tabindex="90">
                                                @error('fecha.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="mep.{{$i}}" id="mep.{{$i}}" wire:model="mep.{{$i}}" tabindex="90">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','MEP')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('mep.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="ecs.{{$i}}" id="ecs.{{$i}}" wire:model="ecs.{{$i}}" tabindex="90">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','ECS')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('ecs.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>    
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="ecc.{{$i}}" id="ecc.{{$i}}" wire:model="ecc.{{$i}}" tabindex="90">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','ECC')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('ecc.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="estr_muro_col[]" placeholder="MUROS" wire:model="estr_muro_col.{{$i}}"  onkeydown="return /[a-z. ;]/i.test(event.key)" maxlength="1" tabindex="90">
                                                @error('estr_muro_col.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror        
                                            </td> 
                                            <td>
                                                <input type="text" class="form-control"  name="estr_techo[]" placeholder="TECHOS" wire:model="estr_techo.{{$i}}"   onkeydown="return /[a-z. ;]/i.test(event.key)" maxlength="1" tabindex="90">
                                                @error('estr_techo.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="acab_piso[]" placeholder="PISOS" wire:model="acab_piso.{{$i}}"  onkeydown="return /[a-z. ;]/i.test(event.key)" maxlength="1" tabindex="90">
                                                @error('acab_piso.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>                                    
                                                <input type="text" class="form-control"  name="acab_puerta_ven[]" placeholder="P. Y V." wire:model="acab_puerta_ven.{{$i}}"  onkeydown="return /[a-z. ;]/i.test(event.key)" maxlength="1" tabindex="90">
                                                @error('acab_puerta_ven.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="acab_revest[]" placeholder="REVEST." wire:model="acab_revest.{{$i}}"   onkeydown="return /[a-z. ;]/i.test(event.key)" maxlength="1" tabindex="90">
                                                @error('acab_revest.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="acab_bano[]" placeholder="BAÑOS" wire:model="acab_bano.{{$i}}"  onkeydown="return /[a-z. ;]/i.test(event.key)" maxlength="1" tabindex="90">
                                                @error('acab_bano.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>                                    
                                                <input type="text" class="form-control"  name="inst_elect_sanita[]" placeholder="INST. E." wire:model="inst_elect_sanita.{{$i}}"  onkeydown="return /[a-z. ;]/i.test(event.key)" maxlength="1" tabindex="90">
                                                @error('inst_elect_sanita.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>                                    
                                                <input type="text" class="form-control"  name="area_verificada[]" placeholder="AREA VERIFICADA" wire:model="area_verificada.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="9"  tabindex="90">
                                                @error('area_verificada.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="uca.{{$i}}" id="uca.{{$i}}" wire:model="uca.{{$i}}" tabindex="90">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','UCA')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('uca.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            
                                            <td>
                                                @if($i==$cont2-1)
                                                    <button type="button" class="btn btn-success btn-icon" wire:click="aumentarConstruccion" tabindex="90">+</button>
                                                @endif
                                                <button type="button" class="btn btn-danger btn-icon" wire:click="eliminarConstruccion({{$i}})" tabindex="22">X</button>
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <!-- Construcciones -->
                    <div class="row  form-group">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">70</div>% DEL BIEN COMUN</label>                        
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > TERRENO LEGAL</label>
                                <input type="text" class="form-control" name="porc_bc_terr_legal" wire:model="porc_bc_terr_legal" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="104">
                                @error('porc_bc_terr_legal')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->            
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > CONSTRUCCION LEGAL</label>
                                <input type="text" class="form-control"  name="porc_bc_const_legal" wire:model="porc_bc_const_legal" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="105">
                                @error('porc_bc_const_legal')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col --> 
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > TERRENO FISICO</label>
                                <input type="text" class="form-control" name="porc_bc_terr_fisc"  wire:model="porc_bc_terr_fisc" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="106">
                                @error('porc_bc_terr_fisc')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->            
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > CONSTRUCCION FISICO</label>
                                <input type="text" class="form-control" name="porc_bc_const_fisc" wire:model="porc_bc_const_fisc" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="107">
                                @error('porc_bc_const_fisc')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->                                                                             
                    </div><!-- Row --> 
                    <!-- Construcciones -->
                    <div class="row form-group">    
                        <h4 class="mb-4"> OBRAS COMPLEMENTARIAS / OTRAS INSTALACIONES</h4>
                        <div class="col-md-12 mb-5">
                            <div class="table-responsive">
                                <table id="vias" class="table">
                                    <thead>
                                        <tr >
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">71</div> CODIGO</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">57</div> FECHA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">58</div> MEP</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">59</div> ECS</label></th>                
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">60</div> ECC </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">73</div> PRODUCTO TOTAL </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">74</div> U. MEDIDA </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">69</div> UCA </label></th>
                                            <th>
                                            @if($cont3>0)
                                            @else
                                                <button type="button" class="btn btn-success btn-icon" wire:click="aumentarObras" tabindex="108">+</button>
                                            @endif
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i=0;$i<$cont3;$i++)
                                        <tr>
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="codiinstalacion.{{$i}}" id="codiinstalacion.{{$i}}" wire:model="codiinstalacion.{{$i}}" tabindex="109">
                                                    <option value="">SELECCIONE</option>
                                                    @foreach($codigosinstalacion as $codigoin)
                                                        <option value="{{$codigoin->codi_instalacion}}" >{{$codigoin->codi_instalacion}} {{$codigoin->desc_instalacion}} {{$codigoin->material}}</option>
                                                    @endforeach
                                                </select>
                                                @error('codiinstalacion.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="month" class="form-control" name="inst_fecha[]" placeholder="FECHA" id="inst-fecha.{{$i}}" wire:model="inst_fecha.{{$i}}" tabindex="109">
                                                @error('inst_fecha.'.$i)
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="inst_mep.{{$i}}" id="inst_mep.{{$i}}" wire:model="inst_mep.{{$i}}" tabindex="109">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','MEP')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('inst_mep.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>        
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="inst_ecs.{{$i}}" id="inst_ecs.{{$i}}" wire:model="inst_ecs.{{$i}}" tabindex="109">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','ECS')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('inst_ecs.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="inst_ecc.{{$i}}" id="inst_ecc.{{$i}}" wire:model="inst_ecc.{{$i}}" tabindex="109">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','ECC')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('inst_ecc.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror        
                                            </td> 
                                            <td>
                                                <input type="text" class="form-control"  name="inst_prod_total[]" placeholder="PRODUCTO TOTAL" id="inst-prod_total.{{$i}}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" wire:model="inst_prod_total.{{$i}}" tabindex="109">
                                                @error('inst_prod_total.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="inst_uni_med[]" placeholder="U. MEDIDA" id="inst-uni_med.{{$i}}" maxlength="10"  wire:model="inst_uni_med.{{$i}}" tabindex="109">
                                                @error('inst_uni_med.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="inst_uca.{{$i}}" id="inst_uca.{{$i}}" wire:model="inst_uca.{{$i}}" tabindex="109">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','UCA')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('inst_uca.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>                                
                                            <td>
                                                

                                                @if($i==$cont3-1)
                                                    <button type="button" class="btn btn-success btn-icon" wire:click="aumentarObras" tabindex="109">+</button>
                                                @endif
                                                <button type="button" class="btn btn-danger btn-icon" wire:click="eliminarObras({{$i}})" tabindex="117">X</button>

                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <!-- Construcciones -->
                    <!-- Documentos -->
                    <div class="row form-group">    
                        <h4 class="mb-4"> DOCUMENTOS</h4>
                        <div class="col-md-12 mb-5">
                            <div class="table-responsive">
                                <table id="vias" class="table">
                                    <thead>
                                        <tr >
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">75</div>TIPO DOC.</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">76</div>N° DE DOCUMENTO</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">77</div>FECHA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">78</div>AREA AUTORIZADA</label></th>
                                            <th>
                                                @if($cont4>0)
                                                <button type="button" class="btn btn-danger btn-icon" wire:click="reducirDocumentos" tabindex="119">-</button>
                                                @else
                                                <button type="button" class="btn btn-success btn-icon" wire:click="aumentarDocumentos" tabindex="118">+</button>
                                                @endif
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i=0;$i<$cont4;$i++)
                                        <tr >
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_dococumento[]" id="tipo_dococumento.{{$i}}" wire:model="tipo_dococumento.{{$i}}" tabindex="119">
                                                    <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','TDC')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('tipo_dococumento.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="nume_documento[]" placeholder="N° DE DOCUMENTO" id="Documento.{{$i}}"  maxlength="20" wire:model="nume_documento.{{$i}}" tabindex="119">
                                                @error('nume_documento.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="date" class="form-control"  name="fecha_dococumento[]" placeholder="FECHA" id="fecha_dococumento.{{$i}}"  wire:model="fecha_dococumento.{{$i}}" tabindex="119">
                                                @error('fecha_dococumento.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="area_autorizadadocumento[]" placeholder="AREA AUTORIZADA" id="area_autorizadadocumento.{{$i}}"  wire:model="area_autorizadadocumento.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="119">
                                                @error('area_autorizadadocumento.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            
                                            <td>
                                                
                                                @if($i==$cont4-1)
                                                    <button type="button" class="btn btn-success btn-icon" wire:click="aumentarDocumentos" tabindex="119">+</button>
                                                @endif
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <!-- Documentos -->
                    <div class="row form-group">
                    <h4 class="mb-5"> INSCRIPCION DEL PREDIO CATASTRAL</h4>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">79</div>TIPO DE PARTIDA REGISTRAL</label>
                                <select class="form-select" id="tipo_partida" aria-label="Default select example" name="tipo_partida" wire:model="tipo_partida" tabindex="124">
                                <option value="" >SELECCIONE</option>
                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','TPA')->orderby('codigo','asc')->get() as $tablacodigo)
                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                    @endforeach

                                    
                                </select>
                                @error('tipo_partida')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->            
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">80</div>NUMERO</label>
                                <input type="text" id="nume_partida" class="form-control" name="nume_partida" maxlength="18" wire:model="nume_partida" tabindex="125">
                                @error('nume_partida')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col --> 
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">81</div>FOJAS </label>
                                <input type="text" id="fojas" class="form-control" name="fojas" maxlength="18" wire:model="fojas" tabindex="126">
                                @error('fojas')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">82</div>ASIENTO</label>
                                <input type="text" id="asiento" class="form-control" name="asiento" maxlength="18" wire:model="asiento" tabindex="127">
                                @error('asiento')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">83</div>FECHA DE INSCRIPCION</label>
                                <input type="date" id="fecha_inscripcion" class="form-control" name="fecha_inscripcion" wire:model="fecha_inscripcion" tabindex="128">
                                @error('fecha_inscripcion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->            
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">84</div>DECLARATORIA DE FABRICA</label>
                                <select class="form-select" id="codi_decla_fabrica" aria-label="Default select example" name="codi_decla_fabrica" wire:model="codi_decla_fabrica" tabindex="129">
                                    <option value="">Seleccione</option>                                   

                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','DFB')->orderby('codigo','asc')->get() as $tablacodigo)
                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                    @endforeach

                                    
                                </select>
                                @error('codi_decla_fabrica')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col --> 
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">85</div>AS. INSC. DE FABRICA </label>
                                <input type="text" id="asie_fabrica" class="form-control" name="asie_fabrica" maxlength="18" wire:model="asie_fabrica" tabindex="130">
                                @error('asie_fabrica')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">86</div>FECHA DE INSC. DE FABRICA</label>
                                <input type="date" id="fecha_fabrica" class="form-control" name="fecha_fabrica" wire:model="fecha_fabrica" tabindex="131">
                                @error('fecha_fabrica')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">
                    <h4 class="mb-5"> EVALUACION DEL PREDIO CATASTRAL</h4>
                    <label class="form-label d-inline-flex" > <div class="divcuadro">87</div>ÁREA DE TERRENO INVADIDA (M2)</label>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" >EN COLIDANTE</label>
                                <input type="text" id="en_colindante" class="form-control" placeholder="EN LOTE COLINDANTE" name="en_colindante" wire:model="en_colindante" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="132">
                                @error('en_colindante')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->            
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" >EN ÁREA PÚBLICA</label>
                                <input type="text" id="en_area_publica" class="form-control" placeholder="EN AREA PUBLICA" name="en_area_publica" wire:model="en_area_publica" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="133">
                                @error('en_area_publica')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col --> 
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" >EN JARDÍN DE AISLAMIENTO</label>
                                <input type="text" id="en_jardin_aislamiento" class="form-control" placeholder="EN JARDIN  DE AISLAMIENTO" name="en_jardin_aislamiento" wire:model="en_jardin_aislamiento" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="134">
                                @error('en_jardin_aislamiento')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" >EN ÁREA INTANGIBLE</label>
                                <input type="text" id="en_area_intangible" class="form-control" placeholder="EN AREA INTANGIBLE" name="en_area_intangible" wire:model="en_area_intangible" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="135">
                                @error('en_area_intangible')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 

                    <div class="row form-group">    
                        <h4 class="mb-4"> INFORMACION COMPLEMENTARIA</h4>
                        <div class="row form-group">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">88</div>CONDICIÓN DE DECLARANTE</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="cond_declarante" id="cond_declarante" wire:model="cond_declarante" tabindex="136">
                                        <option value="" >SELECCIONE</option>
                                        
                                        @foreach(\App\Models\TablaCodigo::where('id_tabla','=','CDE')->orderby('codigo','asc')->get() as $tablacodigo)
                                            <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                        @endforeach
                                    </select>
                                    @error('cond_declarante')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->            
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">90</div>ESTADO DE LLENADO DE LA FICHA</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="esta_llenado" id="esta_llenado" wire:model="esta_llenado" tabindex="137">
                                    <option value="" >SELECCIONE</option>

                                        @foreach(\App\Models\TablaCodigo::where('id_tabla','=','LLE')->orderby('codigo','asc')->get() as $tablacodigo)
                                            <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                        @endforeach
                                    </select>
                                    @error('esta_llenado')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col --> 
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">91</div>N° DE HABITANTES </label>
                                    <input type="text" id="nume_habitantes" class="form-control" name="nume_habitantes" wire:model="nume_habitantes" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="138">
                                    @error('nume_habitantes')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">92</div>N° DE FAMILIAS</label>
                                    <input type="text" id="nume_familias" class="form-control" name="nume_familias" wire:model="nume_familias" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="139">
                                    @error('nume_familias')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror"
                                </div>
                            </div><!-- Col -->
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">93</div>MANTENIMIENTO</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="mantenimiento" id="mantenimiento" wire:model="mantenimiento" tabindex="140">
                                        <option value="">SELECCIONE</option>

                                        @foreach(\App\Models\TablaCodigo::where('id_tabla','=','MFI')->orderby('codigo','asc')->get() as $tablacodigo)
                                            <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                        @endforeach


                                    </select>
                                    @error('mantenimiento')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col --> 
                        </div><!-- Row --> 
                        <div class="col-md-12 mb-5">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">89</div>IDENTIFICACIÓN DE LOS LITIGANTES</label>
                            </div>
                            <div class="table-responsive">
                                <table id="vias" class="table">
                                    <thead>
                                        <tr >
                                            <th><label class="form-label d-inline-flex" > T. DOCUMENTO</label></th>
                                            <th><label class="form-label d-inline-flex" > N° DOCUMENTO</label></th>
                                            <th><label class="form-label d-inline-flex" > CODIGO DEL CONTRIBUYENTE</label></th>
                                            <th><label class="form-label d-inline-flex" > NOMBRES</label></th>
                                            <th><label class="form-label d-inline-flex" > APELLIDO PATERNO</label></th>
                                            <th><label class="form-label d-inline-flex" > APELLIDO MATERNO</label></th>
                                            <th>
                                                
                                                @if($cont5>0)
                                                <button type="button" class="btn btn-danger btn-icon" wire:click="reducirinformacion" tabindex="142">-</button>
                                                @else
                                                <button type="button" class="btn btn-success btn-icon" wire:click="aumentarinformacion" tabindex="141">+</button>
                                                @endif
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i=0;$i<$cont5;$i++)
                                        <tr >
                                            <td>
                                                <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_doc_litigante[]" id="tipo_doc_litigante{{$i}}" wire:model="tipolitigante.{{$i}}" tabindex="142">
                                                <option value="" >SELECCIONE</option>
                                                    @foreach(\App\Models\TablaCodigo::where('id_tabla','=','DOC')->orderby('codigo','asc')->get() as $tablacodigo)
                                                        <option value="{{$tablacodigo->codigo}}">{{$tablacodigo->codigo}} {{$tablacodigo->desc_codigo}}</option>
                                                    @endforeach
                                                </select>
                                                @error('tipolitigante.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <input type="text" class="form-control"  name="nume_doclitigante[]" placeholder="NUMERO DE DOCUMENTO" id="nume_doc{{$i}}" wire:model.defer="numedoc.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="17" tabindex="142">
                                                    <button type="button" class="btn btn-info btn-icon" wire:click="buscarLitigante({{$i}})"><i class="fa fa-search"></i></button>
                                                </div>
                                                @if ($message = Session::get('info.'.$i))
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @endif
                                                @error('numedoc.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="codi_contribuye[]" placeholder="CODIGO DE CONTRIBUYENTE" id="codi_contribuye{{$i}}" wire:model="codi_contribuye.{{$i}}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  maxlength="18" tabindex="142">
                                                @error('codi_contribuye.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td> 
                                            <td>
                                                <input type="text" class="form-control"  name="nombreslitigante[]" placeholder="NOMBRES" id="nombres{{$i}}" wire:model="nombres.{{$i}}"  onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="142">
                                                @error('nombres.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="ape_paternolitigante[]" placeholder="APELLIDO PATERNO" id="ape_paterno{{$i}}" wire:model="ape_paterno.{{$i}}"  onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="142">
                                                @error('ape_materno.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="ape_maternolitigante[]" placeholder="APELLIDO MATERNO" id="ape_materno{{$i}}" wire:model="ape_materno.{{$i}}"  onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="142">
                                                @error('ape_paterno.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>              
                                            <td>
                                                @if($i==$cont5-1)
                                                    <button type="button" class="btn btn-success btn-icon" wire:click="aumentarinformacion" tabindex="142">+</button>
                                                @endif
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row --> 
                    <div class="row form-group">
                    <h4 class="mb-5"> OBSERVACION</h4>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <textarea type="textarea" class="form-control" rows="5" name="observacion" wire:model.defer="observacion" tabindex="149"></textarea>
                            </div>
                            @error('observacion')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div><!-- Col -->    
                    </div><!-- Row --> 
                    <div class="row form-group">
                        <div class="row form-group">
                            <label class="form-label d-inline-flex" > <div class="divcuadro">94</div>DECLARANTE</label>
                            <div class="col-md-2 mb-3">
                                <label class="form-label d-inline-flex" >DNI</label>
                                <div class="btn-group">
                                    <input type="number" class="form-control" name="num_documento_declarante" wire:model.defer="numdocumentodeclarante" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="17" tabindex="150">
                                    <button type="button" class="btn btn-info btn-icon" wire:click="buscarDeclarante"><i class="fa fa-search"></i></button>
                                </div>
                                @error('numdocumentodeclarante')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                                @if ($message = Session::get('dark'))
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @endif
                            </div>  
                            <div class="col-md-2 mb-3">
                                <label class="form-label d-inline-flex" > NOMBRES</label>
                                <input type="text" class="form-control" name="nombres_declarante" wire:model="nombres_declarante" onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="151">
                                @error('nombres_declarante')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>  
                            <div class="col-md-3 mb-3">
                                <label class="form-label d-inline-flex" > APELLIDO PATERNO</label>
                                <input type="text" class="form-control" name="apellido_paterno_declarante" wire:model="apellido_paterno_declarante" onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="152">
                                @error('apellido_paterno_declarante')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>  
                            <div class="col-md-3 mb-3">
                                <label class="form-label d-inline-flex" > APELLIDO MATERNO</label>
                                <input type="text" class="form-control" name="apellido_materno_declarante" wire:model="apellido_materno_declarante" onkeydown="return /[a-ñ. ;]/i.test(event.key)" tabindex="153">
                                @error('apellido_materno_declarante')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>  
                            <div class="col-md-2 mb-3">
                                <label class="form-label d-inline-flex" > FECHA</label>
                                <input type="date" class="form-control" name="fecha_declarante" wire:model="fecha_declarante" tabindex="154">
                                @error('fecha_declarante')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>  
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label d-inline-flex" > <div class="divcuadro">95</div>SUPERVISOR</label>
                            <select class="form-select"  data-width="100%" data-live-search="true" name="supervisor" id="supervisor" wire:model="supervisor" tabindex="155">
                                <option value="">SELECCIONE</option>
                                @foreach($supervisores as $supervisor)
                                    <option value="{{$supervisor->id_persona}}">{{$supervisor->nume_doc}} {{$supervisor->nombres}} {{$supervisor->ape_paterno}} {{$supervisor->ape_materno}}</option>
                                @endforeach
                            </select>
                            @error('supervisor')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                            <label class="form-label d-inline-flex" > FECHA</label>
                            <input type="date" class="form-control" name="fecha_supervision" wire:model="fecha_supervision" tabindex="156">
                            @error('fecha_supervision')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>  
                        <div class="col-md-4 mb-3">
                            <label class="form-label d-inline-flex" > <div class="divcuadrorequired">96</div>TÉCNICO CATASTRAL</label>
                            <select class="form-select"  data-width="100%" data-live-search="true" name="tecnico" id="tecnico" wire:model="tecnico"tabindex="157">
                                <option value="">SELECCIONE</option>
                                @foreach($tecnicos as $tecnico)
                                    <option value="{{$tecnico->id_persona}}">{{$tecnico->nume_doc}} {{$tecnico->nombres}} {{$tecnico->ape_paterno}} {{$tecnico->ape_materno}}</option>
                                @endforeach
                            </select>
                            @error('tecnico')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                            <label class="form-label d-inline-flex" > FECHA</label>
                            <input type="date" class="form-control" name="fecha_levantamiento" wire:model="fecha_levantamiento" tabindex="158">
                            @error('fecha_levantamiento')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>  
                        <div class="col-md-4 mb-3">
                            <label class="form-label d-inline-flex" > <div class="divcuadro">97</div>Vº Bº VERIFICADOR CATASTRAL</label>
                            <select class="form-select"  data-width="100%" data-live-search="true" name="verificador" id="verificador" wire:model="verificador" tabindex="159">
                                <option value="">SELECCIONE</option>
                                @foreach($verificadores as $verificador)
                                    <option value="{{$verificador->id_persona}}">{{$verificador->nume_doc}} {{$verificador->nombres}} {{$verificador->ape_paterno}} {{$verificador->ape_materno}}</option>
                                @endforeach
                            </select>
                            @error('verificador')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                            <label class="form-label d-inline-flex" > Nº DE REGISTRO</label>
                            <input type="text" class="form-control" name="nume_registro" wire:model="nume_registro" tabindex="160" maxlength="10">
                            @error('nume_registro')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                            <label class="form-label d-inline-flex" > FECHA</label>
                            <input type="date" class="form-control" name="fecha_verificacion" wire:model="fecha_verificacion" tabindex="161">
                            @error('fecha_verificacion')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>  
                    </div><!-- Row -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" tabindex="162">Guardar</button>
                        @error('sectorbloqueo')
                            <span class="error-message" style="color:red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>            
        </div>
    </div>
    </form>
</div>

@push('custom-scripts')
<script>





$('#juridica').hide();
$('#natural').hide();
$('#casado').hide();

$('#tipo_persona').change(titulartipo);
$('#esta_civil1').change(titularcasado);

function titulartipo(){
    if($("#tipo_persona option:selected").val()=="1")
    {
        $('#natural').show();
        $('#juridica').hide();
        $('#casado').hide();
    }
    if($("#tipo_persona option:selected").val()=="2")
    {
        $('#natural').hide();
        $('#juridica').show();
        $('#casado').hide();
    }
    if($("#tipo_persona option:selected").val()!="2" && $("#tipo_persona option:selected").val()!="1"){
        $('#natural').hide();
        $('#juridica').hide();
        $('#casado').hide();
    }
}
function titularcasado(){
    if($("#esta_civil1 option:selected").val()=="02"||$("#esta_civil1 option:selected").val()=="05"){
        $('#casado').show();
    }else{
        $('#casado').hide();
    }
}


$('#codi_uso').change(Mostrarmas);

function Mostrarmas()
{
    if($("#codi_uso option:selected").val()=="070101")
    {
        $('#construcciones2').hide();
    }else{
        $('#construcciones2').show();
    }
}

$('#ubicacionpersona').change(agregarValores);

$('#departamentootros').change(agregarValores2);
$('#provinciaotros').change(agregarValores3);

function agregarValores(){

    if($("#ubicacionpersona option:selected").val() == "01"){
        $('#departamentootros').empty();
        $('#departamentootros').append("<option value='08' >CUSCO</option>");
        $('#provinciaotros').empty();
        $('#provinciaotros').append("<option value='01' >CUSCO</option>");
        $('#distritootros').empty();
        $('#distritootros').append("<option value='05' >SAN SEBASTIAN</option>");
    }else{
        $('#departamentootros').empty();
        $('#departamentootros').append("<option value='' >SELECCIONE</option>");
        <?php foreach ($departamentos  as $dep): ?>
            $('#departamentootros').append("<option value='{{$dep->cod_dep}}' >{{$dep->descri}}</option>");
        <?php endforeach ?>
        $('#provinciaotros').empty();
        $('#distritootros').empty();
    }
}

function limpiarselect(){
    $('#departamentootros').empty();
}

function agregarValores2(){
    limpiarselect2();
    $('#provinciaotros').append("<option value='' >SELECCIONE</option>");
    <?php foreach ($provincias  as $pro): ?>
        if({{$pro->cod_dep}}==$("#departamentootros option:selected").val()){
            $('#provinciaotros').append("<option value='{{$pro->cod_pro}}' >{{$pro->descri}}</option>");
        }
    <?php endforeach ?> 
}

function limpiarselect2(){
    $('#provinciaotros').empty();
    $('#distritootros').empty();
}

function agregarValores3(){
    limpiarselect3();
    $('#distritootros').append("<option value='' >SELECCIONE</option>");
    <?php foreach ($distritos  as $dis): ?>
        if({{$dis->cod_pro}}==$("#provinciaotros option:selected").val() && {{$dis->cod_dep}}==$("#departamentootros option:selected").val())
        {
            $('#distritootros').append("<option value='{{$dis->codi_dis}}' >{{$dis->descri}}</option>");
        }
    <?php endforeach ?> 
}

function limpiarselect3(){
    $('#distritootros').empty();
}
</script>

@endpush