<?php

namespace App\Http\Controllers\Mhs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs=Mahasiswa::all();
       return view('Mhs.mhs',compact('mhs'));
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
        request()->validate([
        'nama'=>'required',
        'progdi'=>'required',
        'gender'=>'required',
        'alamat'=>'required',

        ],
    [
    'nama.required'=>'Wajib Di isi',
    'progdi.required'=>'Wajib Di isi',
    'gender.required'=>'Wajib Di isi',
    'alamat.required'=>'Wajib Di isi',


    ]);

        Mahasiswa::create(request()->all());
        return redirect('/mahasiswa')->with('pesan','Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data=Mahasiswa::find($id);
        return view('Mhs.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
       request()->validate([
        'nama'=>'required',
        'progdi'=>'required',
        'gender'=>'required',
        'alamat'=>'required',

        ],
    [
    'nama.required'=>'Wajib Di isi',
    'progdi.required'=>'Wajib Di isi',
    'gender.required'=>'Wajib Di isi',
    'alamat.required'=>'Wajib Di isi',


    ]);

        Mahasiswa::find($id)->update(request()->all());
        return redirect('/mahasiswa')->with('pesan','Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data=Mahasiswa::find($id);
       $data->delete();
       return redirect('/mahasiswa')->with('pesan','Berhasil Di Hapus');

    }
}
