@extends('user/layout')
@section('content')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Buku Saya</h4>
                                <p class="category">Kumpulan DAftar Buku Saya</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Buku</th>
                                        <th>Kategori</th>
                                        <th>Size</th>
                                        <th>Harga</th>
                                        <!-- <th>Order</th>
                                        <th>Total</th>
                                        <th>Royalti</th> -->
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
                                            <td>{{$value->harga_buku}}</td>
                                           <!--  <td>{{$value->order_buku}}</td>
                                            <td>{{$value->total_pembelian}}</td>
                                            <td>{{$value->royalti_buku}}</td> -->

                                        </tr>
                                        @php $i++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Data Transaksi</h4>
                                <p class="category">Riwayat Transaksi (Royalty) &nbsp;* Pembagian Hasil Royalti Sebesar 40% Dari Penjualan Untuk Penulis</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                        <th>Tanggal</th>
                                        <th>Name</th>
                                        <th>No Rekening</th>
                                        <th>Royalti</th>
                                        <th>Keterangan</th>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>23/01/2016</td>
                                            <td>Arif</td>
                                            <td>5128 2312 2141 6754</td>
                                            <td>30.000.000</td>
                                            <td>Done</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

@endsection