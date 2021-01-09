@extends('master_admin')

@section ('content')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="mt-widget-1">
                <div class="mt-body">
                    <div class="dashboard-stat2 ">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-green-sharp">
                                    <span data-counter="counterup" data-value="7800">{{ $galeri }}</span>
                                </h3>
                                <small>TOTAL GALERI</small>
                            </div>
                            <div class="icon">
                                <i class="icon-folder"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                <span style="width: {{ $galeri }}%;" class="progress-bar progress-bar-success green-sharp">
                                    <span class="sr-only">{{ $galeri }}%</span>
                                </span>
                            </div>
                            <div class="status">
                                <div class="status-title"> galeri </div>
                                <div class="status-number"> {{ $galeri }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mt-widget-1">
                <div class="mt-body">
                    <div class="dashboard-stat2 ">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-green-sharp">
                                    <span data-counter="counterup" data-value="7800">{{ $event }}</span>
                                </h3>
                                <small>TOTAL EVENT</small>
                            </div>
                            <div class="icon">
                                <i class="icon-star"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                <span style="width: {{ $event }}%;" class="progress-bar progress-bar-success green-sharp">
                                    <span class="sr-only">{{ $event }}%</span>
                                </span>
                            </div>
                            <div class="status">
                                <div class="status-title"> event </div>
                                <div class="status-number"> {{ $event }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mt-widget-1">
                <div class="mt-body">
                    <div class="dashboard-stat2 ">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-green-sharp">
                                    <span data-counter="counterup" data-value="7800">{{ $ulasan }}</span>
                                </h3>
                                <small>TOTAL ULASAN</small>
                            </div>
                            <div class="icon">
                                <i class="icon-pencil"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                <span style="width: {{ $ulasan }}%;" class="progress-bar progress-bar-success green-sharp">
                                    <span class="sr-only">{{ $ulasan }}%</span>
                                </span>
                            </div>
                            <div class="status">
                                <div class="status-title"> Ulasan </div>
                                <div class="status-number"> {{ $ulasan }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
