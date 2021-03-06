@extends('master_user')

@section ('content')
<div class="col-md-12">
    <div class="portlet light" style="margin-top:4%;">
        <div class="portlet-body">
            <img src="{{ url('uploads/event') }}/{{ $event->foto }}" alt="" class="img-responsive" style="width: 500px; margin-left:auto; margin-right:auto;">
            <h1 align="center">{{ $event->judul }}</h1>
            <h3>Diselenggarakan oleh :</h3>
            <p>{{ $event->penyelenggara }}</p>
            <p>Tanggal : {{ $event->waktu }}</p>
            <p>Pukul : {{ $event->jam }} WIB</p>
            <hr>
            <h3>Deskripsi Event :</h3>
            <p>{{ $event->deskripsi }}</p>
        </div>
    </div>
</div>

@stop
