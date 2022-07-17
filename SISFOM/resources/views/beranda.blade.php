<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="icon" href="images/hospital.png" type="image/x-icon" />

    <style>
        body {
            background: #F5F1EA;
        }

        .row {
            display: flex;
            justify-content: center;
        }
    </style>

    <title>Beranda | SISFOM RS</title>
</head>

<!-- navbar -->
<nav class="navbar navbar-light mb-0" style="background-color:#8caca2;">
    <div class="container-fluid">
        <span class="navbar-brand ml-2 mt-2 mb-2 h1">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hospital me-2" viewBox="0 0 16 16">
                <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z" />
                <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z" />
            </svg>
            SISFOM RS
        </span>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/login" class="nav-link link-dark"><h6><u>LOGIN</u></h6></a>
    </div>
    </div>
</nav>
<!-- akhir navbar -->

<body>
    <!-- content -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-6">
                <div class="wrapper text-center p-3" style="background-color:#8caca2;">
                    <img src="\images\hospital.jpg" width="500" height="300" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="wrapper text-left p-3" style="background-color:#8caca2;">
                    <h3><font style="color: #F5F1EA;">SISFOM RS</font></h3>
                    <h6 class="text mt-4">
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
                </div>
            </div>
        </div>
    </div>
    <!-- akhir content -->
</body>

</html>