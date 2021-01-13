@extends('master_user')

@section ('content')
<div class="col-md-12">
    <div class="portlet light" style="margin-top:4%;">
        <div class="portlet-body">
            <img src="{{ url('uploads/galeri') }}/{{ $galeri->foto }}" alt="" class="img-responsive" style="width: 500px; margin-left:auto; margin-right:auto;">
            <h3>Keterangan :</h3>
            <p>{{ $galeri->keterangan }}</p>
            <p>Diunggah pada : {{ $galeri->created_at }}</p>
        </div>
    </div>
</div>

@stop
