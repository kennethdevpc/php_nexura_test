<div class="container shadow-lg p-1 mb-2 bg-body rounded">

    <div class="container shadow p-2 mb-3 bg-body rounded">
        <div class="shadow mb-5 pe-3 py-3 d-flex justify-content-between rounded-4">

            <h1 class="  mt-1 bg-body rounded  px-3 ">{{$modo}} Empleado</h1>
            @if(isset($empleado->Foto))
                <img class="img-thumbnail img-fluid  vh-25 " src="{{asset('storage'.'/'.$empleado->Foto)}}" alt="Sin Foto de empleado!"
                     width="100px">

            @endif
        </div>


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

        <div class=" form-group d-flex flex-row">
            <label class="col-lg-2 px-3 text-lg-end " for="Foto">Foto</label>
            <input class="form-control" type="file" name="Foto" id="Foto"
                   value="{{isset($empleado->Foto)?$empleado->Foto:old('Foto')}}">
            <input class="form-control" type="text" name="Foto" id="Foto"
                   value="{{isset($empleado->Foto)?$empleado->Foto:old('Foto')}}">
        </div>
        <br>

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
                    <input class="form-check-input" type="radio" name="sexo" value="{{ ("M" )}}"
                           id="flexRadioDefault1" {{ old('sexo') == 'M' || (isset($empleado->sexo) && $empleado->sexo == 'M') ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="{{ ("F" )}}"

                           id="flexRadioDefault2" {{ old('sexo') == 'F' || (isset($empleado->sexo) && $empleado->sexo == 'F') ? 'checked' : '' }}>
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

                    <select name="area_id" id="area_id">
                        <option value="{{isset($empleado->area_id)?$empleado->area_id:old('area_id')}}">Selecciona una
                            opción
                        </option>
                        @foreach ($area as $are)
                            @if (!empty($are))
                                <option
                                    value="{{ $are['id'] }}" {{ old('area_id') == $are['id'] ? 'selected' : '' }}>{{ $are->nombre }}</option>
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
            <textarea name="descripcion" class="form-control" id="descripcion"
                      rows="3">{{isset($empleado->descripcion)?$empleado->descripcion:old('descripcion')}}</textarea>
        </div>
        <br>

        <div class="form-group d-flex flex-row">
            <div class="form-check px-5 mx-lg-5"></div>
            <div class="form-check px-2 mx-2">
                <input class="form-check-input" name="boletin" type="checkbox" value="{{1}}"
                       id="boletin" {{isset($empleado->boletin)?($empleado->boletin=="1"?"checked":""):old('boletin')}} >
                <label class="form-check-label" for="flexCheckDefault">
                    Deseo recibir boletín informativo
                </label>
            </div>
            {{--<input class="form-control" type="text" name="boletin" id="boletin"
                   value="{{isset($empleado->boletin)?$empleado->boletin:old('boletin')}}">--}}
        </div>
        <br>

        {{--    {{isset($empleado->roles)?($empleado->boletin=="1"?"checked":""):old('boletin')}}--}}

        <div class="form-group d-flex flex-row">
            <label class="col-lg-2 px-3 text-lg-end" for="role">Roles</label>
            <div class="form-check d-flex flex-wrap">

                @foreach ($roles as $rol)
                    {{-- @if (!empty($empleado->roles))
                         @foreach ($empleado->roles as $rolEmpleado)

                             @if (intval($rolEmpleado->id)==($rol->id))
                                 {{$rolEmpleado->id}}
                                 <div class="form-check col-lg-4">
                                     --}}{{-- <input class="form-check-input" name="opcion[]" type="checkbox" value="{{$rol->id}}"   >--}}{{--
                                     <input class="form-check-input" type="checkbox" name="opcion[]"
                                            value="{{ $rol->id}}" {{ in_array($rol->id, old('opcion', [])) ? 'checked' : '' }}>
                                     <label class="form-check-label" for="flexCheckDefault">
                                         {{$rol->nombre}}
                                     </label>
                                 </div>
                             @else
                                 {{$rolEmpleado->id}}
                                 <div class="form-check col-lg-4">
                                     --}}{{-- <input class="form-check-input" name="opcion[]" type="checkbox" value="{{$rol->id}}"   >--}}{{--
                                     <input class="form-check-input" type="checkbox" name="opcion[]"
                                            value="{{ $rol->id}}" {{ in_array($rol->id, old('opcion', [])) ? 'checked' : '' }}>
                                     <label class="form-check-label" for="flexCheckDefault">
                                         {{$rol->nombre}}
                                     </label>
                                 </div>

                             @endif

                         @endforeach
                     @endif--}}
                    @if (!empty($rol))
                        <div class="form-check col-lg-4">
                            {{-- <input class="form-check-input" name="opcion[]" type="checkbox" value="{{$rol->id}}"   >--}}
                            @if(!isset($empleado->roles))
                                <input class="form-check-input" type="checkbox" name="opcion[]"
                                       value="{{ $rol->id}}" {{ in_array($rol->id, old('opcion', [])) ? 'checked' : '' }}>
                            @endif
                            @if(isset($empleado->roles))
                                <input class="form-check-input" type="checkbox" name="opcion[]"
                                       value="{{ $rol->id}}" {{ in_array($rol->id, $empleado->roles->pluck('id')->toArray())  ? 'checked' : '' }}>
                            @endif
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$rol->nombre}}
                            </label>
                        </div>
                    @endif
                @endforeach
            </div>

            {{--    <div>

                    <select name="roles">
                        <option value="">Select a role</option>
                        <?php
                        if (isset($empleado->roles) && is_array($empleado->roles)) {
                            foreach ($roles as $rol) {
                                $selected = in_array($rol, $empleado->roles) ? "selected" : "";
                                echo "<option value=\"$rol\" $selected>$rol</option>";
                            }
                        } else {
                            foreach ($roles as $rol) {
                                $selected = old('roles') == $rol ? "selected" : "";
                                echo "<option value=\"$rol\" $selected>$rol</option>";
                            }
                        }
                        ?>
                    </select>

                </div>--}}
        </div>
        <hr>

        <div class="d-flex flex-row justify-content-between">
            <a class="btn btn-primary" href="{{url('empleado')}}"><i class="fas fa-arrow-left"></i> Regresar</a>
            <button type="submit" class="btn btn-success">
                <i class="fas fa-pencil-alt"></i> {{$modo}} datos
            </button>
        </div>
    </div>
    {{--<div class="form-group">
        <label for="Foto">Foto</label>

        <input class="form-control" type="file" name="Foto" id="Foto" value="{{isset($empleado->Foto)?$empleado->Foto:old('Foto')}}">
    </div>--}}
</div>
