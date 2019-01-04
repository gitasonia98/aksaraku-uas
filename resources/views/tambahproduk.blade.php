@extends('layouts/app')
@section('content')
<h1>Tambah Buku </h1>
<div class="container" style="padding: 30px">
<form method="POST" enctype="multipart/form-data" action="{{url('buku')}}">
	{{csrf_field()}}
	<div class="from-group">
		<label>Nama Penulis</label>
		<input type="text" class="form-control" name="nama_lengkap">
	</div>
	<div class="from-group">
		<label>Judul Buku</label>
		<input type="text" class="form-control" name="judul_buku">
	</div>
	<div class="from-group">
		<label>Kategori</label>
		<input type="text" class="form-control" name="kategori_buku">
	</div>
	<div class="from-group">
		<label>Berat Buku (gr)</label>
		<input type="text" class="form-control" name="size_buku">
	</div>
	<div class="from-group">
		<label>Script (.pdf)</label>
		<input type="text" class="form-control" name="script_buku">
	</div>
	<div class="from-group">
		<label>Harga (Rp.)</label>
		<input type="number" class="form-control" name="harga_buku">
	</div>
	<div class ="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto_produk">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi_buku" rows="10"></textarea>
	</div>
	<div class ="form-group">
		<label>Order Buku</label>
		<input type="number" class="form-control" name="order_buku">
	</div>
	<div class ="form-group">
		<label>Total Harga Pembelian</label>
		<input type="number" class="form-control" name="total_pembelian">
	</div>
	<div class ="form-group">
		<label>Royalti Buku</label>
		<input type="text" class="form-control" name="royalti_buku">
	</div>
	


	 </div>
	

<button class="btn btn-primary" name="save">Simpan</button>
</form>

@endsection