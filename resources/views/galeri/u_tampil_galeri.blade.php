@extends('master_user')

@section ('content')
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
          <h3 align="center">Galeri Kampoeng Heritage Malang</h3><br>
        @foreach ($galeri as $e)
        <div class="col-md-4">
            <div class="portlet light portlet-fit ">
                <div class="portlet-body">
                    <div class="mt-element-overlay">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-overlay-2">
                                    <img src="{{ url('uploads/galeri') }}/{{ $e->foto }}" style="height:240px; width:auto; margin-left:auto; margin-right:auto;" />
                                    <div class="mt-overlay">
                                        <a class="mt-info btn default btn-outline" href="{{ url('detail_galeri') }}/{{ $e->id }}">Detail Galeri</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    {{--  <h5>Keterangan : {{ $e->keterangan }}</h5>  --}}
                    {{-- <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Overlay 2 - Default</span>
                        <div class="caption-desc font-grey-cascade"> Activate by adding <pre class="mt-code">.mt-overlay-2</pre> class to your element. </div> --}}
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
@stop
