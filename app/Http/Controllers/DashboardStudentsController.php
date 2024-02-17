<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardStudentsController extends Controller
{
    public function all()
    {
        $student = Student::paginate(10);

        return view('dashboard.student.all', [
            'title' => 'Students',
            'students' => $student,
            'page' => $student->currentPage(),
        ]);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('dashboard.student.detail', [
            'title' => "detail-student",
            "student" => $student,
        ]);
    }

    public function create()
    {
        return view('dashboard.student.create', [
            "title" => "create-new-data",
            "class" => Kelas::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $result = Student::create($validateData);

        if ($result) {
            return redirect('/dashboard/student/all')->with('success', 'Data siswa berhasil ditambahkan !');
        }
    }

    public function destroy($student)
    {
        $result = Student::where('id', $student)->delete();

        if ($result) {
            return redirect()->to('/dashboard/student/all')->with('success', 'Data berhasil dihapus !');
        }
    }

    public function edit(Student $student)
    {
        return view('dashboard.student.edit', [
            "title" => "edit-data",
            "student" => $student,
            "class" => Kelas::all(),
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $student->update($validateData);

        return redirect('/dashboard/student/all')->with('success', 'Data siswa berhasil diubah!');
    }
}
