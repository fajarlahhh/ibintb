<div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kegiatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kegiatan</li>
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
                <a href="/admin-area/kegiatan/tambah" class="btn btn-primary">Tambah</a>
              </div>
              <div class="col-md-8 col-lg-8 col-xl-8 col-xs-12 text-right">
                <select class="form-control" wire:model="status">
                  <option value="1">Exist</option>
                  <option value="2">Deleted</option>
                </select>
                <input type="text" class="form-control" placeholder="Pencarian" wire:model.lazy="cari">
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Tanggal Posting</th>
                  <th class="width-10"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $i => $row)
                  <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->kategori->nama }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td class="text-right">
                      <div class="btn-group btn-group-sm" role="group">
                        @if ($status == 2)
                          @if ($key === $row->getKey())
                            <button wire:click="restore()" class="btn btn-success">Ya, Restore</button>
                            <button wire:click="setKey()" class="btn btn-danger">Batal</button>
                          @else
                            <button wire:click="setKey({{ $row->getKey() }})" class="btn btn-secondary">Restore</button>
                          @endif
                        @else
                          @if ($key === $row->getKey())
                            <button wire:click="hapus" class="btn btn-warning">Ya, Hapus</button>
                            <button wire:click="hapusPermanen" class="btn btn-danger">Ya, Hapus Permanen</button>
                            <button wire:click="setKey" class="btn btn-success">Batal</button>
                          @else
                            <a href="/admin-area/kegiatan/edit/{{ $row->getKey() }}" class="btn btn-info"><i
                                class="fas fa-sm fa-pencil-alt"></i></a>
                            <button wire:click="setKey({{ $row->getKey() }})" class="btn btn-danger"><i
                                class="fas fa-sm fa-trash-alt"></i></button>
                          @endif
                        @endif
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            {{ $data->links() }}
          </div>
        </div>
        <x-alert />
      </div>
    </section>
  </div>

</div>
