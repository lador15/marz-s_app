<?php

namespace App\Http\Controllers;
use App\Models\GuruModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    function index()
    {
        $data= array(
            'gurus' => GuruModel::all()
        );
        return view('guru.list', $data);
    }

    function insert(Request $request)
    {
        if ($request->isMethod('post')) {
            $guru = new GuruModel();
            $guru->nama = $request->input('nama');
            $guru->email = $request->input('email');
            $guru->wali_kelas = $request->input('wali_kelas');
            $guru->save();
            return redirect('/guru')->with(['message' => 'Data guru berhasil ditambahkan.']);
        }
        return view('guru.form');
    }

    function update(Request $request)
    {
        $guru = GuruModel::find($request->id);
        $data = array(
            'guru' => $guru
        );

        if ($request->isMethod('post')) {
            $guru->nama = $request-> nama;
            $guru->email = $request-> email;
            $guru->wali_kelas = $request-> wali_kelas;
            $guru->save();
            return redirect('/guru')->with(['message' => 'Ubah data guru berhasil.']);
        }
        return view('guru.form', $data);
    }

    function delete(Request $request)
    {
        $guru = GuruModel::find($request->id);
        $guru->delete();
        return redirect('/guru')->with(['message' => 'Data guru berhasil dihapus.']);
    }

    public function mapel()
    {
        $guru = GuruModel::all();
        return view('guru.mapel', ['gurus'=> $guru]);
    }
}