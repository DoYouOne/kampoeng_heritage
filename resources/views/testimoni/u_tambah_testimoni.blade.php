@extends('master_user')

@section ('content')
<div class="col-md-12">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark sbold uppercase">Ulasan Baru</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" action="{{ url('aksi_tambah_testimoni') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Ulasan</label>
                                <div class="col-md-9">
                                    <input type="hidden" class="form-control" name="id_user" value="{{ Auth::user()->id }}">
                                    <input type="text" class="form-control" placeholder="Masukkan ulasan anda" name="ulasan"> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
