<div class="row">
<form id="contact" method="POST" class="forms-sample" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="col-md-12 grid-margin stretch-card" >
        <div class="card">
            <div class="card-body">
                <div class="row">
                <h3 class="mb-4">Ficha Catastral Urbana Bienes Comunes</h3>

                    <div class="row form-group">
                        <h4 class="mb-4"> DATOS GENERALES</h4>
                        <div class="col-md-3">
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
                                        <input  type="text" class="form-control" placeholder="" name="nume_ficha_lote2" wire:model="nume_ficha_lote2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="3">
                                        @error('nume_ficha_lote2')
                                            <span class="error-message" style="color:red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">1</div> CÓDIGO ÚNICO CATASTRAL - CUC</label>
                                <input type="text" class="form-control" placeholder="" name="cuc" wire:model.defer="cuc" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="12" tabindex="4">
                                @error('cuc')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">2</div> CÓDIGO HOJA CATASTRAL</label>
                                <input type="text" class="form-control" placeholder="" name="codi_hoja_catastral" wire:model="codi_hoja_catastral" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="12" tabindex="4">
                                @error('codi_hoja_catastral')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row  form-group">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">3</div> CÓDIGO DE REFERENCIA CATASTRAL</label>
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
                                            <label class="form-label labelpeque d-inline-flex" >SECTOR</label>
                                            <input type="text" class="form-control" placeholder="" name="sector" wire:model.lazy="sector" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" tabindex="8">
                                            @error('sector')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label labelpeque d-inline-flex" >MANZANA</label>
                                            <input type="text" class="form-control" placeholder="" name="mzna" wire:model.lazy="mzna" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="9">
                                            @error('mzna')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex" >LOTE</label>
                                            <input type="text" class="form-control" placeholder="" name="lote" wire:model.lazy="lote" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="10">
                                            @error('lote')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex" >EDIFICA</label>
                                            <input type="text" class="form-control" placeholder="" name="edifica" wire:model.lazy="edifica" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" tabindex="11">
                                            @error('edifica')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex" >ENTRADA</label>
                                            <input type="text" class="form-control" readonly placeholder="" name="entrada" wire:model.lazy="entrada" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" tabindex="12">
                                            @error('entrada')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex" >PISO</label>
                                            <input type="text" class="form-control" readonly placeholder="" name="piso" wire:model.lazy="piso"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" tabindex="13">
                                            @error('piso')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex" >UNIDAD</label>
                                            <input type="text" class="form-control" readonly placeholder="" name="unidad" wire:model.lazy="unidad" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="3" tabindex="14">
                                            @error('unidad')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label class="form-label labelpeque d-inline-flex" >DC</label>
                                            <input type="number" class="form-control" readonly placeholder="" name="dc" wire:model="dc" tabindex="15">
                                            @error('dc')
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->

                    <div class="row form-group">
                        <h4 class="mb-4"> UBICACION DEL PREDIO CATASTRAL</h4>
                        <div class="col-md-12 mb-5">
                            <div class="table-responsive">
                                <table id="vias" class="table">
                                    <thead>
                                        <tr>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadrorequired">07</div> CÓDIGO DE VIA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">08</div> TIPO DE VIA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">09</div> NOMBRE DE VIA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadrorequired">10</div>TIPO DE PUERTA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">11</div> N° MUNICIPAL</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">12</div> COND. NUMER. </label></th>
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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">14</div> NOMBRE DE EDIFICACION</label>
                                <input type="text" class="form-control" placeholder="" name="nomb_edificacion" wire:model="nomb_edificacion"  maxlength="100" tabindex="19">
                                @error('nomb_edificacion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">15</div> TIPO DE EDIFICACION</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="tipo_edificacion" id="tipo_edificacion" wire:model="tipo_edificacion" tabindex="20">
                                    <option value=""  >SELECCIONE</option>
                                    <option value="01">01 BLOCK</option>
                                    <option value="02">02 CASA / CHALET</option>
                                    <option value="03">03 EDIFICIO</option>
                                    <option value="04">04 PABELLON</option>
                                </select>
                                @error('tipo_edificacion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">18</div> CODIGO URBANO</label>
                                    <select  class="form-select insumo_id" id="hab_urbana_id" name="hab_urbana_id" data-width="100%" wire:model="tipoHabi" tabindex="21">
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
                                <label class="form-label d-inline-flex" > <div class="divcuadro">19</div> NOMBRE DE LA HABILITACION URBANA</label>
                                <input type="text" class="form-control" name="nomb_hab_urba" readonly placeholder="Nombre Habilitacion Urbana" wire:model="nomb_hab_urba" tabindex="22">
                                <span class="text-danger">@error('nomb_hab_urba'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-2">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">20</div> ZONA/SECTOR/ETAPA</label>
                                <input type="text" class="form-control" name="zona_dist" wire:model="zona_dist" placeholder="Zona, Sector, Etapa" onkeydown="return /[a-z. ;]/i.test(event.key)" tabindex="23" maxlength="15">
                                <span class="text-danger">@error('zona_dist'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">21</div> MANZANA</label>
                                <input type="text" class="form-control" name="mzna_dist" wire:model="mzna_dist" placeholder="Manzana" maxlength="15" tabindex="24">
                                <span class="text-danger">@error('mzna_dist'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-1">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">22</div> LOTE</label>
                                <input type="text" class="form-control"  name="lote_dist" wire:model="lote_dist" placeholder="Lote"  maxlength="5" tabindex="25">
                                <span class="text-danger">@error('lote_dist'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-2">
                            <div class="mb-3">
                            <label class="form-label d-inline-flex" > <div class="divcuadro">23</div> SUB-LOTE</label>
                                <input type="text" class="form-control"  name="sub_lote_dist" wire:model="sub_lote_dist" placeholder="Sublote"  maxlength="6" tabindex="26">
                                <span class="text-danger">@error('sub_lote_dist'){{$message}}@enderror</span>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row form-group">



                    </div><!-- Row -->
                    <div class="row form-group">
                        <h4 class="mb-3"> DESCRIPCION DEL PREDIO</h4>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">54</div> CLASIFICACION DEL PREDIO</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="clasificacion" id="clasificacion" wire:model="clasificacion" tabindex="27">
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
                                <label class="form-label d-inline-flex" > <div class="divcuadrorequired">55</div> PREDIO CATASTRAL EN</label>
                                <select class="form-select"  data-width="100%" data-live-search="true" name="cont_en" id="cont_en" wire:model="cont_en" tabindex="28">
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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div wire:ignore>
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">56</div> CODIGO DE USO</label>
                                    <select class="form-select"  data-width="100%" data-live-search="true" name="codi_uso" id="codi_uso" wire:model="codi_uso" tabindex="29">
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
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">58</div> ESTRUCTURACION</label>
                                <input type="text" class="form-control" placeholder="Estructuracion" name="estructuracion" wire:model="estructuracion" tabindex="30">
                                @error('estructuracion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">59</div> ZONIFICACION</label>
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
                            <label class="form-label d-inline-flex" > <div class="divcuadro">60</div> AREA DE TERRENO ADQUIRIDO (M2)</label>
                                <input type="text" class="form-control" placeholder="" name="area_declarada" wire:model="area_declarada" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="32">
                                @error('area_declarada')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                            <label class="form-label d-inline-flex" > <div class="divcuadro">62</div>  AREA DE TERRENO VERIFICADA (M2)</label>
                                <input type="text" class="form-control" placeholder="" name="area_verificada1" wire:model="area_verificada1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="9" tabindex="33">
                                @error('area_verificada1')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row form-group">
                        <div class="col-md-2">
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
                        <div class="col-md-10 row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">63</div> MEDIDA EN CAMPO</label>
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="fren_campo" wire:model="fren_campo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');" maxlength="200" tabindex="34">
                                    @error('fren_campo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="dere_campo" wire:model="dere_campo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');" maxlength="200" tabindex="38">
                                    @error('dere_campo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="izqu_campo" wire:model="izqu_campo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');" maxlength="200" tabindex="42">
                                    @error('izqu_campo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="fond_campo" wire:model="fond_campo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');" maxlength="200" tabindex="46">
                                    @error('fond_campo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">64</div>MEDIDA SEGUN TITULO</label>
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="fren_titulo" wire:model="fren_titulo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');"  maxlength="200" tabindex="35">
                                    @error('fren_titulo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="dere_titulo" wire:model="dere_titulo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');"  maxlength="200" tabindex="39">
                                    @error('dere_titulo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="izqu_titulo" wire:model="izqu_titulo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');"  maxlength="200" tabindex="43">
                                    @error('izqu_titulo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="fond_titulo" wire:model="fond_titulo" oninput="this.value = this.value.replace(/[^0-9.; ]/g, '').replace(/(\.*?)\*/g, '$1');"  maxlength="200" tabindex="47">
                                    @error('fond_titulo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">65</div>COLIDANCIAS EN CAMPO</label>
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="fren_colinda_campo" wire:model="fren_colinda_campo" maxlength="200" tabindex="36">
                                    @error('fren_colinda_campo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="dere_colinda_campo" wire:model="dere_colinda_campo" maxlength="200" tabindex="40">
                                    @error('dere_colinda_campo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="izqu_colinda_campo" wire:model="izqu_colinda_campo" maxlength="200" tabindex="44">
                                    @error('izqu_colinda_campo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="fond_colinda_campo" wire:model="fond_colinda_campo" maxlength="200" tabindex="48">
                                    @error('fond_colinda_campo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">66</div> COLIDANCIAS SEGUN TITULO</label>
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="fren_colinda_titulo" wire:model="fren_colinda_titulo" maxlength="200" tabindex="37">
                                    @error('fren_colinda_titulo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="dere_colinda_titulo" wire:model="dere_colinda_titulo" maxlength="200" tabindex="41">
                                    @error('dere_colinda_titulo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="izqu_colinda_titulo" wire:model="izqu_colinda_titulo" maxlength="200" tabindex="45">
                                    @error('izqu_colinda_titulo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="" name="fond_colinda_titulo" wire:model="fond_colinda_titulo" maxlength="200" tabindex="49">
                                    @error('fond_colinda_titulo')
                                        <span class="error-message" style="color:red">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                            </div>
                        </div>
                    </div><!-- Row -->
                    <div class="row form-group">
                        <h4 class="mb-4"> SERVICIOS QUE CUENTA EL PREDIO</h4>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">67</div> LUZ</label>
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="formSwitch1" name="luz" wire:model="luz"  tabindex="49">
                                </div>
                            </div>
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">68</div> AGUA</label>
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="agua" wire:model="agua" tabindex="49">
                                </div>
                            </div>
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">69</div> TELEFONO</label>
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="telefono" wire:model="telefono" tabindex="49">
                                </div>
                            </div>
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">70</div> DESAGÛE</label>
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="desague" wire:model="desague" tabindex="49">
                                </div>
                            </div>
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">71</div> GAS</label>
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="gas" wire:model="gas" tabindex="49">
                                </div>
                            </div>
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" > <div class="divcuadro">72</div> INTERNET</label>
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="internet" wire:model="internet" tabindex="49">
                                </div>
                            </div>
                        </div>
                        <div class="lineatoggle">
                            <div>
                                <label class="form-label d-inline-flex" style="width: 250px;"> <div class="divcuadro">73</div> CONEXION TV POR CABLE O CABLE SATELITAL</label>
                            </div>
                            <div style="padding-left: 10px;">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="luz" name="tvcable" wire:model="tvcable" tabindex="49">
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
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">74</div> N° PISO</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">75</div> FECHA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">76</div> MEP</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">77</div> ECS</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">78</div> ECC</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">79</div> MUROS </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">80</div> TECHOS </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">81</div> PISOS </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">82</div> P. Y V. </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">83</div> REVEST. </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">84</div> BAÑOS </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">85</div> INST. E. </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">87</div> AREA V. </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">88</div> UCA </label></th>
                                            <th>

                                            @if($codi_uso == "070101")

                                            @else
                                                @if($cont2>0)

                                                    <button type="button" class="btn btn-danger btn-icon" wire:click="reducirConstruccion" tabindex="90">-</button>
                                                @else
                                                    <button type="button" class="btn btn-success btn-icon" wire:click="aumentarConstruccion" tabindex="90">+</button>
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
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
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
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">90</div> CODIGO</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">75</div> FECHA</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">76</div> MEP</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">77</div> ECS</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">78</div> ECC </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">92</div> DIMENSIÓN LARGO </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">93</div> DIMENSIÓN ANCHO </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">94</div> DIMENSIÓN ALTO </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">95</div> PRODUCTO TOTAL </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">96</div> U. MEDIDA </label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">88</div> UCA </label></th>
                                            <th>
                                            @if($cont3>0)
                                                <button type="button" class="btn btn-danger btn-icon" wire:click="reducirObras" tabindex="109">-</button>
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
                                                <input type="text" class="form-control" name="dime_largo[]" placeholder="D. largo" id="dime_largo.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="7" wire:model="dime_largo.{{$i}}" tabindex="109">
                                                @error('dime_largo.'.$i)
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="dime_ancho[]" placeholder="D. ancho" id="dime_ancho.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="7" wire:model="dime_ancho.{{$i}}" tabindex="109">
                                                @error('dime_ancho.'.$i)
                                                <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="dime_alto[]" placeholder="D. alto" id="dime_alto.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="7" wire:model="dime_alto.{{$i}}" tabindex="109">
                                                @error('dime_alto.'.$i)
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
                                                <input type="text" class="form-control"  name="inst_uni_med[]" placeholder="U. MEDIDA" id="inst-uni_med.{{$i}}" maxlength="2"  wire:model="inst_uni_med.{{$i}}" tabindex="109">
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


                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->

                    <div class="row form-group">
                        <h4 class="mb-4"> RECAPITULACION DE EDIFICIOS</h4>
                        <div class="col-md-12 mb-5">
                            <div class="table-responsive">
                                <table id="vias" class="table">
                                    <thead>
                                        <tr>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">128</div> EDIFICIO</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">129</div> PORCENTAJE (%)</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">130</div> ATC (M2)</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">131</div> ACC (M2)</label></th>
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">132</div> AOIC (M2)</label></th>
                                            <th>
                                                @if($edifica=="99")
                                                    @if($cont4>0)

                                                        <button type="button" class="btn btn-danger btn-icon" wire:click="reducirEdificios">-</button>
                                                    @else
                                                        <button type="button" class="btn btn-success btn-icon" wire:click="aumentarEdificios">+</button>
                                                    @endif
                                                @endif
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i=0;$i<$cont4;$i++)
                                        <tr >
                                            <td>
                                                <input type="text" class="form-control"  name="edificiobbc[]" placeholder="%" id="edificiobbc.{{$i}}"  wire:model="edificiobbc.{{$i}}" maxlength="2">
                                                @error('edificiobbc.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="porcentaje[]" placeholder="%" id="porcentaje.{{$i}}"  wire:model="porcentaje.{{$i}}" oninput="this.value = this.value.replace(/[^0-9,.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="7">
                                                @error('porcentaje.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="atc[]" placeholder="FECHA" id="atc.{{$i}}"  wire:model="atc.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10">
                                                @error('atc.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="acc[]" placeholder="MEP" id="acc.{{$i}}"  wire:model="acc.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10">
                                                @error('acc.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="aoic[]" placeholder="ECS" id="aoic.{{$i}}" wire:model="aoic.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10">
                                                @error('aoic.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>

                                                @if($i==$cont4-1)
                                                <button type="button" class="btn btn-success btn-icon" wire:click="aumentarEdificios">+</button>

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
                    <h4 class="mb-5"> EVALUACION DEL PREDIO CATASTRAL</h4>
                    <label class="form-label d-inline-flex" > <div class="divcuadro">113</div>ÁREA DE TERRENO INVADIDA (M2)</label>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" >EN COLIDANTE</label>
                                <input type="text" id="en_colindante" class="form-control" placeholder="EN LOTE COLINDANTE" name="en_colindante" wire:model="en_colindante"  maxlength="8" tabindex="132">
                                @error('en_colindante')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" >EN ÁREA PÚBLICA</label>
                                <input type="text" id="en_area_publica" class="form-control" placeholder="EN AREA PUBLICA" name="en_area_publica" wire:model="en_area_publica" maxlength="8" tabindex="133">
                                @error('en_area_publica')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" >EN JARDÍN DE AISLAMIENTO</label>
                                <input type="text" id="en_jardin_aislamiento" class="form-control" placeholder="EN JARDIN  DE AISLAMIENTO" name="en_jardin_aislamiento" wire:model="en_jardin_aislamiento" oninput="this.value = this.value.replace(/[^0-9,]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="134">
                                @error('en_jardin_aislamiento')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" >EN ÁREA INTANGIBLE</label>
                                <input type="text" id="en_area_intangible" class="form-control" placeholder="EN AREA INTANGIBLE" name="en_area_intangible" wire:model="en_area_intangible" oninput="this.value = this.value.replace(/[^0-9,]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" tabindex="135">
                                @error('en_area_intangible')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->


                    <div class="row form-group">
                        <h4 class="mb-4"> RECAPITULACION DE BIENES COMUNES</h4>
                        <div class="col-md-12 mb-5">
                            <div class="table-responsive">
                                <table id="vias" class="table">
                                    <thead>
                                        <tr >
                                            <th><label class="form-label d-inline-flex" > <div class="divcuadro">133</div> N°</label></th>
                                            <th><label class="form-label d-inline-flex" > EDIFICACION</label></th>
                                            <th><label class="form-label d-inline-flex" > ENTRADA</label></th>
                                            <th><label class="form-label d-inline-flex" > PISO</label></th>
                                            <th><label class="form-label d-inline-flex" > UNIDAD</label></th>

                                            <th><label class="form-label d-inline-flex" ><div class="divcuadro">89</div> %</label></th>
                                            <th><label class="form-label d-inline-flex" ><div class="divcuadro">134</div> ATC</label></th>
                                            <th><label class="form-label d-inline-flex" ><div class="divcuadro">131</div> ACC</label></th>
                                            <th><label class="form-label d-inline-flex" ><div class="divcuadro">132</div> AOIC</label></th>
                                            <th>
                                                @if($edifica!="99")
                                                    @if($cont5>0)
                                                        <button type="button" class="btn btn-danger btn-icon" wire:click="reducirRecap">-</button>
                                                    @else
                                                        <button type="button" class="btn btn-success btn-icon" wire:click="aumentarRecap">+</button>
                                                    @endif
                                                @endif
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i=0;$i<$cont5;$i++)
                                        <tr>
                                            <td>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="rbcedifica[]"  wire:model="rbcedifica.{{$i}}"  id="rbcedifica.{{$i}}" maxlength="2" >
                                                @error('rbcedifica.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="rbcentrada[]"  wire:model="rbcentrada.{{$i}}"  id="rbcentrada.{{$i}}"  maxlength="2" >
                                                @error('rbcentrada.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="rbcnume_piso[]"  wire:model="rbcnume_piso.{{$i}}"  id="rbcnume_piso.{{$i}}" maxlength="2"  >
                                                @error('rbcnume_piso.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="rbcunidad[]"  wire:model="rbcunidad.{{$i}}"  id="rbcunidad.{{$i}}" maxlength="3" >
                                                @error('rbcunidad.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="rbctotalporcentaje[]"  wire:model="rbctotalporcentaje.{{$i}}"  id="rbctotalporcentaje.{{$i}}"   oninput="this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="7">
                                                @error('rbctotalporcentaje.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="rbctotalatc[]"  wire:model="rbctotalatc.{{$i}}" id="rbctotalatc.{{$i}}"  oninput="this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="9">
                                                @error('rbctotalatc.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="rbctotalacc[]"  wire:model="rbctotalacc.{{$i}}" id="rbctotalacc.{{$i}}"   oninput="this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="9">
                                                @error('rbctotalacc.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"  name="rbctotalaoic[]" wire:model="rbctotalaoic.{{$i}}" id="rbctotalaoic.{{$i}}" oninput="this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="9">
                                                @error('rbctotalaoic.'.$i)
                                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                                @enderror
                                            </td>
                                            <td>
                                                @if($i==$cont5-1)
                                                    <button type="button" class="btn btn-success btn-icon" wire:click="aumentarRecap">+</button>

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
                    <h4 class="mb-4"> DOCUMENTOS Y DATOS REGISTRALES</h4>
                    <label class="form-label d-inline-flex" >REGISTROS NOTARIAL DE LA ESCRITURA PUBLICA</label>

                        <div class="col-md-4 mb-3">
                            <div wire:ignore>
                            <label class="form-label d-inline-flex" > <div class="divcuadro">101</div>NOMBRE DE LA NOTARIA</label>
                                <select  class="form-select"  data-width="100%" data-live-search="true" name="rbcnotaria" wire:model="rbcnotaria">
                                    <option value="" >SELECCIONE</option>
                                    @foreach($notarias as $notaria)
                                        <option value="{{$notaria->id_notaria}}" >{{$notaria->nomb_notaria}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('rbcnotaria')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                        <label class="form-label d-inline-flex" ><div class="divcuadro">102</div> KARDEX</label>
                            <input type="text" class="form-control" name="rbckardex" wire:model="rbckardex">
                            @error('rbckardex')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                        <label class="form-label d-inline-flex" ><div class="divcuadro">103</div>FECHA DE ESCRITURA</label>

                            <input type="date" class="form-control"  name="rbcfechaesc" placeholder="FECHA" id="rbcfechaesc" wire:model="rbcfechaesc">
                            @error('rbcfechaesc')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row form-group">
                    <h4 class="mb-5"> INSCRIPCION DEL PREDIO CATASTRAL</h4>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">104</div>TIPO DE PARTIDA REGISTRAL</label>
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
                                <label class="form-label d-inline-flex" > <div class="divcuadro">105</div>NUMERO</label>
                                <input type="text" id="nume_partida" class="form-control" name="nume_partida" maxlength="18" wire:model="nume_partida" tabindex="125">
                                @error('nume_partida')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">106</div>FOJAS </label>
                                <input type="text" id="fojas" class="form-control" name="fojas" maxlength="18" wire:model="fojas" tabindex="126">
                                @error('fojas')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">107</div>ASIENTO</label>
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
                                <label class="form-label d-inline-flex" > <div class="divcuadro">108</div>FECHA DE INSCRIPCION</label>
                                <input type="date" id="fecha_inscripcion" class="form-control" name="fecha_inscripcion" wire:model="fecha_inscripcion" tabindex="128">
                                @error('fecha_inscripcion')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">109</div>DECLARATORIA DE FABRICA</label>
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
                                <label class="form-label d-inline-flex" > <div class="divcuadro">110</div>AS. INSC. DE FABRICA </label>
                                <input type="text" id="asie_fabrica" class="form-control" name="asie_fabrica" maxlength="18" wire:model="asie_fabrica" tabindex="130">
                                @error('asie_fabrica')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label d-inline-flex" > <div class="divcuadro">111</div>FECHA DE INSC. DE FABRICA</label>
                                <input type="date" id="fecha_fabrica" class="form-control" name="fecha_fabrica" wire:model="fecha_fabrica" tabindex="131">
                                @error('fecha_fabrica')
                                    <span class="error-message" style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row form-group">
                        <h4 class="mb-4"> INFORMACION COMPLEMENTARIA</h4>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">114</div>CONDICIÓN DE DECLARANTE</label>
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadrorequired">116</div>ESTADO DE LLENADO DE LA FICHA</label>
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label d-inline-flex" > <div class="divcuadro">119</div>MANTENIMIENTO</label>
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
                    </div><!-- Row -->
                    <div class="row form-group">
                    <h4 class="mb-5"> OBSERVACION</h4>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <textarea type="textarea" class="form-control" rows="5" name="observacion" wire:model="observacion"></textarea>
                            </div>
                            @error('observacion')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="row form-group">
                        <div class="col-md-3 mb-3">

                            <label class="form-label d-inline-flex">
                                <div class="divcuadro">120</div>DECLARANTE DNI
                            </label>

                            <label class="form-label d-inline-flex"></label>
                            <div class="btn-group">
                                    <input type="number" class="form-control" name="num_documento_declarante" wire:model.defer="numdocumentodeclarante" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="17" >
                                    <button type="button" class="btn btn-info btn-icon" wire:click="buscarDeclarante"><i class="fa fa-search"></i></button>
                                </div>
                            @error('numdocumentodeclarante')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                            @if ($message = Session::get('dark'))
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @endif


                            <label class="form-label d-inline-flex" > NOMBRES</label>
                            <input type="text" class="form-control" name="nombres_declarante" wire:model="nombres_declarante" onkeydown="return /[a-ñ]/i.test(event.key)" placeholder="Nombre declarante">
                            @error('nombres_declarante')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror


                            <label class="form-label d-inline-flex" > APELLIDO PATERNO</label>
                            <input type="text" class="form-control" name="apellido_paterno_declarante" wire:model="apellido_paterno_declarante" onkeydown="return /[a-ñ]/i.test(event.key)" placeholder="A. Paterno declarante">
                            @error('apellido_paterno_declarante')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror


                            <label class="form-label d-inline-flex" > APELLIDO MATERNO</label>
                            <input type="text" class="form-control" name="apellido_materno_declarante" wire:model="apellido_materno_declarante" onkeydown="return /[a-ñ]/i.test(event.key)" placeholder="A. Materno declarante">
                            @error('apellido_materno_declarante')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror


                            <label class="form-label d-inline-flex" > FECHA</label>
                            <input type="date" class="form-control" name="fecha_declarante" wire:model="fecha_declarante" >
                            @error('fecha_declarante')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label d-inline-flex" > <div class="divcuadro">121</div>SUPERVISOR</label>
                            <select class="form-select"  data-width="100%" data-live-search="true" name="supervisor" id="supervisor" wire:model="supervisor">
                                <option value="">SELECCIONE</option>
                                @foreach($supervisores as $supervisor)
                                    <option value="{{$supervisor->id_persona}}">{{$supervisor->nume_doc}} {{$supervisor->nombres}} {{$supervisor->ape_paterno}} {{$supervisor->ape_materno}}</option>
                                @endforeach
                            </select>
                            @error('supervisor')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                            <label class="form-label d-inline-flex" > FECHA</label>
                            <input type="date" class="form-control" name="fecha_supervision" wire:model="fecha_supervision">
                            @error('fecha_supervision')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label d-inline-flex" > <div class="divcuadrorequired">122</div>TÉCNICO CATASTRAL</label>
                            <select class="form-select"  data-width="100%" data-live-search="true" name="tecnico" id="tecnico" wire:model="tecnico">
                                <option value="">SELECCIONE</option>
                                @foreach($tecnicos as $tecnico)
                                    <option value="{{$tecnico->id_persona}}">{{$tecnico->nume_doc}} {{$tecnico->nombres}} {{$tecnico->ape_paterno}} {{$tecnico->ape_materno}}</option>
                                @endforeach
                            </select>
                            @error('tecnico')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                            <label class="form-label d-inline-flex" > FECHA</label>
                            <input type="date" class="form-control" name="fecha_levantamiento" wire:model="fecha_levantamiento">
                            @error('fecha_levantamiento')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label d-inline-flex" > <div class="divcuadro">123</div>Vº Bº VERIFICADOR CATASTRAL</label>
                            <select class="form-select"  data-width="100%" data-live-search="true" name="verificador" id="verificador" wire:model="verificador">
                                <option value="">SELECCIONE</option>
                                @foreach($verificadores as $verificador)
                                    <option value="{{$verificador->id_persona}}">{{$verificador->nume_doc}} {{$verificador->nombres}} {{$verificador->ape_paterno}} {{$verificador->ape_materno}}</option>
                                @endforeach
                            </select>
                            @error('verificador')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                            <label class="form-label d-inline-flex" > Nº DE REGISTRO</label>
                            <input type="text" class="form-control" name="nume_registro" wire:model="nume_registro">
                            @error('nume_registro')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                            <label class="form-label d-inline-flex" > FECHA</label>
                            <input type="date" class="form-control" name="fecha_verificacion" wire:model="fecha_verificacion">
                            @error('fecha_verificacion')
                                <span class="error-message" style="color:red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div><!-- Row -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" wire:click.prevent="register">Guardar</button>
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
