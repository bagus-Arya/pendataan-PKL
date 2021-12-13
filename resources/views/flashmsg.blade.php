@if ($message = Session::get('validasi'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('hapus'))
<div class="alert alert-warning alert-block">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>{{ $message }}</strong>
</div>
@endif
