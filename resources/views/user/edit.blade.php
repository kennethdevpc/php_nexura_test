@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{url('/users/'.$user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('user.form',['modo'=>'Editar'])
        </form>
    </div>
@endsection
