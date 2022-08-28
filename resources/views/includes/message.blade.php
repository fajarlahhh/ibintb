@if (Session::has('danger'))
  <div class="alert alert-danger fade show">
    <span class="close" data-dismiss="alert">×</span>
    @php echo Session::get('danger') @endphp
  </div>
@endif
@if (Session::has('warning'))
  <div class="alert alert-warning fade show">
    <span class="close" data-dismiss="alert">×</span>
    @php echo Session::get('warning') @endphp
  </div>
@endif
@if (Session::has('info'))
  <div class="alert alert-info fade show">
    <span class="close" data-dismiss="alert">×</span>
    @php echo Session::get('info') @endphp
  </div>
@endif
@if (Session::has('success'))
  <div class="alert alert-success fade show">
    <span class="close" data-dismiss="alert">×</span>
    @php echo Session::get('success') @endphp
  </div>
@endif
