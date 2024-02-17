<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function all()
    {
        $kelas = Kelas::paginate(10);
        
        return view('kelas.all', [
            'title' => 'class',
            'kelas' => $kelas,
            'page' => $kelas->currentPage(),
        ]);
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.detail', [
            'title' => "detail-class",
            "class" => $kelas,
        ]);
    }
}
