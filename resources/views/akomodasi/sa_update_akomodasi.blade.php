@extends('master_sadmin')

@section ('content')
<div class="col-md-12">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark sbold uppercase">Ubah Data Akomodasi</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" action="{{ url('Sadmin_akomodasi/aksi_update/'.$akomodasi->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nama Akomodasi</label>
                                <div class="col-md-9">
                                    <input type="name" class="form-control" placeholder="Nama akomodasi" name="nama" value="{{ $akomodasi->nama }}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Harga</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="Harga mulai.." name="harga" value="{{ $akomodasi->harga }}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Alamat</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat Lengkap">{{ $akomodasi->alamat }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Foto</label>
                                <div class="col-md-9">
                                    <img src="{{ url('uploads/akomodasi') }}/{{ $akomodasi->foto }}" alt="" style="width:100px; height:100px;">
                                    <input type="file" class="form-control" placeholder="" name="gambar">
                                    <small style="color: grey;">*Harap masukkan foto makanan atau tempat</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Telepon</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="081****" name="telepon" value="{{ $akomodasi->telepon }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-5 col-md-7">
                            <button type="submit" class="btn green">Ubah</button>
                            <button type="reset" class="btn default">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
