@extends('layouts.app')
@section('title', 'List Guru')
@section('content')
    <h1>Data Guru</h1>
    @if($message = Session::get('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <a class="btn btn-success" href="{{url('/guru/insert')}}" role="button">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Wali Kelas</th>
            <th>Aksi</th>
        </tr>
        @foreach($gurus as $guru)
            <tr>
                <td>{{ $guru->nama }}</td>
                <td>{{ $guru->email }}</td>
                <td>{{ $guru->wali_kelas }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url('/guru/update/'.$guru->id) }}" role="button">Ubah</a>
                    <a class="btn btn-danger" href="{{ url('/guru/delete/'.$guru->id) }}" role="button">Hapus</a>
                </td>
            </tr>
            @endforeach
    </table>
    <a class="btn btn-primary" href="{{url('/guru/mapel')}}" role="button">Data Mata Pelajaran</a>
@endsection