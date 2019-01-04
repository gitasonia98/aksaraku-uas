<!--masih salah nge link nya page 31-->
@extends('layouts/app')
@section('content')
<div class="container" style="padding::30px">
<h1>Data Pengiriman</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Tanggal Pengiriman</th>
			<th>Kirim Kepada </th>
			<th>Subjek </th>
			<th>Keterangan</th>
			<!-- <th>Aksi</th> -->
		</tr>
	</thead>
<tbody>
	@php $i=1; @endphp
	@foreach($data as $value)
	<tr>
	<td>{{$i}}</td>
	<td>{{$value->tanggal_pengiriman}}</td>
	<td>{{$value->kirim_kepada}}</td>
	<td>{{$value->subjek}}</td>
	<td>{{$value->keterangan}}</td>
</tr>
@php $i++; @endphp
@endforeach
</tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Notif</a>
</div>

@endsection