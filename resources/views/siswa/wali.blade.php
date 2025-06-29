@extends('layouts.app')
@section('title', 'Data Wali')
@section('content')
    <h1>Data Wali</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>Nama Wali</th>
            <th>Pekerjaan Wali</th>
            </tr>
            @foreach($siswas as $siswa)
            <tr>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->email }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->wali->nama_wali }}</td>
                <td>{{ $siswa->wali->pekerjaan }}</td>

            </tr>
            @endforeach
        </table>
@endsection