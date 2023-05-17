@extends('layouts.app')

@section('content')
    <div class="container">

            @if(Session::has('mensaje'))

            <div class="alert alert-success alert-dismissible" role="alert">
                {{Session::get('mensaje')}}
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button>
            </div>


            @endif

        <a href="{{url('empleado/create')}}" class="btn btn-success">Crear </a>
            <br>
            <br>
        <table class="table table-light">
            <thead class="thead-light">
            <tr>
                <th>#</th>
{{--                <th>Foto</th>--}}
                <th>nombre</th>
                <th>email</th>
                <th>sexo</th>
                <th>area_id</th>
                <th>boletin</th>
                <th>descripcion</th>
                <th>Acciones</th>
            </tr>
            </thead>

            <tbody>
       @foreach($empleados as $empleado)
                <tr>
                    <td>{{$empleado->id}}</td>
                    {{--<td>
                        <div  style=" min-width: 100px;max-width: 150px;max-height: 150px;min-height: 100px;">
                            <img  class="img-thumbnail img-fluid" src="{{asset('storage'.'/'.$empleado->Foto)}}" alt="" width="130px">

                        </div>
                    </td>--}}
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->email}}</td>
                    <td>{{$empleado->sexo}}</td>
                    <td>{{$empleado->area->nombre}}</td>
                    <td>{{$empleado->boletin}}</td>
                    <td>{{$empleado->descripcion}}</td>

                    <td>
                        <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">
                            editar
                        </a>
                        |

                        <form action="{{url('/empleado/'.$empleado->id)}}" method="post" class="d-inline">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit"
                                   onclick="return confirm('¿quieres borrar deveras?')" value="Borrar">
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
