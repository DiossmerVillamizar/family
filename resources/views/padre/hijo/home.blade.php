@extends('layouts.app')
@section('title', 'home')
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
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Apellido</th>
            <th>hijo</th>
            <th>Action</th>
        </tr>
    </thead>
   @foreach ($hijos as $hijo)
        <tbody>
            <tr>
                <td>{!!link_to_route('todowebsie.hijo.show',$hijo->name,$hijo->id)!!}</td>
                <td>{{$hijo->apellido}}</td>
                <td>{{$hijo->User->name}}</td>
                <td>
                    {!!Form::button(link_to_route('todowebsie.hijo.edit','editar',$hijo->id))!!}
                    &#5210;
                    {!!Form::open(['url' => 'hijo/'.$hijo->id, 'method' => 'DELETE'])!!}
                    {!!Form::submit('Eliminar')!!}
                    {{Form::close()}}
                </td>    
            </tr>            
        </tbody>
    @endforeach
</table>
<td>{!!Form::button(link_to_route('todowebsie.hijo.create','Add User'))!!}</td>
{{$hijos->links()}}
composer require laravelcollective/html "5.8.*" -> "laravelcollective"
</div>
</div>
</div>
</div>
</div>
@endsection