@extends('layouts.app')

@section('content')
    <div class="container shadow rounded  p-3 mb-5">
        <form action="{{url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="container shadow-lg p-3 mb-5  rounded-4">

                <div class="container rounded">
                    <div class="shadow  d-flex flex-row align-items-center fw-bold w-50 rounded-bottom">

                        <h6>{{$empleado->id}}-</h6>  <h1>{{$empleado->nombre }} </h1>

                    </div>
                    <br>
                    <div class="form-group d-flex flex-row row">
                        <div class="col-4">


                            <div class="h-75">
                                @if(isset($empleado->Foto))
                                    <img class="img-thumbnail img-fluid mh-100 " src="{{asset('storage'.'/'.$empleado->Foto)}}" alt="Foto empleado" >
                                @endif
                            </div>
                        </div>
                        <div class="col-8">
                            <table class="table   ">
                                <thead class="thead-light">
                                <tr>
                                    <th>Caracateristica</th>
                                    <th>Informarion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="">
                                    <td>Nombre completo</td>
                                    <td>{{$empleado->nombre}}</td>
                                </tr>
                                <tr class="">
                                    <td>Correo</td>
                                    <td>{{$empleado->email}}</td>
                                </tr>
                                <tr class="">
                                    <td>Sexo</td>
                                    <td>{{$empleado->sexo}}</td>
                                </tr>
                                <tr class="">
                                    <td>Boletin</td>
                                    <td>{{$empleado->boletin}}</td>
                                </tr>
                                <tr class="">
                                    <td>Area</td>
                                    <td>{{$empleado->area->nombre}}</td>
                                </tr>
                                <tr class="">
                                    <td>Descripción</td>
                                    <td>{{$empleado->descripcion}}</td>
                                </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>


            </div>


        </form>
        <a class="btn btn-primary" href="{{url('empleado')}}">Regresar</a>
        <hr>
    </div>
@endsection
