<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Satuan;
use App\Models\aproval;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use DB;
use Session;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	  public function __construct()
    {
        $this->aproval = new aproval();
    }
    public function index()
    {
        $barang = Barang::join('kategoris', 'kategoris.id', '=', 'barangs.kategori_id')
        ->join('satuans', 'satuans.id', '=', 'barangs.satuan_id')
        ->get(['barangs.*', 'kategoris.name as k_name', 'satuans.name as s_name']);
        return view('Pengguna.Mahasiswa.Peminjaman.index', compact('barang'));
    }
	
	 public function indexdosen()
    {
       $data = aproval::get();
       return view('Pengguna.Dosen.index', compact('data'));
    }
	
	public function indexaproval()
    {
       $data = aproval::get();
       return view('Aproval.index', compact('data'));
    }
	
	public function indexPengembalian(){
		$data = peminjaman::get();
		return view('Pengguna.Mahasiswa.Pengembalian.index', compact('data'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        aproval::create([
			'kode_barang' => $request->k_barang,
			'nama_barang' => $request->n_barang,
			'kategori_barang' => $request->kategori_b,
			'satuan_barang' => $request->s_barang,
			'nama_peminjam' => $request->n_peminjam,
			'jumlah_peminjaman' => $request->j_peminjam,
			'tanggal_peminjaman' => $request->t_peminjaman,
			'waktu_peminjaman' => $request->w_peminjaman,
			
		]);
		Session::flash('sukses','Data Berhasil Terkirim');
		return redirect('PenggunaMahasiswa');
    }
	
	public function storedosen(Request $request)
    {
        peminjaman::create([
			'kode_barang' => $request->k_barang,
			'nama_barang' => $request->n_barang,
			'kategori_barang' => $request->kategori_b,
			'satuan_barang' => $request->s_barang,
			'nama_peminjam' => $request->n_peminjam,
			'jumlah_peminjam' => $request->j_peminjam,
			'tanggal_peminjaman' => $request->t_peminjaman,
			'waktu_peminjaman' => $request->w_peminjaman,
			'aprovals' => $request->aproval,
			
		]);
		Session::flash('sukses','Data Berhasil disetujui dan Terkirim');
		return redirect('PenggunaDosen');
    }
	
	public function storeaproval(Request $request)
    {
        peminjaman::create([
			'kode_barang' => $request->k_barang,
			'nama_barang' => $request->n_barang,
			'kategori_barang' => $request->kategori_b,
			'satuan_barang' => $request->s_barang,
			'nama_peminjam' => $request->n_peminjam,
			'jumlah_peminjam' => $request->j_peminjam,
			'tanggal_peminjaman' => $request->t_peminjaman,
			'waktu_peminjaman' => $request->w_peminjaman,
			'aprovals' => $request->aproval,
			
		]);
		Session::flash('sukses','Data Berhasil disetujui dan Terkirim');
		return redirect('PenggunaDosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        //
    }
}
