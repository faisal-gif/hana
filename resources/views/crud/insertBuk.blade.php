@extends('layouts.lay')
@section('title', 'buku') 
@section('url', '/tambah_buku')
@section('lnk', 'Tambah Buku')  
@section('content')

<div class="container">

<form  action="/addBuku" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="exampleFormControlFile1">Cover</label>
    <input type="file" class="form-control-file" name="img">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
      <option>Select item</option>
      @foreach ($items as $key )
      <option value="{{ $key->id_kategori }}" ? 'selected' : '' }}> 
        {{ $key->nama }} 
        </option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title </label>
    <input type="text" class="form-control" name="judul" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" name="isi" rows="3"></textarea>
  </div>
  <input type="submit" class="btn btn-success" value="SAVE">
</form>
</div>
@endsection