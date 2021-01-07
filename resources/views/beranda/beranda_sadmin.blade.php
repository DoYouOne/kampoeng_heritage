@extends('master_sadmin')

@section ('content')
selamat datang {{ Auth::user()->name }}
@stop
