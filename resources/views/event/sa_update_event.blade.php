@extends('master_sadmin')

@section ('content')
<div class="col-md-12">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-note font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Update Event</span>
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
            {{-- @foreach ($event as $e) --}}
            <form class="form-horizontal" role="form" method="POST" action="{{ url('Sadmin_event/aksi_update/'.$event->id) }} "enctype="multipart/form-data">
                {{-- <a href="{{ url('Sadmin_event/aksi_update/'.$e->id) }}">
                    <button>Hai</button>
                </a> --}}
                {{ csrf_field() }}
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Judul</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="judul" value="{{ $event->judul }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Penyelenggara</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="penyelenggara" value="{{ $event->penyelenggara }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="waktu" value="{{ $event->waktu }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jam</label>
                        <div class="col-md-9">
                            <div class="input-inline input-medium">
                                <input type="time" class="form-control" name="jam" value="{{ $event->jam }}"> </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Deskripsi</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="deskripsi" rows="3">{{ $event->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="form-">
                        <label class="col-md-3 control-label">Foto</label>
                        <div class="col-md-9">
                            <img src="{{ url('uploads/event') }}/{{ $event->foto }}" alt="..." class="img-thumbnail" style="width: 240px;">
                            <input type="file" class="form-control" name="gambar">
                            <script>document.foo.submit();</script>
                            <small style="color: grey;">*Harap masukkan foto makanan atau tempat</small>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" name="submit" class="btn green">Simpan</button>
                            <button type="reset" class="btn default">Batal</button>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </form>
        </div>
    </div>
</div>
@stop
