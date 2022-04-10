<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
<<<<<<< HEAD
    public function __construct()
    {
        $this->Kategori = new Kategori();
    }
=======
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('kategori.add');
=======
        //
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        Request()->validate([
            'id'            => 'required|unique:kategoris,id|max:255',
            'name'          => 'required',
            ],[
                'id.required'       =>'id tidak boleh kosong',
                'id.unique'         =>'id sudah terpakai',
                'id.max'            =>'id max 255 karakter',
                'name.required'     =>'Nama Kategori tidak boleh kosong',
            ]);
            $datas = [
                'id'            => Request()->id,
                'name'          => Request()->name,
            ];
            $this->Kategori->addData($datas);
            return redirect()->route('index_kategori')->with('pesan','Data Berhasil Disimpan');
=======
        //
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit',compact('kategori'));
=======
    public function edit(kategori $kategori)
    {
        //
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);

        $kategori->name = $request->name;
        $kategori->save();
        return redirect('/kategori')->with('pesan', 'Data berhasil diubah');
=======
    public function update(Request $request, kategori $kategori)
    {
        //
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy($id)
    {
        try {
            $kategori = Kategori::find($id);
            $kategori->delete();
            return redirect('/kategori')->with('delete', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect('/kategori')->withErrors('Data gagal Dihapus');
        }
=======
    public function destroy(kategori $kategori)
    {
        //
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
    }
}
