<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;

class AksaraController extends Controller
{
    public function index()
    {
        if (Session::has('login')) {
            return view('home');
        }
        return redirect('login');
    }

    public function buku()
    {   
        $data = DB::table('buku')->get();

        // return dd($data);
    	return view('buku')->with('data', $data);
    }
    public function datauser()
    {
        $data=DB::table('data_user')->get(); //db
    	return view('datauser')->with('data', $data); //halaman link
    }
     public function send()
    {   $data=DB::table('send')->get();
    	return view('send')->with('data',$data);
    }
     public function pembelian()
    {   
        $data=DB::table('pembelian')->get();
    	return view('pembelian')->with('data', $data);
    }
    public function tambahproduk()
    {
        return view('tambahproduk');
    }
    public function tambahuser()
    {
        return view('tambahuser');
    }


    public function simpanproduk(Request $request)
    {
        $simpan = DB::table('buku')->insert([
            'nama_lengkap'=>$request->nama_lengkap,
            'judul_buku'=>$request->judul_buku,
            'kategori_buku'=>$request->kategori_buku,
            'size_buku'=>$request->size_buku,
            'script_buku'=>$request->script_buku,
            'harga_buku'=>$request->harga_buku,
            'foto_produk'=>$request->foto_produk,
            'deskripsi_buku'=>$request->deskripsi_buku,
            'order_buku'=>$request->order_buku,
            'total_pembelian'=>$request->total_pembelian,
            'royalti_buku'=>$request->royalti_buku,

        ]);

        return redirect('buku');
    }
      public function simpanuser(Request $request)
    {
        $simpan = DB::table('data_user')->insert([
            'nama_user'=>$request->nama_user,
            'email_user'=>$request->email_user,
            'telepon_user'=>$request->telepon_user,
            'pekerjaan_user'=>$request->pekerjaan_user,
            'rekening_user'=>$request->rekening_user,
            'alamat_user'=>$request->alamat_user,
            'bio_user'=>$request->bio_user,
            'password_user'=>$request->password_user,

        ]);

        return redirect('datauser');
    }


    public function deletebuku($id)
    {
      $delete= DB::table('buku')->where('id_buku', $id)->delete();
      return redirect('buku');
    }

    public function deleteuser($id)
{
    $delete=DB::table('data_user')->where('id_user', $id)->delete();
    return redirect('datauser');
}

  public function updatebuku($id) //untuk di web.php
    {
        $data = DB::table('buku')->where('id_buku', $id)->get(); //table di database

        return view('editbuku')->with('data',$data); //untuk link halaman
        // return dd($data);
    }
    
    public function updateuser($id) //untuk di web.php
    {
        $data = DB::table('data_user')->where('id_user', $id)->get(); //table di database

        return view('edituser')->with('data',$data); //untuk link halaman
        // return dd($data);
    }

}   
