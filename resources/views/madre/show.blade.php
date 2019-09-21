@extends('layouts.app')
@section('title', 'show')
@section('navbar')
@include('include.navbar')
@endsection
@section('sidebar')
@include('include.sidebar')
@endsection
@section('footer')
@include('include.footer')
@endsection
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{"Integrant"}}</div>
<div class="card-body">
<h1>Usuario: {{$ver->name}}</h1>
<p><b>{{$ver->name}}</b> Usted tiene una gran virtud por delante</p>
<hr>
<p>Se enviara a su Correo: <b>{{$ver->email}}</b> un archivo de paz</p>
<p>sin mas nada que decir nos encontremos en su proxima actualizacion de <b>{{env('APP_NAME', 'Laravel')}}</b></p>
<p>Su contraseña esta encriptado: <b>{{$ver->password}}</b></p>
<p>Su creacion de archivo es: <b>{{$ver->created_at}}</b></p>
<p>Su ultima actualizacion es: <b>{{$ver->updated_at}}</b></p>
<hr>
{!!Form::button(link_to('padre','Regresar'))!!}
</div>
</div>
</div>
</div>
</div>
@endsection