<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jawaban;

class JawabanController extends Controller
{
    public function index()
    {
        $jawaban = jawaban::latest()->paginate(10);
        return view('jawaban.index', compact('jawaban'))
                    ->with('i', (request()->input('page',1) -1)*5);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jawaban.create');
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
            'isi' => 'required',
            'date_created' => 'required',
            'date_updated' => 'required'
        ]);

        jawaban::create($request->all());
        return redirect()->route('jawaban.index')
                        ->with('Succes','jawaban telah tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jawaban = jawaban::find($id);
        return view('jawaban.detail', compact('jawaban'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jawaban = jawaban::find($id);
        return view('jawaban.edit', compact('jawaban'));
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
            'isi' => 'required',
            'date_created' => 'required',
            'date_updated' => 'required'
        ]);

        $jawaban = jawaban::find($id);
        $jawaban->isi = $request->get('isi');
        $jawaban->date_created = $request->get('date_created');
        $jawaban->date_updated = $request->get('date_updated');
        $jawaban->save();
        return redirect()->route('jawaban.index')
                        ->with('Succes', 'Data jawaban Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jawaban = jawaban::find($id);
        $jawaban->delete();
        return redirect()->route('jawaban.index')
                        ->with('Succes','Berhasil Menghapus Data');
    }}
