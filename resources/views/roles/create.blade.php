@extends('layouts.main')
@section('content-menu')
    <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->
    <li class="nav-item">
        <a href="#" class="nav-link">
            <ion-icon class="nav-icon ion" name="document-text-outline" style="--ionicon-stroke-width: 48px; margin-bottom: -3px;"></ion-icon>
            <p>
                Master Data
                <i class="right fas fa-angle-right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ asset('./index.html') }}" class="nav-link">
                    <i class="far fa-circle nav-icon" style="color: #fff0"></i>
                    <p>Jurusan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ asset('./index.html') }}" class="nav-link">
                    <i class="far fa-circle nav-icon" style="color: #fff0"></i>
                    <p>Kelas</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ asset('./index.html') }}" class="nav-link">
                    <i class="far fa-circle nav-icon" style="color: #fff0"></i>
                    <p>Tahun Ajaran</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ asset('./index.html') }}" class="nav-link">
                    <i class="far fa-circle nav-icon" style="color: #fff0"></i>
                    <p>Mata Pelajaran</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ asset('pages/calendar.html') }}" class="nav-link">
            <ion-icon class="nav-icon ion" name="people-outline" style="--ionicon-stroke-width: 48px; margin-bottom: -3px;"></ion-icon>
            <p>
                Data Siswa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <ion-icon class="nav-icon ion" name="reader-outline" style="--ionicon-stroke-width: 48px; margin-bottom: -3px;"></ion-icon>
            <p>
                Laporan
                <i class="fas fa-angle-right right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ asset('pages/layout/top-nav.html') }}" class="nav-link">
                    <i class="far fa-circle nav-icon" style="color: #fff0"></i>
                    <p>Data Siswa</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ asset('pages/layout/top-nav-sidebar.html') }}" class="nav-link">
                    <i class="far fa-circle nav-icon" style="color: #fff0"></i>
                    <p>Nilai Siswa</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ asset('pages/layout/top-nav-sidebar.html') }}" class="nav-link">
                    <i class="far fa-circle nav-icon" style="color: #fff0"></i>
                    <p>Guru/Karyawan</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="iframe.html" class="nav-link">
            <ion-icon class="nav-icon ion" name="person-outline" style="--ionicon-stroke-width: 48px; margin-bottom: -2px;"></ion-icon>
            <p>Pengguna</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('roles.index') }}" class="nav-link active">
            <ion-icon class="nav-icon ion" name="checkbox-outline" style="--ionicon-stroke-width: 48px; margin-bottom: -3px;"></ion-icon>
            <p>Role Pengguna</p>
        </a>
    </li>
@endsection
@section('content')
    <div class="col-12">
        <form method="POST" action="{{ route('roles.store') }}">
            @csrf

            <div class="card">    
                <div class="card-body">
                    <div class="form-group mb-1">
                        <label for="nama_role" class="label">Nama Role:*</label>
                        <input type="text" id="nama_role" name="nama_role" class="form-control" style="width: 20%" required autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <label for="menu" class="label">Menu:*</label>
                        <select class="custom-select" name="menu" id="menu" style="width: 28%" required>
                            <option value="">
                                @foreach ($data as $item)
                                    <option value={{ $item->id }}>{{ $item->menu }}</option>
                                @endforeach
                            </option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="tambah" name="tambah" value=1>
                        <label class="form-check-label" for="tambah">Hak akses untuk menambah data</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="edit" name="edit" value=1>
                        <label class="form-check-label" for="edit">Hak akses untuk mengubah/menghapus data</label>
                    </div>
                </div>
            </div>
            <div class="row-no-background">
                <div class="form-group">
                    <button type="submit" style="margin-left: 4%" class="form-control btn btn-primary rounded submit px-3">{{ __('Simpan') }}</button>
                </div>
                <div class="form-group">
                    <a href="{{ route('roles.index') }}" style="margin-left: 4%" class="form-control btn btn-outline-primary rounded submit px-3">Batal</a>
                </div>
            </div>
        </form>
    </div>
@endsection