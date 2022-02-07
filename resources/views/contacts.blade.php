@extends('layout\main')

@section('container')
<form>
<div class="title-top-mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="InputName" placeholder="nama">
  <label for="InputName">nama</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="inputemailt" placeholder="email">
  <label for="inputemail" class="form-label">email</label>
</div>
<div class="form-floating">
  <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea" style="height: 100px"></textarea>
  <label for="floatingTextarea">Pesan</label>
</div>
<button type="button" class="btn btn-primary">submit</button>
</form>

@endsection