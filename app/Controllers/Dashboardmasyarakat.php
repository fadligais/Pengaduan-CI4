<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardmasyarakat extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="jumbotron mt-5">
		<h1>Hai, '.session()->get('username').'</h1>
		<p>Lakukan Pengaduan Terhadap Bencana di Halaman ini dengan klik Pengaduan di Atas!
		Lakukan Pengaduan Dengan Melampirkan Foto terkait</p>
	  </div>';
		return view ('Masyarakat/Dashboard', $data);
	}
}
