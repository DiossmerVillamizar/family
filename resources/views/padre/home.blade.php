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
<table border="2" width="100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Color</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($families as $family)
        <tbody>
            <tr>
                <td>{!!link_to('padre/'.$family->id,$family->name)!!}</td>
                <td>{{$family->lastname}}</td>
                <td>{{$family->age}}</td>
                <td>{{$family->color}}</td>
                <td>
                    {!!Form::open(['url' => 'padre/'.$family->id, 'method' => 'DELETE'])!!}
                    {!!Form::button(link_to_route('family.padre.edit','editar',$family->id))!!}
                    {!!Form::submit('Eliminar')!!}
                    {{Form::close()}}
                </td>   
            </tr>            
        </tbody>
    @endforeach
</table>
{!!Form::button(link_to_route('family.padre.create','Add User'))!!}
{!!Form::button(link_to_route('family.hijo.store','Go Hijo'))!!}
{{-- {{$families->links()}} --}}
composer require laravelcollective/html "5.8.*" -> "laravelcollective"
</div>
</div>
</div>
</div>
</div>
@endsection