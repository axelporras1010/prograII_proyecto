@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<p>Este contenido es publico</p>
@role('admin')
<p>Esto lo vera el administrador</p>
@endrole
@role('student')
<p>Esto lo vera el estudiante</p>
@endrole
<h4>Cambios desde local</h4>
@endsection
