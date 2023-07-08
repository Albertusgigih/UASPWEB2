@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Tamu</h3>
        <form action="{{ url('/tamu/' . $row->id_tamu) }}" method="POST">
            @method('PATCH')
            @csrf

            <div class="mb-3 w-50">
                <label>NIM TAMU</label>
                <input type="text" class="form-control" name="nim_tamu" value="{{ $row->nim_tamu}}">
            </div>
            <div class="mb-3 w-50">
                <label>NAMA TAMU</label>
                <input type="text" class="form-control" name="nama_tamu" value="{{ $row->nama_tamu}}">
            </div>
            <div class="mb-2 w-50">
                <label>INSTANSI</label>
                <select class="form-control" name="instansi" value="{{ $row->instansi }}">
                    <option value="UNDHA (FIK)">UNDHA (FIK)</option>
                    <option value="UNDHA (FEB)">UNDHA (FEB)</option>
                    
                </select>
            </div>
            <div class="mb-2 w-50">
                <label>JURUSAN</label>
                <select class="form-control" name="jurusan_tamu" value="{{ $row->jurusan_tamu }}">
                    <option value="S1-MANAJEMEN">S1-MANAJEMEN</option>
                    <option value="S1 AKUNTANSI">S1 AKUNTANSI</option>
                    <option value="D3-PERBANKAN KEUANGAN">D3-PERBANKAN KEUANGAN</option>
                    <option value="D3 AKUNTANSI">D3 AKUNTANSI</option>
                    <option value="S2-MAGISTER MANAJEMEN">S2-MAGISTER MANAJEMEN</option>
                    <option value="S1 INFORMATIKA">S1 INFORMATIKA</option>
                    <option value="S1 SISTEM INFORMASI">S1 SISTEM INFORMASI</option>
                    <option value="S1 SISTEM KOMPUTER">S1 SISTEM KOMPUTER</option>
                    
                </select>
            </div>
            <div class="mb-3 w-50">
                <label>TANGGAL KUNJUNG</label>
                <input type="text" class="form-control" name="tanggal_kunjung" value="{{ $row->tanggal_kunjung}}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-1" value="UPDATE">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
                    </svg>
                Simpan Perubahan</button>              
            </div>
        </form>
        <br>
        <a class="btn btn-dark" href="{{ url()->previous() }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg>
           Kembali
        </a>
    </div>
 @endsection