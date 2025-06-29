@extends('layouts.app')
@section('title', 'List Siswa')
@section('content')
    <h1>Data Siswa</h1>
    @if($message = Session::get('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <a class="btn btn-success" href="{{url('/siswa/insert')}}" role="button">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        @foreach($siswas as $siswa)
            <tr>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->email }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url('/siswa/update/'.$siswa->id) }}" role="button">Ubah</a>
                    <a class="btn btn-danger" href="{{ url('/siswa/delete/'.$siswa->id) }}" role="button">Hapus</a>
                </td>
            </tr>
            @endforeach
    </table>
    <a class="btn btn-primary" href="{{url('/siswa/wali')}}" role="button">Data Wali</a>
@endsection