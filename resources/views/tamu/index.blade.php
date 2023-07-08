
@extends('layouts.app')

@section('content')


<div class="container p-3 mb-2 bg-dark text-white" >

    <h3 align="center">
        Daftar Pengunjung Perpustakaan UNDHA AUB Surakarta
    </h3>
        
        <a class="btn btn-success" href="{{ url('tamu/create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            Tambah Data
        </a>
<br>
<br>

<!-- Start kode untuk form pencarian -->
    <form class="form" method="get" action="{{ route('search') }}">
        <div class="form-group w-50 mb-3">
            <label for="search" class="d-block mr-2">Pencarian</label>
                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari berdasarkan nama">
                    <button type="submit" class="btn btn-primary mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                        Cari
                    </button>
                </div>
            </form>
<br>


<div id="app">
        @include('flash-message')


        @yield('content')
    </div>


<table class="table table-light table-hover">
    <thead class="thead-light">
            <tr>
                <th scope="col">NIM TAMU</th>
                <th scope="col">NAMA TAMU</th>            
                <th scope="col">INSTANSI</th>
                <th scope="col">JURUSAN TAMU</th>
                <th scope="col">TANGGAL KUNJUNG</th>
                <td colspan="2" align="center" class="font-weight-bold">AKSI</td>
            </tr>
        </thead>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->nim_tamu }}</td>
                    <td>{{ $row->nama_tamu }}</td>
                    
                    <td>{{ $row->instansi }}</td>
                    <td>{{ $row->jurusan_tamu }}</td>
                    <td>{{ $row->tanggal_kunjung }}</td>
                    <td>

                        <a href="{{ url('tamu/' . $row->id_tamu . '/edit') }}" class="btn btn-warning btn-sm" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>Edit</a>
                    </td>
                   <td>
                        <form action="{{ url('tamu/' . $row->id_tamu) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg>

                            Hapus</button>
                        </form>

                    </td>
                       
                            
                        
                    

                </tr>
            @endforeach
        </table>
    </div>

@endsection


