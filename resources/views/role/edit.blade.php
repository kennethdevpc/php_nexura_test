@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{url('/role/'.$role->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('role.form',['modo'=>'Editar'])
        </form>
    </div>
@endsection
