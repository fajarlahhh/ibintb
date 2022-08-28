<div>

  <!-- /header -->
  <section class="wrapper bg-soft-primary">
    <div class="container py-12 py-md-16 text-center">
      <div class="row">
        <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
          <h1 class="display-1 mb-3">Kegiatan</h1>
          <p class="lead px-lg-5 px-xxl-8 mb-1">Anda dapat melihat berbagai kegiatan kami di sini</p>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12">
        <div class="col-lg-8">
          <div class="blog classic-view">
            @foreach ($data as $key => $row)
              <article class="post">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a
                      href="/kegiatan/{{ $row->getKey() }}"><img src="{{ asset($row->gambar) }}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Selengkapnya</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">{{ $row->kategori->nama }}</a>
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                          href="/kegiatan/{{ $row->getKey() }}">{{ $row->judul }}</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      @php echo \Illuminate\Support\Str::words($row->isi, 50, '....') @endphp
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i
                          class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($row->updated_at)->format('d M Y') }}</span>
                      </li>
                      <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Admin</span></a>
                      </li>
                      <li class="post-likes ms-auto"><a href="#"><i
                            class="uil uil-eye"></i>{{ $row->hit_count }}</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
            @endforeach
          </div>
          {{ $data->links() }}
        </div>
        <!-- /column -->
        <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
          <div class="widget">
            <h4 class="widget-title mb-3">Kegiatan Terpopuler</h4>
            <ul class="image-list">
              @foreach ($terpopuler as $key => $row)
                <li>
                  <figure class="rounded"><a href="/kegiatan/{{ $row->getKey() }}"><img src="{{ asset($row->gambar) }}"
                        alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-0"> <a class="link-dark" href="/kegiatan/{{ $row->getKey() }}">
                        @php echo \Illuminate\Support\Str::words($row->judul, 3, '....'); @endphp</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i
                          class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($row->updated_at)->format('d M Y') }}</span>
                      </li>
                      <li class="post-comments"><a href="#"><i class="uil uil-eye"></i>{{ $row->hit_count }}</a>
                      </li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="widget">
            <h4 class="widget-title mb-3">Kategori</h4>
            <ul class="unordered-list bullet-primary text-reset">
              @foreach ($dataKategori as $row)
                <li><a href="/kegiatan?kategori={{ $row->getKey() }}">{{ $row->nama }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="widget">
            <h4 class="widget-title mb-3">Arsip</h4>
            <ul class="unordered-list bullet-primary text-reset">
              @foreach ($dataArsip as $row)
                <li><a
                    href="/kegiatan?arsip={{ $row->tanggal }}">{{ \Carbon\Carbon::parse($row->tanggal)->format('F Y') }}</a>
                </li>
              @endforeach
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
</div>
