<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sidebar 07</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- DATATABLES -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/5994dec7bb.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <ul class="list-unstyled components mb-5">
                <!-- <h1><a href="index.html" class="logo">M.</a></h1> -->

                <li>
                    <a href="index.html">
                        <span class="logo">
                            <img src="images/logo.png" alt="" />
                            <div class="yc">PERPUSTAKAAN</div>
                        </span>
                    </a>
                </li>

                <li class="active">
                    <a href="index.php"><span class="fas fa-tachometer-alt"></span> Dashboard</a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-book-open"></span> Buku</a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-user"></span> Anggota</a>
                </li>
                <li>
                    <a href="peminjaman.php"><span class="fas fa-forward"></span> Peminjaman</a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-backward"></span> Pengembalian</a>
                </li>
            </ul>

            <div class="footer">
                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved | PERPUSTAKAAN

                </p>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#transaksi">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#data">Data</a>
                    </li>
                </ul>

                <!-- tab TRANSAKSI -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="transaksi">

                        <form class="mt-4">
                            <div class="form-group row">
                                <label for="nopinjam" class="col-sm-2 col-form-label text-right">No. Pinjam</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nopinjam" name="nopinjam">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="anggota" class="col-sm-2 col-form-label text-right">Nama Anggota</label>
                                <div class="col-sm-10">
                                    <select class="custom-select form-control" id="anggota">
                                        <option selected>-- Pilih nama Anggota --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kategori" class="col-sm-2 col-form-label text-right">Kategori Buku</label>
                                <div class="col-sm-10">
                                    <select class="custom-select form-control" id="kategori">
                                        <option selected>-- Pilih Kategori Buku --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label text-right">Judul Buku</label>
                                <div class="col-sm-10">
                                    <select class="custom-select form-control" id="judul">
                                        <option selected>-- Pilih Judul Buku --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tglpinjam" class="col-sm-2 col-form-label text-right">Tanggal Pinjam</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tglpinjam" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tglkembali" class="col-sm-2 col-form-label text-right">Tanggal Kembali</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tglkembali" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- tab DATA -->
                    <div class="tab-pane container fade" id="data">
                        <table id="tabel-data" class="table table-bordered mt-4" data-order='[[ 1, "asc" ]]' data-page-length='10'>
                            <thead>
                                <tr>
                                    <th>No. Pinjam</th>
                                    <th>Judul</th>
                                    <th>Nama Anggota</th>
                                    <th>Tgl. Pinjam</th>
                                    <th>Tgl. Kembali</th>
                                    <th>Terlambat</th>
                                    <th>Kembali</th>
                                    <th>Perpanjang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable();
            "paging": false
        });
    </script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>