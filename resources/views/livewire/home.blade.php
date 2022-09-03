<section class="br-fix overflow-hidden">
  <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
    <div class="swiper">
      <div class="swiper-wrapper">
        @foreach (\App\Models\Carousel::all() as $key => $row)
          <div class="swiper-slide bg-overlay bg-overlay-400 " style="height:700px">
            <img src="{{ asset($row->gambar) }}" alt="" />
            <div class="caption-wrapper p-12">
              <div
                class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s">
                <h5 class="mb-0">{{ $row->keterangan }}</h5>
              </div>
              <!--/.caption -->
            </div>
            <!--/.caption-wrapper -->
          </div>
        @endforeach
      </div>
      <!--/.swiper-wrapper -->
    </div>
    <!-- /.swiper -->
  </div>
  <!-- /.swiper-container -->
</section>

<section class="wrapper bg-soft-primary">
  <div class="container  py-md-5">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7">
        <figure><img class="w-auto" src="./assets/img/illustrations/i8.png" srcset="./assets/img/task.png"
            alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h3 class="display-4 mb-2 pe-xxl-6">Agenda</h3>
        <ul class="progress-list mt-3 overflow-auto" style="height: 350px">
          @foreach (\App\Models\Agenda::where('waktu', '>=', now())->get() as $row)
            <li>
              {{ $row->judul }} <br> <small>{{ $row->lokasi }},
                {{ \Carbon\Carbon::parse($row->waktu)->format('d F Y H:m:s') }}</small>
              <hr style="margin: 0 0 0 0">
            </li>
          @endforeach
        </ul>
        <!-- /.progress-list -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
  <div class="container  pt-3">
    <div class="row gy-6">
      <div class="col-md-6 col-lg-7">
        <div class="widget">
          <h3 class="widget-title mb-3">Kegiatan Terbaru</h3>
          @foreach ($kegiatan as $key => $row)
            @if ($key == 0)
              <article>
                <figure class="overlay overlay-1 hover-scale rounded "><a href="#"> <img
                      src="{{ asset($row->gambar) }}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">Read More</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <!-- /.post-category -->
                  <h3 class="post-title h3 "><a class="link-dark"
                      href="/kegiatan/{{ $row->getKey() }}">{{ \Illuminate\Support\Str::words($row->judul, 3, '....') }}</a>
                  </h3>
                </div>
                <!-- /.post-header -->
                <div class="post-footer">
                  <ul class="post-meta">
                    <li class="post-date"><i
                        class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($row->updated_at)->format('d M Y') }}</span>
                    </li>
                    <li class="post-comments"><a href="#"><i class="uil uil-eye"></i>{{ $row->hit_count }}</a>
                    </li>
                  </ul>
                  <!-- /.post-meta -->
                </div>
                <!-- /.post-footer -->
              </article>
              <hr style="margin:10px 0px 20px 0px">
            @else
              <ul class="image-list">
                <li>
                  <figure class="rounded"><a href="/kegiatan/{{ $row->getKey() }}"><img
                        src="{{ asset($row->gambar) }}" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-0"> <a class="link-dark" href="/kegiatan/{{ $row->getKey() }}">
                        @php echo $row->judul @endphp</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i
                          class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($row->updated_at)->format('d M Y') }}</span>
                      </li>
                      <li class="post-comments"><a href="#"><i class="uil uil-eye"></i>{{ $row->hit_count }}</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            @endif
          @endforeach
        </div>
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="card bg-pale-red">
          <div class="card-body">
            <h3 class="text-danger">Pengumuman Terbaru</h3>
            <ul class="image-list overflow-auto" style="max-height: 400px">
              @foreach ($pengumuman as $key => $row)
                <li>
                  <figure class="rounded"><a href="/pengumuman/{{ $row->getKey() }}"><img
                        src="{{ asset($row->gambar) }}" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-0"> <a class="link-dark"
                        href="/pengumuman/{{ $row->getKey() }}">{{ $row->judul }}</a> </h6>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
          <!--/.card-body -->
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-soft-primary">
  <div class="container py-5 pt-md-10 pt-lg-0 pb-md-8">
    <div class="row text-center mt-1">
      <div class="col-lg-9 mx-auto">
        <h4 class="display-4 mb-0 text-center px-xl-10 px-xxl-15 mt-5">Layanan Anggota</h4>
        <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp" data-group="process"
          data-disabled="true">
          <div class="col-md-4" data-cue="slideInUp" data-group="process" data-show="true"
            style="animation-name: slideInUp; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
            <a href="http://kta.ibi.or.id/id/login" target="_blank"><img src="./assets/img/icons/lineal/group-2.svg"
                class="svg-inject icon-svg icon-svg-sm text-primary" alt="" />
              <h4 class="mb-1">KTA Online</h4>
            </a>
          </div>
          <!--/column -->
          <div class="col-md-4" data-cue="slideInUp" data-group="process" data-show="true"
            style="animation-name: slideInUp; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
            <a href="http://ibisiporlin-ktki.kemkes.go.id/" target="_blank"><img
                src="./assets/img/icons/lineal/id-card.svg" class="svg-inject icon-svg icon-svg-sm text-primary"
                alt="" />
              <h4 class="mb-1">SIPORLIN</h4>
            </a>
          </div>
          <!--/column -->
          <div class="col-md-4" data-cue="slideInUp" data-group="process" data-show="true"
            style="animation-name: slideInUp; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
            <a href="https://ktki.kemkes.go.id/registrasi" target="_blank">
              <img src="./assets/img/icons/lineal/plan.svg" class="svg-inject icon-svg icon-svg-sm text-primary"
                alt="" />
              <h4 class="mb-1">Perpanjangan STR</h4>
            </a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
