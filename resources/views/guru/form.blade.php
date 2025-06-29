@extends('layouts.app')
@section('title', 'Tambah Data Guru')
@section('content')
    <h1>Form Tambah Data Guru</h1>
    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value="{{ (isset($guru)) ? $guru->nama : '' }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="{{ (isset($guru)) ? $guru->email : '' }}"></td>
            </tr>
            <tr>
                <td>Wali Kelas</td>
                <td><input type="text" name="wali_kelas" value="{{ (isset($guru)) ? $guru->wali_kelas : '' }}"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-warning" href="{{ url('/guru') }}" role="button">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
@endsection    