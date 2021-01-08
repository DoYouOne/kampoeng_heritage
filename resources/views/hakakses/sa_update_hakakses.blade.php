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
            <form class="form-horizontal" role="form" action="{{ url('Sadmin_hakakses/aksi_update/'.$hakakses->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Username</label>
                                <div class="col-md-9">
                                    <input type="name" class="form-control" name="name" value="{{ $hakakses->name }}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"  value="{{ $hakakses->email }}"> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" value="{{ $hakakses->password }}">  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                    <select name="status" class="form-control">
                                        <option value="{{ $hakakses->status }}" readonly>
                                            @if ($hakakses->status == 0)
                                                Super Admin
                                            @elseif ($hakakses->status == 1)
                                                Admin
                                                @elseif ($hakakses->status == 2)
                                                User
                                            @endif
                                        </option>
                                        <option value="" disabled>--Pilih salah satu--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
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
