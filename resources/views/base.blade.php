<!DOCTYPE html>
<html ang="{{ app()->getLocale() }}">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Examen Laravel 8: Adrián Arias</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <li><a href="{{ url('locale/es') }}" ><i class="fa fa-language"></i> ES</a></li>

    <li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> EN</a></li>

    <div class="row">
 <div class="col-sm-8 offset-sm-2">
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
      <form method="post" action="{{ route('tutores.store') }}">
          @csrf
          <div class="form-group">    
              <label for="empresa">{{ __('messages.empresa') }}</label>
              <input type="text" class="form-control" name="empresa" value="{{old('empresa')}}"/>
              {{$errors->first('empresa',"Error en campo empresa")}}
          </div>

          <div class="form-group">
              <label for="nombre">{{ __('messages.nombre') }}</label>
              <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}"/>
              {{$errors->first('nombre',"Error en campo nombre")}}
          </div>

          <div class="form-group">
              <label for="apellido1">{{ __('messages.apellido1') }}</label>
              <input type="text" class="form-control" name="apellido1" value="{{old('apellido1')}}"/>
              {{$errors->first('apellido1',"Error en campo primer apellido")}}
          </div>
          <div class="form-group">
              <label for="apellido2">{{ __('messages.apellido2') }}</label>
              <input type="text" class="form-control" name="apellido2" value="{{old('apellido2')}}"/>
              {{$errors->first('apellido2',"Error en campo segundo apellido")}}
          </div>
          <div class="form-group">
              <label for="tipo_documento">{{ __('messages.tipo_documento') }}</label>
              <input type="text" class="form-control" name="tipo_documento" value="{{old('tipo_documento')}}"/>
          </div>
          <div class="form-group">
              <label for="doc_identidad">{{ __('messages.doc_identidad') }}</label>
              <input type="text" class="form-control" name="doc_identidad"  value="{{old('doc_identidad')}}"/>
          </div> 
          
          <div class="form-group">
              <label for="pais">{{ __('messages.pais') }}</label>
              <input type="text" class="form-control" name="pais" value="{{old('pais')}}"/>
          </div>

          <div class="form-group">
              <label for="provincia">{{ __('messages.provincia') }}</label>
              <input type="text" class="form-control" name="provincia"  value="{{old('provincia')}}"/>
          </div>

          <div class="form-group">
              <label for="municipio">{{ __('messages.municipio') }}</label>
              <input type="text" class="form-control" name="municipio" value="{{old('municipio')}}"/>
          </div>

          <div class="form-group">
              <label for="estado">{{ __('messages.estado') }}</label>
              <select class="form-control" name="estado" value="{{old('estado')}}">
                <option value="activo">En activo</option>
                <option value="retirado">Retirado</option>
              </select>
          </div>
          <div class="form-group">
              <label for="telefono">{{ __('messages.telefono') }}</label>
              <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}"/>
          </div>

          <div class="form-group">
              <label for="email">{{ __('messages.email') }}</label>
              <input type="text" class="form-control" name="email" value="{{old('email')}}"/>
          </div> 

          <button type="submit" class="btn btn-primary-outline">Añadir tutor</button>
      </form>
  </div>
</div>
</div>
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>