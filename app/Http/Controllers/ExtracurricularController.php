<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function dataEkskul()
    {
        return view('extracurricular', [
            'title' => 'extracurricular',
            'extracurricular' => Extracurricular::all(),
        ]);
    }
    public function dataEkskulDashboard()
    {
        return view('dashboard.extracurricular', [
            'title' => 'Extracurricular',
            'extracurricular' => Extracurricular::all(),
        ]);
    }
}
