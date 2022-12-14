<div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengumuman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Pengumuman</li>
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
                <label>Judul</label>
                <input type="text" class="form-control" wire:model.defer="judul">
                @error('judul')
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
              <div class="form-group">
                <label>Isi</label>
                <div wire:ignore>
                  <textarea id="summernote">{{ $isi }}</textarea>
                </div>
                @error('isi')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
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
  @push('scripts')
    <script>
      $(function() {
        $('#summernote').summernote({
          tabsize: 2,
          height: 400,
          callbacks: {
            onBlur: function() {
              window.livewire.emit('set:setisi', this.value);
            }
          }
        })
      })
    </script>
  @endpush
</div>
