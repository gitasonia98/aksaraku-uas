<!--belum ada link detail -->
@extends('layouts/app')

@section('content')
<div class="container" style="padding::30px">
<h1>Data Pembelian</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama pembeli</th>
            <th>Tanggal</th>
            <th>Total</th>
           
        </tr>
    </thead>
    <tbody>

    	@php $i=1; @endphp
    	@foreach($data as $value)
    	<tr>
    		<td>{{$i}}</td>
    		<td>{{$value->nama_pembeli}}</td>
    		<td>{{$value->tanggal_pembelian}}</td>
    		<td>{{$value->total_pembelian}}</td>
		<!-- <td>
    		<a href ="index.php?halaman=detail&id={{$value->id_pembelian}}" class="btn-danger btn">detail</a>
    	</td> -->
    	</tr>
    	

    	@php $i++; @endphp

    	@endforeach

    	
    </tbody>
</table>
    </div>
@endsection