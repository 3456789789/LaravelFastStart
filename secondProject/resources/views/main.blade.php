
@extends('layouts.app')

@section('content')

<form action="auth/login" method="get">
    <input type="submit" value="Login" />    
</form>

<form action="auth/register" method="get">
    <input type="submit" value="Register" />    
</form>

<form action="tasks" method="get">
    <input type="submit" value="Tasks" />    
</form>

<form action="tasks" method="get">
    <input type="submit" value="Quit" />    
</form>
@endsection