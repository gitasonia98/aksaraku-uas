<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Session::has('login')) {
            return view('user/dashboard');
        }
        return redirect('login');
    }

    public function daftarbuku()
    {   $data=DB::table('buku')->get();
        return view('user/daftarbuku' )->with('data',$data);
}
    public function notifications()
    {  $data=DB::table('notif')->get();
        return view('user/notifications');
    }

    public function script()
    {   $data=DB::table('script')->get();
        return view('user/script')->with('data', $data);
    }

    public function user()
    {   $data=DB::table('data_user')->where('id_user',Session::get('user')[0]->id_user)->get();
        return view('user/user')->with('data',$data);
    }

    public function editprofil(Request $request)
    {
        $edit = DB::table('data_user')->where('id_user','5')
        ->update([
            'pekerjaan'=>$request->pekerjaan,
            'nama_user'=>$request->username,
            'email_user'=>$request->email,
            'rekening_user'=>$request->rekening,
            'alamat_user'=>$request->alamat,
            'bio_user'=>$request->deskripsi,
        ]);
        return redirect ('profiluser');
    }

    public function simpanproduk(Request $request)
    {
        $simpan = DB::table('buku')->insert([
            'nama_lengkap'=>$request->nama_lengkap,
            'judul_buku'=>$request->judul_buku,
            'kategori_buku'=>$request->category_id,
            'size_buku'=>$request->papersize,
            'script_buku'=>$request->naskah,
            'harga_buku'=>$request->harga_buku,
            'foto_produk'=>$request->cover,
            'deskripsi_buku'=>$request->deskripsi_buku

            
            // 'harga_buku'=>$request->harga_buku,
            // 'foto_produk'=>$request->foto_produk,
            // 'deskripsi_buku'=>$request->deskripsi_buku,
            // 'order_buku'=>$request->order_buku,
            // 'total_pembelian'=>$request->total_pembelian,
            // 'royalti_buku'=>$request->royalti_buku,

        ]);

        return redirect('daftarbuku');
}
}
