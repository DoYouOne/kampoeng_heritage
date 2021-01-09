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
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" width="320px" height="240px" src="{{ '/uploads/event' }}/{{ $e->foto }}" data-src="" alt="Card image cap">
            <div class="card-body">
                <b><h4>{{ $e->judul }}</h4></b>
                <h5>Tanggal : {{ $e->waktu }}</h5>
                <h5>Pukul : {{ $e->jam }} WIB</h5>
              {{-- <p class="card-text">{{ $e->deskripsi }}</p> --}}
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ url('detail_event') }}/{{ $e->id }}"><button type="button" class="btn btn-sm btn-primary">Lihat Detail</button></a>
                </div>
              </div>
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
