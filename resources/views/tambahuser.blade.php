@extends('layouts/app')
@section('content')
<h1>Tambah Data User</h1>

	<div class="container" style="padding: 30px">
		<form method="POST" enctype="multipart/form-data" action="{{url('datauser')}}">
			{{csrf_field()}}
	<div class="from-group">
		<div class="from-group">
		<label>Nama</label>
		<input type="varchar" class="form-control" name="nama_user">
	</div>

		<label>email</label>
		<input type="varchar" class="form-control" name="email_user">
	</div>

	<div class="form-group">
		<label>No Telepon</label>
		<input type="varchar" class="form-control" name="telepon_user">
	</div>
	<div class="form-group">
		<label>Pekerjaan</label>
		<input type="varchar" class="form-control" name="pekerjaan_user">
	</div>
	<div class="form-group">
		<label>No. Rekening</label>
		<input type="varchar" class="form-control" name="rekening_user">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="varchar" class="form-control" name="alamat_user">
	</div>
	<div class="form-group">
		<label>Bio</label>
		<input type="text" class="form-control" name="bio_user">
	</div>
	<div class="from-group">
		<label>password</label>
		<input type="varchar" class="form-control" name="password_user">
	</div>

</div>
<button class="btn btn-primary" name="save">Simpan</button>
</form>

@endsection