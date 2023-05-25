@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{url('/role')}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('role.form',['modo'=>'Crear'])

        </form>
    </div>
@endsection
