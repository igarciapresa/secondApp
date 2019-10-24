@extends('base')

@section('contenido')

<form action="landingPage" method="post">
    @csrf
    <label>Email: </label>
    <input type="email" name="nombre" required>
    <br>
    <input type="submit">
</form>

@stop