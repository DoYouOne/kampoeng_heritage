@extends('master_admin')

@section ('content')
<div class="col-md-12">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark sbold uppercase">Tambah Galeri Baru</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" action="{{ url('Admin_galeri/aksi_tambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Foto</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" placeholder="" name="gambar">
                                <small style="color: grey;">*Harap masukkan foto makanan atau tempat</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Keterangan</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="keterangan" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-5 col-md-7">
                            <button type="submit" class="btn green">Tambah</button>
                            <button type="reset" class="btn default">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
