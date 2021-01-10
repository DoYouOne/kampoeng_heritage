@extends('master_user')

@section ('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
          <h3 align="center">Akomodasi disekitar Kampoeng Heritage Malang</h3><br>
            <div class="portlet light portlet-fit ">
                <div class="portlet-body">
                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" border="0" class="display" style="width:100%;" id="anggota">
                            <thead>
                                <th>No</th>
                                <th>Nama Akomodasi</th>
                                <th>Foto</th>
                                <th>Harga mulai</th>
                                <th>Alamat</th>
                                <th>Detail</th>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($akomodasi as $e)
                                <tr>
                                    <td>{{ $no  }}</td>
                                    <td>{{ $e->nama }}</td>
                                    <td><img src="{{ url('uploads/akomodasi') }}/{{ $e->foto }}" style="width: 50px; height: 50px;" alt=""></td>
                                    <td>{{ $e->harga }}</td>
                                    <td>{{ $e->alamat }}</td>
                                    <td>
                                        <a href="{{ url('detail_akomodasi') }}/{{ $e->id }}">
                                            <button type="button" class="btn btn-primary">Detail</button>
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
