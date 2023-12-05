<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MData;

class Home extends Controller
{
    public function index()
    {
        $dataList = MData::orderBy('created_at', 'desc')->get();

        return view('list_data', compact('dataList'));
    }
}
