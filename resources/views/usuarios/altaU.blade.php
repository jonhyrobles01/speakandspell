@extends('usuarios.index')
@section('content')
            <div class="widget-header"> 
              <center><h3>Alta Alumno</h3></center>
            </div>
            <div class="widget-content">
              <div class="shortcuts">
                  <div class="form-group col-md-12" id="gralprevio">
                    <div class="dropdown" >
                      <button class="form-group col-md-12 btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                         ACCION
                      </button>
                    <ul class="dropdown-menu form-group col-md-12">
                      <li><a href="{{route('user.menu')}}">INICIO</a></li>
                      <li><a href="{{route('user.index')}}">LISTA ALUMNOS</a></li>
                    </ul>
                    </div> 
                  </div>
               
                {!! Form::open(['route' => 'user.store', 'method' => 'POST' ,'files'=>true]) !!}

                  <div class="row">
                    <div class="form-group col-md-1">
                      {!! Form::label('matricula', 'Matricula') !!} 
                      {!! Form::text('id',$ultimo,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'matricula', 'required',' readonly'=>' readonly' ] ) !!}
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      {!! Form::label('nombre', 'Nombre(s)') !!} 
                      {!! Form::text('nombre',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Nombre(s)', 'required' ] ) !!}
                    </div>
                    <div class="form-group col-md-4">
                      {!! Form::label('apellido_paterno','Apellido Paterno') !!} 
                      {!! Form::text('apellido_paterno',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Apellido Paterno', 'required' ] ) !!}
                    </div>
                    <div class="form-group col-md-4">
                      {!! Form::label('Apellido_materno', 'Apellido Materno') !!} 
                      {!! Form::text('apellido_materno',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Apellido Materno', 'required' ] ) !!}
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      {!! Form::label('nacimiento', 'Nacimiento') !!} 
                      {!! Form::text('nacimiento',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Nacimiento', 'required' ] ) !!}
                    </div>
                    <div class="form-group col-md-4">
                      {!! Form::label('direccion', 'Direccion') !!} 
                      {!! Form::text('direccion',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Direccion', 'required' ] ) !!}
                    </div>
                    <div class="form-group col-md-4">
                      {!! Form::label('ciudad', 'Ciudad') !!} 
                      {!! Form::text('ciudad',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Ciudad', 'required' ] ) !!}
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      {!! Form::label('ocupacion', 'Ocupacion') !!} 
                      {!! Form::text('ocupacion',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Ocupacion', 'required' ] ) !!}
                    </div>
                    <div class="form-group col-md-4">
                      {!! Form::label('estudios', 'Estudios') !!} 
                      {!! Form::text('estudios',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Estudios', 'required' ] ) !!}
                    </div>
                    <div class="form-group col-md-4">
                      {!! Form::label('Nivel', 'Nivel') !!} 
                      {!! Form::select('nivel',$listaN,null,['class' => 'form-control','id'=>'nivel']) !!}
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      {!! Form::label('horario', 'Horario') !!} 
                      {!! Form::select('horario',$listaH,null,['class' => 'form-control','id'=>'horario']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('descuento', 'Descuento') !!} 
                      {!! Form::text('descuento',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => '$' ] ) !!}
                    </div>
                  </div>

<hr>
<h6>Telefonos</h6>

                  <div class="row">
                    <div class="form-group col-md-4">
                      {!! Form::label('casa', 'Casa') !!} 
                      {!! Form::text('casa',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Casa' ] ) !!}
                    </div>
                    <div class="form-group col-md-4">
                      {!! Form::label('celular', 'Celular') !!} 
                      {!! Form::text('celular',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Celular' ] ) !!}
                    </div>
                    <div class="form-group col-md-4">
                      {!! Form::label('oficina', 'Oficina') !!} 
                      {!! Form::text('oficina',null,['class' => 'form-control','style' => 'text-transform:uppercase;' , 'placeholder' => 'Oficina' ] ) !!}
                    </div>                    
                  </div>   
                  <div class="row">
                    <div class="form-group col-md-4">
                      {!! Form::label('Foto', 'Foto') !!} 
                      {!! Form::file('ruta_foto') !!}
                    </div>                  
                  </div>                                                                                                                           
                  <div class="row">
                    <div class="form-group col-md-3">
                    {!! Form::submit('Registrar',[ 'class' => 'btn btn-primary']) !!} 
                    </div>
                  </div>

              {!! Form::close()!!}
              </div>
              
            </div>
@endsection