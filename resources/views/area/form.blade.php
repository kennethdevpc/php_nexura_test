<div class="container shadow-lg p-1 mb-2 bg-body rounded w-75" >

    <div class="container shadow p-2 mb-3 bg-body rounded w-100">
        <div class="shadow mb-5 pe-3 py-3 d-flex justify-content-between rounded-4">

            <h1 class="  mt-1 bg-body rounded  px-3 ">{{$modo}} Area</h1>
            @if(isset($area->Foto))
                <img class="img-thumbnail img-fluid  vh-25 " src="{{asset('storage'.'/'.$area->Foto)}}"
                     alt="Sin Foto de empleado!"
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
        <br>
        <div class="form-group d-flex flex-row">
            <label class="col-lg-2 px-3 text-lg-end " for="nombre">Nombre completo</label>
            <input class="form-control" type="text" name="nombre" id="nombre"
                   value="{{isset($area->nombre)?$area->nombre:old('nombre')}}">
        </div>
        <br>
        <div class="form-group d-flex flex-row">
            <label class="col-lg-2 px-3 text-lg-end" for="descripcion">descripcion</label>
            <textarea name="descripcion" class="form-control" id="descripcion"
                      rows="3">{{isset($area->descripcion)?$area->descripcion:old('descripcion')}}</textarea>
        </div>
        <br>

        <div class="d-flex flex-row justify-content-between">
            <a class="btn btn-primary" href="{{url('area')}}"><i class="fas fa-arrow-left"></i> Regresar</a>
            <button type="submit" class="btn btn-success">
                <i class="fas fa-pencil-alt"></i> {{$modo}} datos
            </button>
        </div>
    </div>
</div>
