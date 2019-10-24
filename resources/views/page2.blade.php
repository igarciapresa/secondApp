@extends('base')

@section('contenido')

<form action="home" method="post">
    @csrf
    <label>Login: </label>
    <input type="text" name="nombre" required>
    <br>
    <label>Password: </label>
    <input type="password" name="clave" required>
    <br>
    <input type="submit">
</form>
<a href="forgotten">Forgotten Password</a>
    
@stop