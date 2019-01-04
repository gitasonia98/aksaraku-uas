@extends('layouts/app')
@section('content')

<div class="container" style="padding: 30px;">
		<h2>Data Buku</h2>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Penulis</th>
				<th>Judul Buku</th>
				<th>Kategori</th>
				<th>Size (cm)</th>
				<th>Sript  (pdf)</th>
				<th>Harga Buku (Rp)</th>
				<th>Deskripsi</th>
				<th>Foto Buku</th> 
				<!-- <th>Order</th>
				<th>Total Pembelian</th>
				<th>Royalti</th>
				-->
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($data as $value)

			<tr>
				<td>{{$i}}</td>
				<td>{{$value->nama_lengkap}}</td>
				<td>{{$value->judul_buku}}</td>
				<td>{{$value->kategori_buku}}</td>
				<td>{{$value->size_buku}}</td>
				<td>{{$value->script_buku}}</td>
				<td>{{$value->harga_buku}}</td>
				<td>{{$value->deskripsi_buku}}</td>
				<!-- <td>{{$value->order_buku}}</td>
				<td>{{$value->total_pembelian}}</td>
				<td>{{$value->royalti_buku}}</td>
 -->
				<td>
					<public /  img src="../foto_produk/{{$value->foto_produk}}"width="100">

				</td>
				<td>
					<a href="{{ url('deletebuku' ,$value->id_buku) }}" class="btn-danger btn">hapus</a>
					<a href="{{ url('updatebuku',$value->id_buku) }}" class="btn btn-warning">ubah</a>
				</td>
			</tr>

			@php $i++; @endphp
			@endforeach

		</tbody>
	</table>
	<a href="{{url('tambahproduk')}}" class="btn btn-primary">Tambah Buku</a>
</div>
@endsection