@extends('master_user')

@section ('content')
    <div class="container">
        <h2 align="center">Daftar Semua Event</h2>
    </div>
        @foreach ($event as $e)
          @php
            $kalimat = $e->judul;
          @endphp
        <div class="col-md-4">
            <div class="portlet light portlet-fit ">
                <div class="portlet-body" style="height: 430px;">
                    <div class="mt-element-overlay">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-overlay-2">
                                    <img src="{{ url('uploads/event') }}/{{ $e->foto }}" style="height: 240px; margin-top: 3%;" />
                                    <div class="mt-overlay">
                                        <h2>{{ Str::limit($kalimat,50) }}</h2>
                                        <a class="mt-info btn default btn-outline" href="{{ url('detail_event') }}/{{ $e->id }}">Detail Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <span class="caption-subject font-green bold uppercase"  align="center">{{ Str::limit($kalimat,50) }}</span><br>
                    <hr>
                    <h5>Tanggal : {{ $e->waktu }}</h5>
                    <h5>Pukul : {{ $e->jam }} WIB</h5>
                    {{-- <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Overlay 2 - Default</span>
                        <div class="caption-desc font-grey-cascade"> Activate by adding <pre class="mt-code">.mt-overlay-2</pre> class to your element. </div> --}}
                </div>
            </div>
        </div>
        @endforeach
@stop
