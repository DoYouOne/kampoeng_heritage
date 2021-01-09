@extends('master_user')

@section ('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
          <h3 align="center">Data Seluruh Event</h3><br>
          <div class="portlet light portlet-fit ">
            <div class="portlet-body">
          <div class="table-responsive">
            <table cellpadding="0" cellspacing="0" border="0" class="display" style="width:100%;" id="anggota">
                <thead>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Judul Event</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Penyelenggara</th>
                    <th>Deskripsi</th>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($event as $e)
                    <tr>
                        <td>{{ $no  }}</td>
                        <td><img src="{{ url('uploads/event') }}/{{ $e->foto }}" alt="" style="width: 100px; height: auto;"></td>
                        <td>{{ $e->judul }}</td>
                        <td>{{ $e->waktu }}</td>
                        <td>{{ $e->jam }}</td>
                        <td>{{ $e->penyelenggara }}</td>
                        <td>{{ $e->deskripsi }}</td>
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

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
  $('#anggota').DataTable({
      responsive: true
  } );
</script>
@stop
