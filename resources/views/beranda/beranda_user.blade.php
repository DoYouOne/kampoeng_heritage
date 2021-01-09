@extends('master_user')

@section ('content')

<section class="jumbotron" style="padding:0;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding:0;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="../uploads/beranda/header1.jpg" style="width: 100%;height: 720px;" alt="Los Angeles">
          </div>

          <div class="item">
            <img src="../uploads/beranda/header2.jpg" style="width: 100%;height: 720px;"  alt="Chicago">
          </div>

          <div class="item">
            <img src="../uploads/beranda/header3.jpg" style="width: 100%;height: 720px;" alt="New York">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
          <h3 align="center">Event Terbaru</h3><br>
        @foreach ($event as $e)
        <div class="col-md-4">
            <div class="portlet light portlet-fit ">
                <div class="portlet-body">
                    <div class="mt-element-overlay">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-overlay-2">
                                    <img src="{{ url('uploads/event') }}/{{ $e->foto }}" />
                                    <div class="mt-overlay">
                                        <h2>{{ $e->judul }}</h2>
                                        <a class="mt-info btn default btn-outline" href="{{ url('detail_event') }}/{{ $e->id }}">Detail Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <span class="caption-subject font-green bold uppercase" align="center">{{ $e->judul }}</span><br>
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
      </div>
    </div>
</div>
</main>


{{-- {{ $event->links() }} --}}

@stop
