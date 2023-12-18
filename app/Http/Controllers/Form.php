<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

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
            'brand' => $request->input('brand'),
            'stock' => $request->input('stock'),
            'status' => $request->input('status'),
            'buy_price' => $request->input('buy_price'),
            'sale_price' => $request->input('sale_price'),
            'comment' => $request->input('comment')
        ];
    
        Products::create($data);
    
        return redirect('/products/formreq')->with('success', 'Data berhasil disimpan');
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
        $editData = Products::where('products_id', $id)->get();
    
        return view('form', compact('data', 'editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama' => $request->input('nama'),
            'brand' => $request->input('brand'),
            'stock' => $request->input('stock'),
            'status' => $request->input('status'),
            'buy_price' => $request->input('buy_price'),
            'sale_price' => $request->input('sale_price'),
            'comment' => $request->input('comment')
        ];
    
        Products::where('products_id', $id)->update($data);
    
        return redirect('/products')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Products::where('products_id', $id)->delete();
        return redirect('/products')->with('success', 'Data berhasil dihapus');
    }
}
