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
        <a href="{{ route('roles.index') }}" class="nav-link">
            <ion-icon class="nav-icon ion" name="checkbox-outline" style="--ionicon-stroke-width: 48px; margin-bottom: -3px;"></ion-icon>
            <p>Role Pengguna</p>
        </a>
    </li>
@endsection