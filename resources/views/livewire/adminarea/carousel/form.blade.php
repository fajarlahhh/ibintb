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
              <li class="breadcrumb-item"><a href="#">Carousel</a></li>
              <li class="breadcrumb-item active">{{ $key ? 'Edit' : 'Tambah' }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Form</h4>
          </div>
          <div class="card-body">
            <form wire:submit.prevent="submit">
              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" wire:model.defer="keterangan">
                @error('keterangan')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="alert alert-info">
                <label>Gambar</label>
                <input class="form-control-file" type="file" wire:model="file" accept="image/jpeg,image/png"
                  autocomplete="off" />
                @error('file')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                @if ($file)
                  <div class="w-100 overflow-auto">
                    <img src="/{{ $file->temporaryUrl() }}" alt="">
                  </div>
                @endif
                @if ($data)
                  <div class="w-100 overflow-auto">
                    <img src="{{ asset($data->gambar) }}" alt="">
                  </div>
                @endif
              </div>
              <input type="submit" value="Simpan" class="btn btn-success m-r-3" />
              <a href="{{ $back }}" class="btn btn-danger">Batal</a>
            </form>
          </div>
        </div>
        <x-alert />
      </div>
    </section>
  </div>
</div>
