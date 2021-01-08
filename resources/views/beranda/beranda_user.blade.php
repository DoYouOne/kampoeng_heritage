@extends('master_user')

@section ('content')
selamat datang User,{{ Auth::user()->name }}
@stop
