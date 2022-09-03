<div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Agenda</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Agenda</li>
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
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" class="form-control" wire:model.defer="lokasi">
                                @error('lokasi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#datetimepicker" wire:model.defer="waktu" readonly />
                                    <div class="input-group-append" data-target="#datetimepicker"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                @error('waktu')
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
            $('#datetimepicker').datetimepicker({
                format: 'YYYY-MM-DD hh:mm:ss',
                ignoreReadonly: true,
                icons: {
                    time: 'far fa-clock'
                }
            })
            $("#datetimepicker").on("change.datetimepicker", ({
                date,
                oldDate
            }) => {
                window.livewire.emit('set:setwaktu', date.format("YYYY-MM-DD HH:mm:ss"));
            })
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
