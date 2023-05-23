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
        <a href="{{url('empleado/create')}}" class="btn btn-primary float-end"><i class="fa-solid fa-user-plus"></i> Crear </a>
        <br>
        <br>

        <table class="table table-striped container shadow-lg p-3 mb-5 bg-body rounded-4 w-75">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                {{--                <th>Foto</th>--}}
                <th class="col-4"><i class="fas fa-user "></i> Nombre</th>
                <th class="text-lg-end"><i class="fa-solid fa-screwdriver-wrench "></i> Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr class="" >
                    <td >{{$role->id}}</td>
                    <td class="col-4 cursor-pointer"><a href="{{url('/empleado/'.$role->id)}}" class="font-weight-bold cursor-pointer" style="color: black; text-decoration: none;">{{$role->nombre}}</a></td>
                    <td class="text-lg-end">
                        <div class="dropdown">
                            <a href="#" class="nav-link px-5 pe-0  dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-ellipsis"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end  " aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item d-flex cursor-pointer" href="{{url('/empleado/'.$role->id.'/edit')}}">
                                    <i class="fa-solid fa-pencil d-flex align-items mr-10"></i>
                                    <div class="fs-13"> Editar</div>
                                </a>

                                <a class="dropdown-item d-flex cursor-pointer" href="{{url('/empleado/'.$role->id)}}">
                                    <i class="fa-solid fa-circle-info d-flex align-items mr-10"></i>
                                    <div class="fs-13"> Detalle</div>
                                </a>

                                <form class="dropdown-item d-flex cursor-pointer " action="{{url('/empleado/'.$role->id)}}" method="post" class="d-inline">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn  bg-transparent p-0" onclick="return confirm('¿quieres borrar deveras?')" value="Borrar" >
                                        <i class="fa-solid fa-trash-can"></i> Borrar
                                    </button>
                                </form>

                            </div>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
