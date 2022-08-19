<div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ganti Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ganti Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Form</h4>
          </div>
          <div class="card-body">
            <form wire:submit.prevent="submit">
              <div class="form-group">
                <label for="passwordlama">Password Lama</label>
                <input type="password" class="form-control" wire:model.defer="passwordLama" id="passwordlama">
                @error('passwordLama')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="passwordbaru">Password Baru</label>
                <input type="password" class="form-control" wire:model.defer="passwordBaru" id="passwordbaru">
                @error('passwordBaru')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <input type="submit" value="Simpan" class="btn btn-success m-r-3" />
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <x-alert />
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>
