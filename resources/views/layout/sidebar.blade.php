<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="noble-ui-logo d-block mt-3">
      
    </a> 
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/') }}" class="nav-link">
          <i class="link-icon " data-feather="box"></i>          
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Menu</li>
      @can('user.index')
      <li class="nav-item {{ active_class(['user']) }}">
        <a href="{{url('/user') }}" class="nav-link">
          <i class="link-icon mdi mdi-account-plus" ></i>
          <span class="link-title">Usuarios</span>
        </a>
      </li>
      @endcan
      @can('roles.index')
      <li class="nav-item {{ active_class(['roles']) }}">
        <a href="{{url('/roles') }}" class="nav-link">
          <i class="link-icon mdi mdi-account-key" ></i>
          <span class="link-title">Roles</span>
        </a>
      </li>
      @endcan
      <li class="nav-item {{ active_class(['mantenimiento/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#mantenimiento" role="button" aria-expanded="{{ is_active_route(['mantenimiento/*']) }}" aria-controls="mantenimiento">
          
          <i class="link-icon" data-feather="settings"></i>
          <span class="link-title">Mantenimiento</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        

        <div class="collapse {{ show_class(['mantenimiento/*']) }}" id="mantenimiento">
          <ul class="nav sub-menu">
            @can('notaria.index')
            <li class="nav-item">
              <a href="{{ url('/mantenimiento/notaria') }}" class="nav-link {{ active_class(['mantenimiento/notaria']) }}">Notaria</a>
            </li>
            @endcan
            @can('mantenimiento.tecnicos')
              <li class="nav-item ">
                <a href="{{url('/mantenimiento/tecnicos') }}" class="nav-link {{ active_class(['mantenimiento/tecnicos']) }}">Tecnico
                </a>
              </li>
              @endcan
              @can('mantenimiento.supervisores')
              <li class="nav-item ">
                <a href="{{url('/mantenimiento/supervisores') }}" class="nav-link {{ active_class(['mantenimiento/supervisores']) }}">
                  Supervisor
                </a>
              </li>
              @endcan
              @can('mantenimiento.verificadores')
              <li class="nav-item">
                <a href="{{url('/mantenimiento/verificadores') }}" class="nav-link  {{ active_class(['mantenimiento/verificadores']) }}">
                  Verificador
                </a>
              </li>
              @endcan
              @can('sectore.index')
              <li class="nav-item ">
                <a href="{{url('mantenimiento/sectore') }}" class="nav-link {{ active_class(['mantenimiento/sectore']) }}">
                  Sectores</span>
                </a>
              </li>
              @endcan
              
              @can('manzana.index')
              <li class="nav-item ">
                <a href="{{url('mantenimiento/manzana') }}" class="nav-link {{ active_class(['mantenimiento/manzana']) }}">
                  Manzanas
                </a>
              </li>
              @endcan

              
              @can('haburbana.index')
              <li class="nav-item ">
                <a href="{{url('mantenimiento/haburbana') }}" class="nav-link {{ active_class(['mantenimiento/haburbana']) }}">
                  Habilitacion Urbana
                </a>
              </li>
              @endcan
              @can('vias.index')
              <li class="nav-item ">
                <a href="{{url('mantenimiento/vias') }}" class="nav-link {{ active_class(['mantenimiento/vias']) }}">
                  Vias
                </a>
              </li>
              <li class="nav-item ">
                  <a href="{{url('mantenimiento/tablacodigo') }}" class="nav-link {{ active_class(['mantenimiento/tablacodigo']) }}">
                      Codigos de Tabla
                  </a>
              </li>
              @endcan
              @if(Auth::user()->roles[0]->name == 'ADMINISTRADOR')
                <li class="nav-item ">
                  <a href="{{url('mantenimiento/lista-lote') }}" class="nav-link {{ active_class(['mantenimiento/lista-lote']) }}">
                        Lotes
                  </a>
                </li>
              @endif
          </ul>
        </div>
      </li>

      
      
      
      @if( Gate::check('ficha.createindividual') || Gate::check('ficha.indexcotitular')  || Gate::check('ficha.indexeconomica') || Gate::check('ficha.indexbiencomun') || Gate::check('ficha.indexbiencultural') || Gate::check('ficha.createrural'))

    
      
      <li class="nav-item {{ active_class(['ficha/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#ficha" role="button" aria-expanded="{{ is_active_route(['ficha/*']) }}" aria-controls="ficha">
          <i class="link-icon mdi mdi-clipboard-text"></i>
          <span class="link-title">Fichas</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['ficha/*']) }}" id="ficha">
          <ul class="nav sub-menu">
            @can('ficha.createindividual')
            <li class="nav-item">
              <a href="{{ url('/ficha/createindividual') }}" class="nav-link {{ active_class(['ficha/createindividual']) }}">Crear Ficha Individual</a>
            </li>
            @endcan
            @can('ficha.indexcotitular')
            <li class="nav-item">
              <a href="{{ url('/ficha/indexcotitular') }}" class="nav-link {{ active_class(['ficha/indexcotitular']) }}">Crear Ficha Cotitularidad</a>
            </li>
            @endcan
            @can('ficha.indexeconomica')
            <li class="nav-item">
              <a href="{{ url('/ficha/indexeconomica') }}" class="nav-link {{ active_class(['ficha/indexeconomica']) }}">Crear Ficha Economica</a>
            </li>
            @endcan
            @can('ficha.createbiencomun')
            <li class="nav-item">
              <a href="{{ url('/ficha/createbiencomun') }}" class="nav-link {{ active_class(['ficha/createbiencomun']) }}">Crear Ficha Bienes Comunes</a>
            </li>
            @endcan
          
            @can('ficha.indexbiencultural')
            <li class="nav-item">
                <a href="{{ url('/ficha/indexbiencultural') }}" class="nav-link {{ active_class(['ficha/indexbiencultural']) }}">Crear Ficha Bien Cultural</a>
            </li>
            @endcan
            @can('ficha.createrural')
            <li class="nav-item">
              <a href="{{ url('/ficha/createrural') }}" class="nav-link {{ active_class(['ficha/createrural']) }}">Crear Ficha Rural</a>
            </li>
            @endcan
          </ul>
        </div>
      </li>
      @endif
      @can('ficha.createrural')
@endcan
      <li class="nav-item {{ active_class(['imagenes/ver']) }}">
        <a href="{{url('/imagenes/ver') }}" class="nav-link">
          <i class="link-icon mdi mdi-file-multiple" ></i>
          <span class="link-title">Subir Imagen</span>
        </a>
      </li>
      
      @if( Gate::check('impresion.verficha') || Gate::check('impresion.verfichainformativa')  || Gate::check('impresion.vercertificado') || Gate::check('impresion.veradministracion') || Gate::check('impresion.verinformativaeconomica') || Gate::check('impresion.vercnumeracion'))

    
      <li class="nav-item {{ active_class(['impresion/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#impresion" role="button" aria-expanded="{{ is_active_route(['impresion/*']) }}" aria-controls="impresion">
          <i class="link-icon mdi mdi-clipboard-text"></i>
          <span class="link-title">Impresion de Fichas</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['impresion/*']) }}" id="impresion">
          <ul class="nav sub-menu">
            @can('impresion.verficha')
            <li class="nav-item">
              <a href="{{ url('/impresion/verficha') }}" class="nav-link {{ active_class(['impresion/verficha']) }}">Ficha Administracion</a>

            </li>
            @endcan
            @can('impresion.verfichainformativa')
            <li class="nav-item">
              <a href="{{ url('/impresion/verfichainformativa') }}" class="nav-link {{ active_class(['impresion/verfichainformativa']) }}">Ficha Informativa</a>
            </li>
            @endcan
            @can('impresion.vercertificado')
            <li class="nav-item">
              <a href="{{ url('/impresion/vercertificado') }}" class="nav-link {{ active_class(['impresion/vercertificado']) }}">Certificado Catastral</a>
            </li>
            @endcan
            @can('impresion.veradministracion')
            <li class="nav-item">
              <a href="{{ url('/impresion/veradministracion') }}" class="nav-link {{ active_class(['impresion/veradministracion']) }}">Administracion</a>
            </li>
            @endcan
            @can('impresion.verinformativaeconomica')
            <li class="nav-item">
              <a href="{{ url('/impresion/verinformativaeconomica') }}" class="nav-link {{ active_class(['impresion/verinformativaeconomica']) }}">Informe Economico</a>
            </li>
            @endcan
            @can('impresion.vercnumeracion')
            <li class="nav-item">
              <a href="{{ url('/impresion/vercnumeracion') }}" class="nav-link {{ active_class(['impresion/vercnumeracion']) }}">Certificado de Numeracion</a>
            </li>
            @endcan
          </ul>
        </div>
      </li>
      @endcan

      @if( Gate::check('reporte.reportepersona') || Gate::check('reporte.reporteusuario')  || Gate::check('reporte.reportefechas') || Gate::check('reporte.fichapuerta') || Gate::check('reporte.fichapredio') || Gate::check('reporte.reporteusuarioauth') || Gate::check('reporte.fichaconstrucciones') || Gate::check('reporte.fichaantiguedad'))
      
      <li class="nav-item {{ active_class(['reporte/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#reporte" role="button" aria-expanded="{{ is_active_route(['reporte/*']) }}" aria-controls="reporte">
          <i class="link-icon mdi mdi-clipboard-text"></i>
          <span class="link-title">Reportes</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['reporte/*']) }}" id="reporte">
          <ul class="nav sub-menu">
            @can('reporte.index')
            <li class="nav-item ">
              <a href="{{url('reporte/reportelista') }}" class="nav-link {{ active_class(['reporte/reportelista']) }}" >
                Reporte Fichas
              </a>
            </li>
            
            <li class="nav-item ">
                <a href="{{url('/reporte/reportetitulares') }}" class="nav-link {{ active_class(['reporte/reportetitulares']) }}">
                    Reporte Titulares Sector
                </a>
            </li>
            @endcan
            @can('reporte.reportepersona')
            <li class="nav-item ">
              <a href="{{url('reporte/reportepersona') }}" class="nav-link {{ active_class(['reporte/reportepersona']) }}">
                Reporte por Titular
              </a>
            </li>
            @endcan

            @can('reporte.reporteusuario')
            <li class="nav-item ">
              <a href="{{url('reporte/reporteusuario') }}" class="nav-link {{ active_class(['reporte/reporteusuario']) }}">
                Reporte por Usuario
              </a>
            </li>
            @endcan

            @can('reporte.reportefechas')
            <li class="nav-item ">
              <a href="{{url('reporte/reportefechas') }}" class="nav-link {{ active_class(['reporte/reportefechas']) }}" >
                Reporte por Fechas
              </a>
            </li>
            @endcan

            @can('reporte.fichapuerta')
            <li class="nav-item ">
              <a href="{{url('reporte/fichapuerta') }}" class="nav-link {{ active_class(['reporte/fichapuerta']) }}">
                Reporte por Puertas
              </a>
            </li>
            @endcan

            @can('reporte.fichapredio')
            <li class="nav-item ">
              <a href="{{url('reporte/fichapredio') }}" class="nav-link {{ active_class(['reporte/fichapredio']) }}" >
                Reporte por Predio
              </a>
            </li>
            @endcan

            @can('reporte.fichaconstrucciones')
            <li class="nav-item ">
              <a href="{{url('reporte/fichaconstrucciones') }}" class="nav-link {{ active_class(['reporte/fichaconstrucciones']) }}">
                Reporte por Construccion
              </a>
            </li>
            @endcan

            @can('reporte.fichaantiguedad')
            <li class="nav-item ">
              <a href="{{url('reporte/fichaantiguedad') }}" class="nav-link {{ active_class(['reporte/fichaantiguedad']) }}">
                Reporte por Antiguedad
              </a>
            </li>
            @endcan   
            @can('reporte.llenadoficha')
            <li class="nav-item ">
              <a href="{{url('reporte/llenadoficha') }}" class="nav-link {{ active_class(['reporte/llenadoficha']) }}">
                por Llenado 
              </a>
            </li>
            @endcan    
            @can('reporte.porlote')
            <li class="nav-item ">
              <a href="{{url('reporte/porlote') }}" class="nav-link {{ active_class(['reporte/porlote']) }}">
                por Lote 
              </a>
            </li>
            @endcan  
            @can('reporte.fichaantiguedad')
            <li class="nav-item ">
                <a href="{{url('reporte/actividadeconomica') }}" class="nav-link {{ active_class(['reporte/actividadeconomica']) }}">
                    Actividad economica
                </a>
            </li>
            @endcan
            @can('reporte.reporteusuarioauth')
            <li class="nav-item ">
              <a href="{{url('reporte/reporteusuarioauth') }}" class="nav-link {{ active_class(['reporte/reporteusuarioauth']) }}">
                Por Usuario
              </a>
            </li>
            @endcan    

            @can('reporte.fichasmasivas')
            <li class="nav-item ">
              <a href="{{url('reporte/fichasmasivas') }}" class="nav-link {{ active_class(['reporte/fichasmasivas']) }}">
                Fichas Masivas
              </a>
            </li>
            @endcan


          </ul>
        </div>
      </li>
      @endif

      @can('reporte.reportepersona')
      <li class="nav-item {{ active_class(['lineatiempo']) }}">
      <a href="{{url('/lineatiempo') }}" class="nav-link">
          <i class="link-icon mdi mdi-timetable" ></i>
          <span class="link-title">Linea de Tiempo</span>
        </a>
      </li>
      @endcan
      @can('progresofichas')
      
      <li class="nav-item {{ active_class(['progresofichas']) }}">
      <a href="{{url('/progresofichas') }}" class="nav-link">
          <i class="link-icon mdi mdi-ray-vertex" ></i>
          <span class="link-title">Progreso de Fichas</span>
        </a>
      </li>
      @endcan

      <li class="nav-item">
        <a href="http://192.168.101.201/visor" target="_blank" class="nav-link">
          <i class="link-icon mdi mdi-google-maps" ></i>
          <span class="link-title">Visor de Mapas</span>
        </a>
      </li>
  </div>
</nav>