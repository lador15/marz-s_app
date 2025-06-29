@extends('layouts.app')
@section('title', 'Data Mata Pelajaran')
@section('content')
    <h1>Data Mata Pelajaran</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Wali Kelas</th>
            <th>Nama Mata Pelajaran</th>
            </tr>
            @foreach($gurus as $guru)
            <tr>
                <td>{{ $guru->nama }}</td>
                <td>{{ $guru->email }}</td>
                <td>{{ $guru->wali_kelas }}</td>
                <td>{{ $guru->mapel->nama }}</td>
            </tr>
            @endforeach
        </table>
@endsection