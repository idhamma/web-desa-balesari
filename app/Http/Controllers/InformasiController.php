<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function show($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('informasi.show', compact('informasi'));
    }
}
