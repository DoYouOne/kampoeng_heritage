@extends('master_user')

@section ('content')
<br>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-microphone font-green"></i>
                    <span class="caption-subject bold font-green uppercase"> Semua Ulasan</span>
                </div>
            </div>
            <div class="portlet-body">
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
                                        <span class="timeline-body-alerttitle font-red-intense">{{ $t->id_user }}</span>
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
