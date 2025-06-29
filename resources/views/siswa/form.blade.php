@extends('layouts.app')
@section('title', 'Tambah Data Siswa')
@section('content')
    <h1>Form Tambah Data Siswa</h1>
    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value="{{ (isset($siswa)) ? $siswa->nama : '' }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="{{ (isset($siswa)) ? $siswa->email : '' }}"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="{{ (isset($siswa)) ? $siswa->kelas : '' }}"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-warning" href="{{ url('/siswa') }}" role="button">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
@endsection    