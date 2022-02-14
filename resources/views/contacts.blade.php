@extends('layout\main')

@section('container')
<div class="title-top-mb-5">
      <h2 class="fw-bold">Contact Us</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="InputName" placeholder="nama" name="nama">
    <label for="InputName">nama</label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="inputemailt" placeholder="email" name="email">
    <label for="inputemail" class="form-label">email</label>
  </div>
  <div class="form-floating">
    <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea">Pesan</label>
  </div>
  <button type="submit" class="btn btn-primary">kirim</button>
</form>

@endsection