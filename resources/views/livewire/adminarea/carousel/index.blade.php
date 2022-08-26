<div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Carousel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Carousel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header form-inline">
            <div class="row w-100">
              <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12">
                <a href="/admin-area/carousel/tambah" class="btn btn-primary">Tambah</a>
              </div>
              <div class="col-md-8 col-lg-8 col-xl-8 col-xs-12 text-right">
                <input type="text" class="form-control" placeholder="Pencarian" wire:model.lazy="cari">
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Keterangan</th>
                  <th>Gambar</th>
                  <th class="width-10"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $i => $row)
                  <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td><img src="{{ asset($row->gambar) }}" style="height: 100px"></td>
                    <td class="text-right">
                      <div class="btn-group btn-group-sm" role="group">
                        @if ($key === $row->getKey())
                          <button wire:click="hapus" class="btn btn-danger">Ya, Hapus</button>
                          <button wire:click="setKey" class="btn btn-success">Batal</button>
                        @else
                          <a href="/admin-area/carousel/edit/{{ $row->getKey() }}" class="btn btn-info"><i
                              class="fas fa-sm fa-pencil-alt"></i></a>
                          <button wire:click="setKey({{ $row->getKey() }})" class="btn btn-danger"><i
                              class="fas fa-sm fa-trash-alt"></i></button>
                        @endif
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <x-alert />
      </div>
    </section>
  </div>

</div>
