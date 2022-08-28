<div>
  <!-- /header -->
  <section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
      <div class="row">
        <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
          <h1 class="display-1 mb-3">Pengumuman</h1>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="blog classic-view mt-n17">
            @foreach ($data as $key => $row)
              <article class="post">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a class="link-dark"
                      href="/pengumuman/{{ $row->getKey() }}"><img src="{{ $row->gambar }}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="/pengumuman/{{ $row->getKey() }}">Amet
                          Dolor Bibendum
                          Parturient Cursus</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      @php
                        echo $row->isi;
                      @endphp
                    </div>
                    <!-- /.post-content -->
                  </div>
                </div>
                <!-- /.card -->
              </article>
            @endforeach
          </div>
          {{ $data->links() }}
          <!-- /.blog -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
</div>
