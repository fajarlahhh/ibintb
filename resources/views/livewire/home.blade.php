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

<section class="wrapper bg-light">
  <div class="container pb-16 pt-3">
    <div class="row text-center ">
      <div class="col-md-10 col-lg-9 col-xxl-8 mx-auto">
        <h2 class="fs-20 text-uppercase text-muted mb-3">Menjadikan organisasi profesi yang handal dalam Mewujudkan
          bidan profesional berstandar global</h2>
      </div>
      <hr>
      <!-- /column -->
    </div>
    <div class="row gy-6">
      <div class="col-md-6 col-lg-4">
        <div class="widget">
          <h3 class="widget-title mb-3">Berita Terbaru</h3>
          @foreach ($berita as $key => $row)
            @if ($key == 0)
              <article>
                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                      src="{{ asset($row->gambar) }}" style="height: 250px !important" alt="" /></a>
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
                  <figure class="rounded"><a href="/berita/{{ $row->getKey() }}"><img src="{{ asset($row->gambar) }}"
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
                      src="{{ asset($row->gambar) }}" style="height: 250px !important" alt="" /></a>
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
                  <figure class="rounded"><a href="/kegiatan/{{ $row->getKey() }}"><img
                        src="{{ asset($row->gambar) }}" alt="" /></a></figure>
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
                      src="{{ asset($row->gambar) }}" style="height: 250px !important" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">Read More</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <!-- /.post-category -->
                  <div class="post-category text-line">
                    <a href="#" class="hover" rel="category">Pengumuman</a>
                  </div>
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
                  <figure class="rounded"><a href="/pengumuman/{{ $row->getKey() }}"><img
                        src="{{ asset($row->gambar) }}" alt="" /></a></figure>
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
