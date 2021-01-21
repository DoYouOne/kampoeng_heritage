@extends('master_sadmin')

@section ('content')
<div class="col-md-12">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-star font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Tambah Event</span>
            </div>
            <div class="actions">
                <div class="btn-group btn-group-devided" data-toggle="buttons">
                    <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                        <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                    <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                        <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                </div>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('Sadmin_event/aksi_tambah') }} "enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Judul</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="judul" placeholder="Masukan judul event">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Penyelenggara</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="penyelenggara" placeholder="Masukan nama penyelengaara">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="waktu" placeholder="12/12/2012">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jam</label>
                        <div class="col-md-9">
                            <div class="input-inline input-medium">
                                <input type="time" class="form-control" name="jam" placeholder="Email Address"> </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Deskripsi</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Foto</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" placeholder="" name="gambar">
                            <small style="color: grey;">*Harap masukkan foto makanan atau tempat</small>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
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
