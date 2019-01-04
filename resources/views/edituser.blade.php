@extends('layouts/app')
@section('content')
<h1>Edit Data Member</h1>

	<div class="container" style="padding: 30px">
		@foreach($data as $value)

		<form method="POST" enctype="multipart/form-data" action="{{url('datauser')}}">
			{{csrf_field()}}
				<input type="hidden" name="id" value="{{$value->id_user}}">
	<div class="from-group">
		<div class="form-controlgroup">
		<label>Nama</label>
		<input type="varchar" class="form-control" name="nama_user" value="{{$value->nama_user}}">
	</div>

		<label>email</label>
		<input type="varchar" class="form-control" name="email_user" value="{{$value->email_user}}">
	</div>

	<div class="form-group">
		<label>No Telepon</label>
		<input type="varchar" class="form-control" name="telepon_user" value="{{$value->telepon_user}}">
	</div>
	<div class="form-group">
		<label>Pekerjaan</label>
		<input type="varchar" class="form-control" name="pekerjaan_user" value="{{$value->pekerjaan_user}}">
	</div>
	<div class="form-group">
		<label>No. Rekening</label>
		<input type="varchar" class="form-control" name="rekening_user" value="{{$value->rekening_user}}">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="varchar" class="form-control" name="alamat_user" value="{{$value->alamat_user}}">
	</div>
	<div class="from-group">
		<label>password</label>
		<input type="varchar" class="form-control" name="password_user" value="{{$value->password_user}}">
	</div>

</div>
<button class="btn btn-primary" name="save">Simpan</button>
</form>
@endforeach

@endsection