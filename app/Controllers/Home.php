<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}

	public function daftarMatkul()
	{
		return view('daftarmatkul/index');
	}
	public function profil()
	{
		return view('profil/index');
	}
	public function fasilitas()
	{
		return view('fasilitas/index');
	}
	public function kontak()
	{
		return view('kontak/index');
	}
}
