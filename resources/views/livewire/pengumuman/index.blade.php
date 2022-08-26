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
                      href="./blog-post.html"><img src="./assets/img/photos/b1.jpg" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Teamwork</a>
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="./blog-post.html">Amet Dolor Bibendum
                          Parturient Cursus</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                        elit.
                        Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue.
                        Praesent
                        commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at
                        lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus
                        commodo, tortor mauris condimentum nibh. Cras mattis consectetur purus sit amet fermentum. Sed
                        posuere consectetur.</p>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>5 Jul 2022</span></li>
                      <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a>
                      </li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span>
                            Comments</span></a></li>
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
            @endforeach
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
