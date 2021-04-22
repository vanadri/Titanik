<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
class KategoriController extends Controller
{
     public function index()
    {
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		$kategoris = Kategori::all();
        return view('admin.kategori', compact('kategoris'));
		}
    }
	
	public function create(Request $request)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		$request->session()->put('cek','TambahKategori');
		return view('admin.kategoriTambah');
		}
	}
	
	public function store(Request $request)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		$request->validate([
				'nama_kategori' => 'required'
		]);
		Kategori::create($request->all());
		return redirect(url('admin-kategori'))->with('status','Data Kategori Berhasil Ditambahkan');
		}
	}
	
	public function edit(Request $request,Kategori $kategoris)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		$request->session()->put('cek','Edit');
		return view('admin.kategoriTambah', compact('kategoris'));
		}
	}
	
	public function update (Request $request, Kategori $kategoris)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		Kategori::where('id', $kategoris->id)
				->update([
				'nama_kategori' => $request->nama_kategori
				]);
		return redirect(url('admin-kategori'))->with('status','Data Kategori Berhasil Diganti');
		}
	}
	public function destroy(Kategori $kategoris)
	{
		if (session('login') != '1'){
			return redirect(url('login'))->with('alert','Anda belum login, silahkan login terlebih dahulu');
		}
		else{
		Kategori::destroy($kategoris->id);
		return redirect(url('admin-kategori'))->with('status','Data Kategori Berhasil Dihapus');
		}
	}
}
	
