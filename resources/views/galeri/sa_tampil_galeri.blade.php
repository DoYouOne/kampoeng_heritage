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
              <h2 class="card-title" align="center">Data Galeri</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('Sadmin_galeri/tambah') }}"><button class="btn btn-primary">Tambah Galeri</button></a>
                <br><br><br>
              <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" border="0" class="display" style="width:100%;" id="anggota">
                    <thead>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($galeri as $e)
                        <tr>
                            <td>{{ $no  }}</td>
                            <td><img src="{{ url('uploads/galeri') }}/{{ $e->foto }}" style="width: 50px; height: 50px;" alt=""></td>
                            <td>{{ $e->keterangan }}</td>
                            <td>
                                <a href="{{ url('Sadmin_galeri/update') }}/{{ $e->id }}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <a href="{{ url('Sadmin_galeri/aksi_delete') }}/{{ $e->id }}">
                                    <button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');">Hapus</button>
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

