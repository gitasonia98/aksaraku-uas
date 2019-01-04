@extends('layouts/app')
@section('content')

<div class="container" style="padding: 30px">
<h1>Data Member</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Pekerjaan</th>
			<th>No.Rekening</th>
			<th>Alamat</th>
			<th>Bio</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($data as $value)
		<tr>
			<td>{{$i}}</td>
			<td>{{$value->nama_user}}</td>
			<td>{{$value->email_user}}</td>
			<td>{{$value->telepon_user}}</td>
			<td>{{$value->pekerjaan_user}}</td>
			<td>{{$value->rekening_user}}</td>
			<td>{{$value->alamat_user}}</td>
			<td>{{$value->bio_user}}</td>


			<td>
				<a href="{{ url('deleteuser' ,$value->id_user) }}" class="btn-danger btn">hapus</a>
				<a href="{{ url('updateuser',$value->id_user) }}" class="btn btn-warning">ubah</a> <!--dari web.blade.php-->
			</td>
		</tr>
		@php $i++; @endphp
		@endforeach
</tbody>
</table>
<a href="{{url('tambahuser')}}" class="btn btn-primary">Tambah Member</a>
</div>
@endsection