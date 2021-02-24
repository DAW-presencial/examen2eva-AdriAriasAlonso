@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Añade un tutor:</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">    
              <label for="empresa">Empresa:</label>
              <input type="text" class="form-control" name="empresa" value="{{old('empresa')}}"/>
          </div>

          <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}"/>
          </div>

          <div class="form-group">
              <label for="apellido1">Primer Apellido:</label>
              <input type="text" class="form-control" name="apellido1" value="{{old('apellido1')}}"/>
          </div>
          <div class="form-group">
              <label for="apellido2">Segundo Apellido:</label>
              <input type="text" class="form-control" name="apellido2" value="{{old('apellido2')}}"/>
          </div>
          <div class="form-group">
              <label for="tipo_documento">Tipo de documento:</label>
              <input type="text" class="form-control" name="tipo_documento" value="{{old('tipo_documento')}}"/>
          </div>
          <div class="form-group">
              <label for="doc_identidad">Documento de identidad:</label>
              <input type="text" class="form-control" name="doc_identidad"  value="{{old('doc_identidad')}}"/>
          </div> 
          
          <div class="form-group">
              <label for="pais">Pais:</label>
              <input type="text" class="form-control" name="pais" value="{{old('pais')}}"/>
          </div>

          <div class="form-group">
              <label for="provincia">Provincia:</label>
              <input type="text" class="form-control" name="provincia"  value="{{old('provincia')}}"/>
          </div>

          <div class="form-group">
              <label for="municipio">Municipio:</label>
              <input type="text" class="form-control" name="municipio" value="{{old('municipio')}}"/>
          </div>

          <div class="form-group">
              <label for="estado">Estado del tutor:</label>
              <input type="text" class="form-control" name="estado" value="{{old('estado')}}"/>
          </div>
          <div class="form-group">
              <label for="telefono">Teléfono:</label>
              <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}"/>
          </div>

          <div class="form-group">
              <label for="email">Correo electrónico:</label>
              <input type="text" class="form-control" name="email" value="{{old('email')}}"/>
          </div> 

          <button type="submit" class="btn btn-primary-outline">Añadir tutor</button>
      </form>
  </div>
</div>
</div>
@endsection