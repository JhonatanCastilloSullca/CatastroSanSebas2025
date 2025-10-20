<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ficha Informativa</title>
  <style>
    @page { size: A4 landscape; margin: 10mm; } /* apaisado */

    body {
      background-color: #FFF;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      font-size: 7px;
      font-weight: normal;
      margin: 5px;
      color: #151b1e;
      TEXT-TRANSFORM: UPPERCASE;
    }

    /* === TUS ESTILOS (sin tocar) === */
    div { border: 0.5px solid; }
    .bprueba { background-color: #333; }
    .numeros { background-color:#777777;color:#000;width:15px;height:15px;border:none;float:left; }
    .numerosblanco { background-color:#fff;color:#000;width:15px;height:15px;border:none;float:left; }
    .textotop { background:#FFF;color:#000;width:80px;height:15px;border:none;float:left; }
    .texto { float:right;border:none;text-align:center;vertical-align:middle; }
    .texto2 { float:right;text-align:center;vertical-align:middle; }
    .textotitulo { float:right;border:none;font-weight:bold;text-align:left;vertical-align:middle; }
    .ti{ text-align:left } .td{ text-align:right } .tc{ text-align:center }
    .pr5{ padding-right:5px } .pr15{ padding-right:15px } .pr25{ padding-right:25px }
    .pl5{ padding-left:5px } .pl15{ padding-left:15px } .pl25{ padding-left:25px }
    .ptb5{ padding-top:5px;padding-bottom:5px } .ptb10{ padding-top:10px;padding-bottom:10px }
    .fondoclaro{ background-color:#7effff } .fondoclarito{ background-color:#ffff7e;color:#c62200 }
    .fz4{ font-weight:bolder;font-size:4px!important } .fz5{ font-weight:bolder;font-size:5px!important }
    .fz6{ font-weight:bolder;font-size:6px!important } .fz7{ font-weight:bolder;font-size:7px!important }
    .fz8{ font-weight:bolder;font-size:8px!important } .fz10{ font-weight:bolder;font-size:10px!important }
    .fz12{ font-weight:bolder;font-size:12px!important } .fz14{ font-weight:bolder;font-size:14px!important }
    .fz16{ font-weight:bolder;font-size:16px!important } .fz18{ font-weight:bolder;font-size:18px!important }
    .lh2{ line-height:2px } .lh4{ line-height:4px } .lh6{ line-height:6px } .lh7{ line-height:7px }
    .lh8{ line-height:8px } .lh10{ line-height:10px } .lh12{ line-height:12px } .lh14{ line-height:14px }
    .lh16{ line-height:16px } .lh18{ line-height:18px } .lh20{ line-height:20px }
    .bn{ border:none!important } .bp{ background-color:#342 } #pagebreak1{ page-break-after:always }
    .bgfdc{ background-color:#195186;color:#fff } .bgfdd{ background-color:#CFCFE9 }

    .table{ display:table;width:100%;max-width:100%;margin-bottom:0.3rem;background-color:transparent;border-collapse:collapse; }
    thead{ display:table-header-group;vertical-align:middle;border-color:inherit }
    tr{ display:table-row;vertical-align:inherit;border-color:inherit }
    .table th,.table td{ padding:0.3rem;vertical-align:top }
    .table thead th{ vertical-align:bottom;background-color:#195186;color:#fff;border:1px solid #fff }
    .table-bordered thead th,.table-bordered thead td{ border-bottom-width:1px }
    th,td{ display:table-cell;vertical-align:inherit;line-height:1.6 }
    th{ font-weight:bold;text-align:left;line-height:1.6 }
    tr:nth-child(even){ background-color:#f2f2f2 }
    tbody{ vertical-align:middle;border-color:inherit }

    /* === AJUSTES PARA OCUPAR TODA LA HOJA === */
    .full { width:100%; margin:0 auto; border:none; }           /* sustituye 716px */
    .noheight { height:auto !important; }                        /* evita alturas fijas */
    .clearfix { clear:both; }                                    /* limpia floats */
    table.table { width:100%; table-layout:fixed; }              /* fuerza ancho completo */
    img { max-width:100%; height:auto; }                         /* imágenes fluidas */
  </style>
</head>
<body>

  <div class="full noheight bn"></div>

  <div class="full noheight bn" style="margin-bottom:5px;background-color:#fff;">
    <div style="width:120px;height:120px;float:left;border:none;vertical-align:middle">
      <img src="{{ $logos?->logo_institucion }}" alt="Logo" style="width:200px;">
    </div>

    <div class="bn" style="width:calc(100% - 240px);float:left;border:none;">
      <div class="bn full noheight">
        <div class="texto fz18 lh14">
          <b style="color:#195186">MUNICIPALIDAD DISTRITAL DE SAN SEBASTIAN</b>
        </div>
      </div>
      <div class="bn full noheight">
        <div class="texto fz12 lh14">CUSCO - PERÚ</div>
      </div>
      <div class="bn full noheight">
        <div class="texto fz8 lh14">
          GERENCIA DE DESARROLLO URBANO Y RURAL<br>
          FECHA: {{ $fecha }} / HORA: {{ $hora }}
        </div>
      </div>
      <div class="bgfdc bn full noheight" style="padding-top:5px;padding-bottom:5px;">
        <div class="texto fz14 lh10"><b>REPORTE DE TITULARES CATASTRAL</b></div>
      </div>
    </div>

    <div style="width:120px;height:120px;float:left;border:none;">
      <img src="{{ $logos?->logo_catastro }}" alt="">
    </div>
  </div>

  <div class="clearfix"></div> <!-- MUY IMPORTANTE, limpia los floats del header -->

  <div class="full noheight bn">
    <div class="full noheight bn">
      <div class="texto fz10 lh10" style="text-align:left;"><b>DEPARTAMENTO:</b> CUSCO</div>
    </div>
    <div class="full noheight bn">
      <div class="texto fz10 lh10" style="text-align:left;"><b>PROVINCIA:</b> CUSCO</div>
    </div>
    <div class="full noheight bn">
      <div class="texto fz10 lh10" style="text-align:left;"><b>DISTRITO:</b> SAN SEBASTIAN</div>
    </div>
    <div class="full noheight bn">
      <div class="texto fz10 lh10" style="text-align:left;"><b>SECTOR:</b> {{ $sectores?->nomb_sector }}</div>
    </div>
  </div>

  <div class="full noheight bn" style="margin-top:10px;">
    <table class="table table-striped">
      <thead>
        <tr>
          <th rowspan="2">CUC Lote</th>
          <th rowspan="2">CUC Unidad Catastral</th>
          <th rowspan="2">Titular(es) Catastral(es)</th>
          <th rowspan="2">% Propiedad</th>
          <th rowspan="2">DNI / RUC</th>
          <th colspan="8" class="text-center">UBICACIÓN DEL PREDIO CATASTRAL</th>
          <th rowspan="2">Área de terreno verificada (m2)</th>
          <th rowspan="2">Área de construida verificada total (m2)</th>
          <th rowspan="2">Uso</th>
        </tr>
        <tr>
          <th>Tipo Via</th>
          <th>Nombre de Via</th>
          <th>Número</th>
          <th>Tipo Interior</th>
          <th>Nº Interior</th>
          <th>Manzana</th>
          <th>Lote</th>
          <th>Nombre de Hab. Urb.</th>
        </tr>
      </thead>
      <tbody>
        @foreach($titulares as $t)
          <tr>
            <td>{{ $t->lote_cuc ?? $t->cuc_lote ?? $t->id_lote }}</td>
            <td>{{ $t->cuc }}</td>
            <td>{!! nl2br(e($t->titulares_nombres)) !!}</td>
            <td>{!! nl2br(e($t->titulares_porcentajes)) !!}</td>
            <td>{!! nl2br(e($t->titulares_documentos)) !!}</td>
            <td>{{ $t->tipo_via }}</td>
            <td>{{ $t->nomb_via }}</td>
            <td>{{ $t->nume_muni }}</td>
            <td>{{ $t->tipo_interior }}</td>
            <td>{{ $t->nume_interior }}</td>
            <td>{{ $t->id_mzna }}</td>
            <td>{{ $t->codi_lote }}</td>
            <td>{{ $t->nomb_hab_urba ?? '' }}</td>
            <td>{{ $t->area_seleccionada }}</td>
            <td>{{ $t->total_construcciones }}</td>
            <td>{{ $t->desc_uso }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="full noheight bn"></div>
</body>
</html>
