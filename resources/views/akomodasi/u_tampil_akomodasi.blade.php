@extends('master_user')

@section ('content')
    <div class="container">
        <h2 align="center">Akomodasi disekitar Kampoeng Heritage Kajoetangan</h2>
    </div>
        @foreach ($akomodasi as $e)
          @php
            $kalimat = $e->nama;
          @endphp
        <div class="col-md-4">
            <div class="portlet light portlet-fit ">
                <div class="portlet-body" style="height: 430px;">
                    <div class="mt-element-overlay">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-overlay-2">
                                    <img src="{{ url('uploads/akomodasi') }}/{{ $e->foto }}" style="height: 240px; margin-top: 3%;" />
                                    <div class="mt-overlay">
                                        <h2>{{ Str::limit($kalimat,50) }}</h2>
                                        <a class="mt-info btn default btn-outline" href="{{ url('detail_akomodasi') }}/{{ $e->id }}">Detail Akomodasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <span class="caption-subject font-green bold uppercase"  align="center">{{ Str::limit($kalimat,50) }}</span><br>
                    <hr>
                    <h5>{{ Str::limit($e->alamat,100) }}</h5>
                    <h5>Telepon : {{ $e->telepon }}</h5>
                    {{-- <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Overlay 2 - Default</span>
                        <div class="caption-desc font-grey-cascade"> Activate by adding <pre class="mt-code">.mt-overlay-2</pre> class to your element. </div> --}}
                </div>
            </div>
        </div>
        @endforeach
@stop
