<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = pertanyaan::latest()->paginate(10);
        return view('pertanyaan.index', compact('pertanyaan'))
                    ->with('i', (request()->input('page',1) -1)*5);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'date_created' => 'required',
            'date_updated' => 'required'
        ]);

        pertanyaan::create($request->all());
        return redirect()->route('pertanyaan.index')
                        ->with('Succes','Pertanyaan telah tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = pertanyaan::find($id);
        return view('pertanyaan.detail', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = pertanyaan::find($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
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
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'date_created' => 'required',
            'date_updated' => 'required'
        ]);

        $pertanyaan = pertanyaan::find($id);
        $pertanyaan->judul = $request->get('judul');
        $pertanyaan->isi = $request->get('isi');
        $pertanyaan->date_created = $request->get('date_created');
        $pertanyaan->date_updated = $request->get('date_updated');
        $pertanyaan->save();
        return redirect()->route('pertanyaan.index')
                        ->with('Succes', 'Data pertanyaan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect()->route('pertanyaan.index')
                        ->with('Succes','Berhasil Menghapus Data');
    }
}
