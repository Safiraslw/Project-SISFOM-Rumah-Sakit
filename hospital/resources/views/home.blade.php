@extends('app')
@section('content')

<div class="row mt-4">
    <div class="col-6">
        <div class="wrapper text-center p-3" style="background-color:#8caca2;">
            <img src="\images\hospital.jpg" width="500" height="300" alt="">
        </div>
    </div>
    <div class="col-6">
        <div class="wrapper text-left p-3" style="background-color:#8caca2;">
            <h3>
                <font style="color: #F5F1EA;">SISFOM RS</font>
            </h3>
            <h6 class="text mt-5 mb-5">
                <font style="color: #F5F1EA;">
                    SISFOM RS merupakan singkatan dari Sistem Informasi Rumah Sakit.
                    Sistem ini digunakan oleh administrator untuk mengatur segala informasi
                    di rumah sakit. Adapun informasi yang disimpan seperti, data pegawai,
                    data dokter, data obat dan barang, dan lain sebagainya.
                    Sistem ini juga dapat digunakan untuk menambah data dan menghapus nya.
                    Untuk menggunakan SISFOM RS ini, seorang administrator dapat melakukan pendaftaran
                    sebelum login.
                </font>
            </h6>
            @guest
            <a class="btn btn-dark" href="{{ route('login') }}">Login</a>
            <a class="btn btn-dark" href="{{ route('register') }}">Register</a>
            @endguest
            @endsection
        </div>
    </div>
</div>