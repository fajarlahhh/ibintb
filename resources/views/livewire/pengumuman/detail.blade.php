<div>
  <!-- /header -->
  <section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
      <div class="row">
        <div class="col-md-10 col-xl-8 mx-auto">
          <div class="post-header">
            <!-- /.post-category -->
            <h1 class="display-1 mb-4">{{ $data->judul }}</h1>
            <ul class="post-meta mb-5">
              <li class="post-date"><i
                  class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($data->updated_at)->format('d M Y') }}</span>
              </li>
              <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Admin</span></a></li>
            </ul>
            <!-- /.post-meta -->
          </div>
          <!-- /.post-header -->
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
          <div class="blog single mt-n17">
            <div class="card">
              <figure class="card-img-top"><img src="{{ asset($data->gambar) }}" alt="" /></figure>
              <div class="card-body">
                <div class="classic-view">
                  <article class="post">
                    <div class="post-content mb-5">
                      @php echo $data->isi @endphp
                    </div>
                  </article>
                  <!-- /.post -->
                </div>
                <!-- /.classic-view -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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
