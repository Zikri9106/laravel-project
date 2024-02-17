<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class DashboardKelasController extends Controller
{
    public function all()
    {
        $kelas = Kelas::paginate(10);

        return view('dashboard.kelas.all', [
            'title' => 'Class',
            'kelas' => $kelas,
            'page' => $kelas->currentPage(),
        ]);
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('dashboard.kelas.detail', [
            'title' => "detail-class",
            "class" => $kelas,
        ]);
    }

    public function create(Kelas $kelas)
    {
        return view('dashboard.kelas.create', [
            "title" => "create-new-class",
            "class" => $kelas,
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        $result = Kelas::create($validateData);

        if ($result) {
            return redirect('/dashboard/kelas/all')->with('success', 'Data kelas berhasil ditambahkan !');
        }
    }

    public function destroy($kelas)
    {
        $result = Kelas::where('id', $kelas)->delete();

        if ($result) {
            return redirect()->to('/dashboard/kelas/all')->with('success', 'Data berhasil dihapus !');
        }
    }

    public function edit(Kelas $kelas)
    {
        return view('dashboard.kelas.edit', [
            "title" => "edit-class",
            "class" => $kelas,
        ]);
    }

    public function update(Request $request, Kelas $kelas)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
        ]);
        $result = Kelas::where('id', $kelas->id)->update($validateData);
        if ($result) {
            return redirect('/dashboard/kelas/all')->with('success', 'Data siswa berhasil di ubah !');
        }
    }
}
