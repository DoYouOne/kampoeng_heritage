@extends('master_user')

@section ('content')
        <div class="row">
            @foreach ($kuliner as $k)
                <div class="col-md-3"  style="height: 20px;">
                    <div class="portlet light">
                        <div class="portlet-body">
                            <div class="mt-card-item">
                                <div class="mt-card-avatar mt-overlay-1">
                                    <img src="{{ url('uploads/kuliner') }}/{{ $k->foto }}" style="width: 230px; height: auto;"  />
                                </div>
                                <div class="mt-card-content">
                                    <h3 class="mt-card-name">{{ $k->nama }}</h3>
                                    <p class="mt-card-desc font-grey-mint">Harga mulai Rp {{ $k->harga }}</p>
                                    <p class="mt-card-desc font-grey-mint">Alamat : {{ $k->alamat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@stop
