<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
{
	public function __construct()
    {
        if(!session('login')){
            return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
        }
    }
   public function index()
    {
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		$produks = Produk::all();
        return view('admin.produk', compact('produks'));
		}
    }
	public function create(Request $request)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		$request->session()->put('cek','Tambah');
		return view('admin.produkTambah');
		}
	}
	
	public function store(Request $request)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		$request->validate([
				'nama_produk' => 'required',
				'harga_produk'=> 'required|numeric',
				'id_kategori'=> 'required',
				'des_produk'=> 'required',
				'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
		]);
		$file = $request->file('file');
 
		$nama_file = time().$request->file->extension();
		Produk::create([
			'nama_produk' => $request->nama_produk,
			'harga_produk' => $request->harga_produk,
			'id_kategori' => $request->id_kategori,
			'des_produk' => $request->des_produk,
			'gambar' => $nama_file
		]); 
      	        // isi dengan nama folder tempat kemana file diupload
		$file->move(public_path('uploads'),$nama_file);
		return redirect(url('admin-produk'))->with('status','Data Produk Berhasil Ditambahkan');
		}
	}
	
	public function edit(Request $request,Produk $produks)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		$request->session()->put('cek','Edit');
		return view('admin.produkTambah', compact('produks'))->with('form','Edit');
		}
	}
	
	public function update (Request $request, Produk $produks)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		$request->validate([
				'nama_produk' => 'required',
				'harga_produk'=> 'required|numeric',
				'id_kategori'=> 'required',
				'des_produk'=> 'required',
				'file' => 'file|image|mimes:jpeg,png,jpg|max:2048'
		]);
		if ($request->file == null){
			Produk::where('id', $produks->id)
				->update([
				'nama_produk' => $request->nama_produk,
				'harga_produk' => $request->harga_produk,
				'id_kategori' => $request->id_kategori,
				'des_produk' => $request->des_produk,
				]);
		}
		else{
		$file = $request->file('file');
		$nama_file = time().$request->file->extension();
		Produk::where('id', $produks->id)
				->update([
				'nama_produk' => $request->nama_produk,
				'harga_produk' => $request->harga_produk,
				'id_kategori' => $request->id_kategori,
				'des_produk' => $request->des_produk,
				'gambar' => $nama_file
				]);
		$file->move(public_path('uploads'),$nama_file);
		}
		return redirect(url('admin-produk'))->with('status','Data Produk Berhasil Diganti');
		}
	}
	public function destroy(Produk $produks)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		Produk::destroy($produks->id);
		return redirect(url('admin-produk'))->with('status','Data Produk Berhasil Dihapus');
		}
	}
	
}
