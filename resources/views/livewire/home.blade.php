<section class="br-fix overflow-hidden">
  <div class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500"
    data-image-src="./assets/img/photos/bg26.jpg">
    <div class="container pt-18 pt-lg-21 pb-17 pb-lg-19 text-center">
      <div class="row">
        <div class="col-md-9 col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title"
          data-interval="-200" data-delay="500">
          <h2 class="h1 text-uppercase ls-xl text-white mb-5">IKATAN BIDAN INDONESIA</h2>
          <h3 class="display-1 fs-25 text-white mb-7">Pengurus Daerah Nusa Tenggara Barat</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="overflow-hidden">
      <div class="divider text-white mx-n2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
          <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
        </svg>
      </div>
    </div>
    <!-- /.overflow-hidden -->
  </div>
  <!-- /.wrapper -->
</section>

<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gy-6">
      <div class="col-md-6 col-lg-4">
        <div class="widget">
          <h3 class="widget-title mb-3">Berita Terbaru</h3>
          @foreach ($berita as $key => $row)
            @if ($key == 0)
              <article>
                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                      src="{{ $row->gambar }}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">Read More</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <div class="post-category text-line">
                    <a href="#" class="hover" rel="category">{{ $row->kategori->nama }}</a>
                  </div>
                  <!-- /.post-category -->
                  <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                      href="/berita/{{ $row->getKey() }}">{{ \Illuminate\Support\Str::words($row->judul, 3, '....') }}</a>
                  </h2>
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
                  <figure class="rounded"><a href="/berita/{{ $row->getKey() }}"><img src="{{ $row->gambar }}"
                        alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-0"> <a class="link-dark"
                        href="/berita/{{ $row->getKey() }}">{!! \Illuminate\Support\Str::words($row->judul, 3, '....') !!}</a> </h6>
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
      <div class="col-md-6 col-lg-4">
        <div class="widget">
          <h3 class="widget-title mb-3">Kegiatan Terbaru</h3>
          @foreach ($kegiatan as $key => $row)
            @if ($key == 0)
              <article>
                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                      src="{{ $row->gambar }}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">Read More</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <div class="post-category text-line">
                    <a href="#" class="hover" rel="category">{{ $row->kategori->nama }}</a>
                  </div>
                  <!-- /.post-category -->
                  <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                      href="/kegiatan/{{ $row->getKey() }}">{{ \Illuminate\Support\Str::words($row->judul, 3, '....') }}</a>
                  </h2>
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
                  <figure class="rounded"><a href="/kegiatan/{{ $row->getKey() }}"><img src="{{ $row->gambar }}"
                        alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-0"> <a class="link-dark"
                        href="/kegiatan/{{ $row->getKey() }}">{!! \Illuminate\Support\Str::words($row->judul, 3, '....') !!}</a> </h6>
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
      <div class="col-md-6 col-lg-4">
        <div class="widget">
          <h3 class="widget-title mb-3 text-danger">Pengumuman Terbaru</h3>
          @foreach ($pengumuman as $key => $row)
            @if ($key == 0)
              <article>
                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                      src="{{ $row->gambar }}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">Read More</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <div class="post-category text-line">
                    <a href="#" class="hover" rel="category">{{ $row->kategori->nama }}</a>
                  </div>
                  <!-- /.post-category -->
                  <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                      href="/pengumuman/{{ $row->getKey() }}">{{ \Illuminate\Support\Str::words($row->judul, 3, '....') }}</a>
                  </h2>
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
                  <figure class="rounded"><a href="/pengumuman/{{ $row->getKey() }}"><img src="{{ $row->gambar }}"
                        alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-0"> <a class="link-dark"
                        href="/pengumuman/{{ $row->getKey() }}">{!! \Illuminate\Support\Str::words($row->judul, 3, '....') !!}</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i
                          class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($row->updated_at)->format('d M Y') }}</span>
                      </li>
                      <li class="post-comments"><a href="#"><i
                            class="uil uil-eye"></i>{{ $row->hit_count }}</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
