<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;
class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rows = Tamu::all();
        return view('tamu.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tamu.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nim_tamu' => 'bail|required|unique:tb_bukutamu',
                'nama_tamu' => 'required'
            ],
            [
                'nim_tamu.required' => 'NIM wajib diisi',
                'nim_tamu.unique' => 'NIM sudah ada',
                'nama_tamu.required' => 'Nama wajib diisi'
            ]
        );

        Tamu::create([
            'nim_tamu' => $request->nim_tamu,
            'nama_tamu' => $request->nama_tamu,
            'instansi' => $request->instansi,
            'jurusan_tamu' => $request->jurusan_tamu,
            'tanggal_kunjung' => $request->tanggal_kunjung
        ]);

        return redirect('tamu')->with('success','Data berhasil ditambahkan lurrrrr!!!!!!........');


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
        $row = Tamu::findOrFail($id);
        return view('tamu.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nim_tamu' => 'bail|required',
                'nama_tamu' => 'required'
            ],
            [
                'nim_tamu.required' => 'NIM wajib diisi',
                
                'nama_tamu.required' => 'Nama wajib diisi'
            ]
        );
        $row = Tamu::findOrFail($id);
        $row->update([
            'nim_tamu' => $request->nim_tamu,
            'nama_tamu' => $request->nama_tamu,
            'instansi' => $request->instansi,
            'jurusan_tamu' => $request->jurusan_tamu,
            'tanggal_kunjung' => $request->tanggal_kunjung
        ]);

        return redirect('tamu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Tamu::findOrFail($id);
        $row->delete();

        return redirect('tamu');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $rows = tamu::where('nama_tamu', 'like', "%" . $keyword . "%")->paginate(5);
        return view('tamu.index', compact('rows'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
