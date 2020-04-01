<!-- Modal Niveles -->
    <div class="modal fade" id="menuNiveles"  tabindex="-1" role="dialog">
      <div class="modal-dialog modalCenter">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Editar Asignatura</h4>
          </div>
          <div class="modal-body">
                <div class="shortcuts">
                  <a href="{{route('user.createNivel')}}" class="shortcut">
                    <i class="shortcut-icon icon icon-plus-sign-alt"></i>
                    <span class="shortcut-label">Alta Nivel</span> 
                  </a>                
                  <a href="{{route('user.listaNivel')}}" class="shortcut">
                    <i class="shortcut-icon icon-list-alt"></i>
                    <span class="shortcut-label">Ver Niveles</span> 
                  </a>
                  <a href="{{route('user.listaxnivel')}}" class="shortcut">
                    <i class="shortcut-icon icon icon-calendar-empty"></i>
                    <span class="shortcut-label">Listar</span>
                  </a>
                  <a href="{{route('users.listadeudores')}}" class="shortcut">
                    <i class="shortcut-icon icon icon-money"></i>
                    <span class="shortcut-label">Deudores</span>
                  </a>                  
                </div>
          </div>
        </div> 
      </div>
    </div>
    <!-- add code ends -->