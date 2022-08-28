<div>
  <!-- /header -->
  <section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
      <div class="row">
        <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
          <h1 class="display-1 mb-3">Download</h1>
          <p class="lead px-lg-5 px-xxl-8 mb-1">Anda dapat mendownload arsip di sini</p>
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
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width: 10px">#</th>
            <th>Nama File</th>
            <th>Tanggal Upload</th>
            <th style="width: 10px"></th>
          </tr>
          @foreach ($data as $row)
            <tr>
              <td class="align-middle">{{ ++$i }}</td>
              <td class="align-middle">{{ $row->nama }}</td>
              <td class="align-middle">{{ $row->created_at }}</td>
              <td><a href="javascript:;" wire:click="download({{ $row->getKey() }})"><img
                    src="./assets/img/icons/lineal/download.svg" class="icon-svg-xs icon-svg icon-svg-sm text-primary"
                    alt="" /></a></td>
            </tr>
          @endforeach
        </table>
      </div>
      {{ $data->links() }}
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
</div>
