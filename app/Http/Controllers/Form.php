<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MData;

class Form extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= [
            'type' => 'Input'
        ];
        return view('form', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'hobi' => $request->input('hobi')
        ];
    
        MData::create($data);
    
        return redirect('/formreq')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'type' => 'Edit',
        ];
        $editData = MData::find($id);
    
        return view('form', compact('data', 'editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'hobi' => $request->input('hobi')
        ];
    
        MData::find($id)->create($data);
    
        return redirect('/')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MData::find($id)->delete();
        return redirect('/')->with('success', 'Data berhasil disimpan');
    }
}
