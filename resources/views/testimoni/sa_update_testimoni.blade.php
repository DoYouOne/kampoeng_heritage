@extends('master_sadmin')

@section ('content')
<div class="col-md-12">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark sbold uppercase">Ubah Data Hak Akses</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" action="{{ url('Sadmin_ulasan/aksi_update/'.$testimoni->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Ulasan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="ulasan" value="{{ $testimoni->ulasan }}"> </div>
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
