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
        <a href="{{ route('roles.create') }}" class="btn btn-outline-primary btn-lg" style="margin: 3% 0 -1% 3%;">
            <ion-icon name="add-outline" style="font-size: 20px; --ionicon-stroke-width: 48px; margin-bottom: -4px;"></ion-icon>
            Tambah Role
        </a>
        <div class="card">
            <div class="card-body table-responsive p-0-2">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Nama Role</th>
                            <th>Menu</th>
                            <th style="text-align: center">Tambah</th>
                            <th style="text-align: center">Ubah/Hapus</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->nama_role }}</td>
                                <td>{{ $item->menu }}</td>
                                <td style="text-align: center">
                                    @if ($item->tambah == 1)
                                        <ion-icon name="checkmark-outline" style="font-size: 16px; --ionicon-stroke-width: 48px; color: var(--green)"></ion-icon>
                                    @else
                                        <ion-icon name="close-outline" style="font-size: 16px; --ionicon-stroke-width: 48px; color: var(--red)"></ion-icon>
                                    @endif
                                </td>
                                <td style="text-align: center">
                                    @if ($item->edit == 1)
                                        <ion-icon name="checkmark-outline" style="font-size: 16px; --ionicon-stroke-width: 48px; color: var(--green)"></ion-icon>
                                    @else
                                        <ion-icon name="close-outline" style="font-size: 16px; --ionicon-stroke-width: 48px; color: var(--red)"></ion-icon>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('roles.show', $item->id) }}">
                                        <img class="icon" src="{{ asset('dist/img/edit@2x.png') }}" alt="" style="height: 16px; margin: 0 16px 8px 0;">
                                    </a>                                    
                                    <a href="javascript::void(0)" onclick="$(this).parent().find('form').submit()">
                                        <img class="icon" src="{{ asset('dist/img/trash@2x.png') }}" alt="" style="height: 16px; margin: 0 16px 8px 0;">
                                    </a>
                                    <form action="{{ route('roles.delete', $item->id) }}" method="DELETE">@csrf</form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection