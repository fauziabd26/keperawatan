<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function __construct()
    {
        $this->Satuan = new Satuan();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satuan = Satuan::all();
        return view('satuan.index', compact('satuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('satuan.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Request()->validate([
            'id'            => 'required|unique:satuans,id|max:255',
            'name'          => 'required',
            ],[
                'id.required'       =>'id tidak boleh kosong',
                'id.unique'         =>'id sudah terpakai',
                'id.max'            =>'id max 255 karakter',
                'name.required'     =>'Nama Satuan tidak boleh kosong',
            ]);
            $datas = [
                'id'            => Request()->id,
                'name'          => Request()->name,
            ];
            $this->Satuan->addData($datas);
            return redirect()->route('index_satuan')->with('pesan','Data Berhasil Disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function show(satuan $satuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $satuan = Satuan::findOrFail($id);
        return view('satuan.edit',compact('satuan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, satuan $satuan, $id)
    {
        $satuan = Satuan::find($id);

        $satuan->id     = $request->id;
        $satuan->name   = $request->name;
        $satuan->save();
        return redirect('/satuan')->with('pesan', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(satuan $satuan, $id)
    {
        try {
            $satuan = Satuan::find($id);
            $satuan->delete();
            return redirect('/satuan')->with('delete', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect('/satuan')->withErrors('Data gagal Dihapus');
        }
    }
}
