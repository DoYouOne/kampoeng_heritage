@extends('master_user')

@section ('content')
<div class="col-md-12">
    <div class="portlet light" style="margin-top:4%;">
        <div class="portlet-body">
            <img src="{{ url('uploads/kuliner') }}/{{ $kuliner->foto }}" alt="" class="img-responsive" style="width: 500px; margin-left:auto; margin-right:auto;">
            <h1 align="center">{{ $kuliner->nama }}</h1>
            <h3>Keterangan</h3>
            <table>
                <tr>
                    <td>Harga Mulai</td>
                    <td> : </td>
                    <td>Rp {{ $kuliner->harga }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> : </td>
                    <td>{{ $kuliner->alamat }}</td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td> : </td>
                    <td>{{ $kuliner->telepon }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@stop
