@extends('layouts.app')

@section('content')
    <div class="container shadow rounded  p-3 mb-5">
        <form action="{{url('/role/'.$role->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="container shadow-lg p-3 mb-5  rounded-4">

                <div class="container rounded">
                    <div class="shadow  d-flex flex-row align-items-center fw-bold w-75 rounded-bottom">

                        <h6>{{$role->id}}-</h6>  <h1>{{$role->nombre }} </h1>

                    </div>
                    <br>
                    <div class="form-group d-flex flex-row row">
                        <div class="col-4">


                            <div class="h-75">
                                @if(isset($role->Foto))
                                    <img class="img-thumbnail img-fluid mh-100 " src="{{asset('storage'.'/'.$role->Foto)}}" alt="Foto role" >
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
                                    <td>Role</td>
                                    <td>{{$role->nombre}}</td>
                                </tr>
                                <tr class="">
                                    <td>Descripción</td>
                                    <td>{{$role->descripcion}}</td>
                                </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>


            </div>


        </form>
        <a class="btn btn-primary" href="{{url('role')}}">Regresar</a>
        <hr>
    </div>
@endsection
