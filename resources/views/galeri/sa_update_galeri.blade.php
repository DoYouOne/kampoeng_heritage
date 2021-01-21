@extends('master_sadmin')

@section ('content')
<div class="col-md-12">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark sbold uppercase">Ubah Data Galeri</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" action="{{ url('Sadmin_galeri/aksi_update/'.$galeri->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Foto</label>
                            <div class="col-md-9">
                                <img src="{{ url('uploads/galeri') }}/{{ $galeri->foto }}" alt="" style="width:100px; height:100px;">
                                <input type="file" class="form-control" placeholder="" name="gambar">
                                <small style="color: grey;">*Harap masukkan foto makanan atau tempat</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Keterangan</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="keterangan" rows="3">{{ $galeri->keterangan }}</textarea>
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
