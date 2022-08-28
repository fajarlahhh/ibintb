<div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profil <small>Cabang</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Profil</li>
              <li class="breadcrumb-item active">Cabang</li>
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
                <label>Isi</label>
                <div wire:ignore>
                  <textarea id="summernote">{{ $isi }}</textarea>
                </div>
                @error('isi')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <input type="submit" value="Simpan" class="btn btn-success m-r-3" />
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
