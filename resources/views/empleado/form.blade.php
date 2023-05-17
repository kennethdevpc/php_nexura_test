<h1>{{$modo}} Empleado</h1>
@if(count($errors)>0)
    <h1>hay errrores</h1>
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>

@endif
@if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid " src="{{asset('storage'.'/'.$empleado->Foto)}}" alt="" width="100px">
@endif


<br>
<div class="form-group">
    <label for="nombre">nombre</label>
    <input class="form-control" type="text" name="nombre" id="nombre"
           value="{{isset($empleado->nombre)?$empleado->nombre:old('nombre')}}">
</div>

<br>
<div class="form-group">
    <label for="email">email</label>
    <input class="form-control" type="text" name="email" id="email"
           value="{{isset($empleado->email)?$empleado->email:old('email')}}">
</div>

<br>
<div class="form-group">
    <label for="sexo">sexo</label>
    <input class="form-control" type="text" name="sexo" id="sexo"
           value="{{isset($empleado->sexo)?$empleado->sexo:old('sexo')}}">
</div>

<br>
<div class="form-group">
    <label for="area_id">area_id</label>
    <input class="form-control" type="text" name="area_id" id="area_id"
           value="{{isset($empleado->area_id)?$empleado->area_id:old('area_id')}}">
</div>

<br>
<div class="form-group">
    <label for="boletin">boletin</label>
    <input class="form-control" type="text" name="boletin" id="boletin"
           value="{{isset($empleado->boletin)?$empleado->boletin:old('boletin')}}">
</div>

<br>
<div class="form-group">
    <label for="descripcion">descripcion</label>
    <input class="form-control" type="text" name="descripcion" id="descripcion"
           value="{{isset($empleado->descripcion)?$empleado->descripcion:old('descripcion')}}">
</div>

<br>

{{--<div class="form-group">
    <label for="Foto">Foto</label>

    <input class="form-control" type="file" name="Foto" id="Foto" value="{{isset($empleado->Foto)?$empleado->Foto:old('Foto')}}">
</div>--}}

<br>
<input class="btn btn-success" type="submit" value="* {{$modo}} datos" id="Enviar">
<a class="btn btn-primary" href="{{url('empleado')}}">Regresar</a>
