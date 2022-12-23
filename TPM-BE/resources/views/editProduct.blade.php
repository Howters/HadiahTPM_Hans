@extends('template')

@section('title','edit product')

@section ('body')

<form action="/update-product/{{$product->id}}" method = "POST"  enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Toko</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NamaMakanan"
      value = "{{$product->NamaMakanan}}">
      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Lokasi Kota Toko</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "AsalMakanan" value = "{{$product->AsalMakanan}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Pembukaan Toko</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name = "TanggalExpired" value = "{{$product->TanggalExpired}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jam Buka Toko</label>
        <input type="time" class="form-control" id="exampleInputPassword1" name = "JamBuka" value = "{{$product->JamBuka}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jam Tutup Toko</label>
        <input type="time" class="form-control" id="exampleInputPassword1" name = "JamTutup" value = "{{$product->JamTutup}}">
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jumlah Produk yang Dijual</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name = "Kuantitas" value = "{{$product->Kuantitas}}">
      </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Gambar</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="Image" value= "{{old('Image')}}">
    @error('Image')is-invalid
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection