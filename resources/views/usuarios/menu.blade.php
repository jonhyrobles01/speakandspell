@extends('usuarios.index')
@section('content')
            <div class="widget-header"> 
              <center><h3>Menu de Opciones</h3></center>
            </div>
            <div class="widget-content">
              <div class="shortcuts">
                <a href="#" class="shortcut" data-toggle="modal" data-target="#menuUsuarios">
                  <i class="shortcut-icon icon-user"></i>
                  <span class="shortcut-label">Usuarios</span> 
                </a>                
                <a href="javascript:;" class="shortcut" data-toggle="modal" data-target="#menuNiveles">
                  <i class="shortcut-icon icon-list-alt"></i>
                  <span class="shortcut-label">Niveles</span> 
                </a>
                <a href="javascript:;" class="shortcut">
                  <i class="shortcut-icon icon-bookmark"></i>
                  <span class="shortcut-label">Pagos</span>
                </a>
                <a href="javascript:;" class="shortcut"> 
                  <i class="shortcut-icon icon-comment"></i>
                  <span class="shortcut-label">Corte</span> 
                </a>
                <a href="javascript:;" class="shortcut">
                  <i class="shortcut-icon icon-file"></i>
                  <span class="shortcut-label">Notes</span> 
                </a>                
                <a href="javascript:;" class="shortcut">
                  <i class="shortcut-icon icon-picture"></i>
                  <span class="shortcut-label">Bloc</span> 
                </a>
 @include('usuarios.modals.menuN')
 @include('usuarios.modals.menuU')
              </div>
            </div>
@endsection