<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Barang;
<<<<<<< HEAD
=======
use App\Models\aproval;
use App\Models\peminjaman;
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();
        $mahasiswa = Mahasiswa::count();
        $barang = Barang::count();
<<<<<<< HEAD

        return view('dashboard.index', compact('user','mahasiswa','barang'));
=======
		$aproval = aproval::count();
		$peminjaman = peminjaman::count();

        return view('dashboard.index', compact('user','mahasiswa','barang','peminjaman','aproval'));
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
    }
}
