@extends('master_user')

@section ('content')
<br>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit ">
            <div class="portlet-body">
                <h2 align="center">Ulasan</h2>
                <a href="{{ url('tambah_testimoni') }}"><button class="btn btn-primary btn-sm">Tulis Ulasan</button></a>
                <br><br>
                <div class="timeline">
                    <!-- TIMELINE ITEM -->
                        @foreach ($testimoni as $t)
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <div class="timeline-icon">
                                    <i class="icon-user-following font-green-haze"></i>
                                </div>
                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow"> </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-red-intense">{{ $t->name }}</span>
                                        <span class="timeline-body-time font-grey-cascade">{{ $t->tanggal }}</span>
                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <span class="font-grey-cascade"> {{ $t->ulasan }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    <!-- END TIMELINE ITEM -->
                </div>
            </div>
        </div>
    </div>
</div>

@stop
