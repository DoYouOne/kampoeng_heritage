@extends('master_sadmin')

@section ('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<style>
    #y {
        border-radius: 25px;
        background: #4BB543;
        padding-top: 3px;
        padding-left:3px;
        margin-left: 10%;
        color: white;
        width: 20px;
        font-size: 14;
        height: 20px;
    }
    #n {
        border-radius: 25px;
        background: #DE4019;
        padding-top: 3px;
        padding-left:3px;
        margin-left: 10%;
        color: white;
        width: 20px;
        font-size: 14;
        height: 20px;
    }
</style>
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
                <h2 class="card-title" align="center">Tambah Data User</h2>
              </div>
            <div class="portlet-body form">
                <form class="form-horizontal" role="form" action="{{ url('Sadmin_hakakses/aksi_tambah') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="name" class="form-control" placeholder="Masukkan username" name="name"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" placeholder="contoh@email.com" name="email"> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" placeholder="Masukkan password" name="password"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Status</label>
                                    <div class="col-md-9">
                                        <select name="status" class="form-control">
                                            <option value="" disabled>--Pilih salah satu--</option>
                                            <option value="1">Admin</option>
                                            <option value="2">User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn green">Tambah</button>
                                <button type="reset" class="btn default">Batal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          </div>
          <hr>
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title" align="center">Data User</h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" border="0" class="display" style="width:100%;" id="anggota">
                    <thead>
                        <th>No</th>
                          <th>Username</th>
                          <td>Email</td>
                          <th>Status</th>
                          <th>Aksi</th>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($hakakses as $k)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $k->name }}</td>
                            <td>{{ $k->email }}</td>
                            <td>
                                @if ($k->status == 0)
                                    Super Admin
                                @elseif ($k->status == 1)
                                    Admin
                                    @elseif ($k->status == 2)
                                    User
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('Sadmin_hakakses/update') }}/{{ $k->id }}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <a href="{{ url('Sadmin_hakakses/aksi_delete') }}/{{ $k->id }}">
                                    <button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $k->name }} ?');">Hapus</button>
                                </a>
                            </td>
                        </tr>
                        @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
  $('#anggota').DataTable({
      responsive: true
  } );
</script>
@stop

