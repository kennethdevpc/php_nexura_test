<h1>{{$modo}} Empleado</h1>
@if(count($errors)>0)
    <h1>Error en el formulario</h1>
    <div class="alert alert-danger " role="alert">
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
<div class="container ">
    <div class="form-group d-flex flex-row">
        <label class="col-lg-2 px-3 text-lg-end " for="nombre">Nombre completo</label>
        <input class="form-control" type="text" name="nombre" id="nombre"
               value="{{isset($empleado->nombre)?$empleado->nombre:old('nombre')}}">
    </div>

    <br>
    <div class="form-group d-flex flex-row">
        <label class="col-lg-2 px-3 text-lg-end" for="email">Correo electrónico</label>
        <input class="form-control " type="text" name="email" id="email"
               value="{{isset($empleado->email)?$empleado->email:old('email')}}">
    </div>

    <br>
    <div class="form-group d-flex flex-row">
        <label class="col-lg-2 px-3 text-lg-end" for="sexo">Sexo</label>


        <div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" value="{{ ("M" )}}" id="flexRadioDefault1" {{isset($empleado->sexo)?($empleado->sexo=="M"?"checked":""):old('sexo')}} >
                <label class="form-check-label" for="flexRadioDefault1">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" value="{{ ("F" )}}" id="flexRadioDefault2" {{isset($empleado->sexo)?($empleado->sexo=="F"?"checked":""):old('sexo')}}>
                <label class="form-check-label" for="flexRadioDefault2">
                    Femenino
                </label>
            </div>
        </div>
    </div>


    <br>
    <div class="form-group d-flex flex-row">
        <label class="col-lg-2 px-3 text-lg-end" for="area_id">Area</label>
       {{-- <input class="form-control" type="text" name="area_id" id="area_id"
               value="{{isset($empleado->area_id)?$empleado->area_id:old('area_id')}}">--}}



        <div class="col-lg-4 col-12 text-start">
            <div class="form-group">
                <label class="form-label" for="area_id">-</label>

                <select name="area_id" id="area_id" >
                    <option value="{{isset($empleado->area_id)?$empleado->area_id:old('area_id')}}" >Selecciona una opción</option>
                    @foreach ($area as $are)
                        @if (!empty($are))
                            <option value="{{ $are['id'] }}" {{ old('area_id') == $are['id'] ? 'selected' : '' }}>{{ $are->nombre }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

    </div>

    <br>
    <div class="form-group d-flex flex-row">
        <label class="col-lg-2 px-3 text-lg-end" for="descripcion">descripcion</label>
        {{--<input class="form-control" type="text" name="descripcion" id="descripcion"
               value="{{isset($empleado->descripcion)?$empleado->descripcion:old('descripcion')}}">--}}
        <textarea  name="descripcion" class="form-control" id="descripcion" rows="3">{{isset($empleado->descripcion)?$empleado->descripcion:old('descripcion')}}</textarea>
    </div>
    <br>

    <div class="form-group d-flex flex-row">
        <div class="form-check px-5 mx-lg-5"></div>
        <div class="form-check px-2 mx-2">
            <input class="form-check-input" name="boletin" type="checkbox" value="{{1}}" id="boletin" {{isset($empleado->boletin)?($empleado->boletin=="1"?"checked":""):old('boletin')}} >
            <label class="form-check-label" for="flexCheckDefault">
                Deseo recibir boletín informativo
            </label>
        </div>

        {{--<input class="form-control" type="text" name="boletin" id="boletin"
               value="{{isset($empleado->boletin)?$empleado->boletin:old('boletin')}}">--}}
    </div>

    <br>

    <div class="form-group d-flex flex-row">
        <label class="col-lg-2 px-3 text-lg-end" for="role">Roles</label>
        <div class="form-check d-flex flex-wrap">
         {{--   <div class="form-check col-lg-4">
                <input class="form-check-input" name="opcion[]" type="checkbox" value="{{4}}"   >
                <label class="form-check-label" for="flexCheckDefault">
                    rol1
                </label>
            </div>
            <div class="form-check col-lg-4">
                <input class="form-check-input" name="opcion[]" type="checkbox" value="{{2}}"   >
                <label class="form-check-label" for="flexCheckDefault">
                    rol2
                </label>
            </div>--}}

            @foreach ($roles as $rol)
                @if (!empty($rol))
                    <div class="form-check col-lg-4">
                        <input class="form-check-input" name="opcion[]" type="checkbox" value="{{$rol->id}}"   >
                        <label class="form-check-label" for="flexCheckDefault">
                            {{$rol->nombre}}
                        </label>
                    </div>
                @endif
            @endforeach


        </div>



    </div>

</div>

<br>

{{--<div class="form-group">
    <label for="Foto">Foto</label>

    <input class="form-control" type="file" name="Foto" id="Foto" value="{{isset($empleado->Foto)?$empleado->Foto:old('Foto')}}">
</div>--}}

<br>
<input class="btn btn-success" type="submit" value="* {{$modo}} datos" id="Enviar">
<a class="btn btn-primary" href="{{url('empleado')}}">Regresar</a>
