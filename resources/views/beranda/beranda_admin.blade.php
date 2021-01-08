@extends('master_admin')

@section ('content')
selamat datang admin, {{ Auth::user()->name }}
@stop
