<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Mahasiswa</title>

    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>"
          rel="stylesheet">

    <style>

        body {
            background: linear-gradient(135deg, #e8eef5, #f8fafc);
            font-family: Arial, sans-serif;
            min-height: 100vh;
        }

        /* KOTAK UTAMA */
        .kotak-data {
            background: #ffffff;
            border-radius: 18px;
            padding: 30px;
            margin-top: 35px;
            margin-bottom: 30px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            border: 1px solid #edf0f5;
        }

        /* JUDUL */
        .judul {
            color: #263b58;
            font-weight: bold;
            font-size: 25px;
            border-left: 5px solid #198754;
            padding-left: 12px;
        }

        .subjudul {
            color: #8491a5;
            font-size: 14px;
            margin-left: 17px;
        }

        /* NAVBAR */
        .navbar {
            padding: 13px 20px;
        }

        .navbar-brand {
            font-size: 23px;
            letter-spacing: 2px;
        }

        .nav-link {
            margin-left: 8px;
            border-radius: 7px;
            padding-left: 13px !important;
            padding-right: 13px !important;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: rgba(255,255,255,0.15);
        }

        /* TOMBOL TAMBAH */
        .btn-tambah {
            border-radius: 8px;
            padding: 9px 18px;
            font-weight: bold;
            box-shadow: 0 3px 8px rgba(13,110,253,0.2);
        }

        /* TABEL */
        .table-box {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e5eaf0;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #198754;
            color: white;
            padding: 14px 10px;
            border-color: #198754;
            font-size: 14px;
        }

        .table tbody td {
            padding: 13px 10px;
            vertical-align: middle;
            font-size: 14px;
        }

        .table tbody tr:hover {
            background-color: #f0faf4;
        }

        /* TOMBOL EDIT DAN HAPUS */
        .aksi {
            display: flex;
            justify-content: center;
            gap: 7px;
        }

        .aksi .btn {
            border-radius: 6px;
            min-width: 55px;
            font-size: 12px;
            font-weight: bold;
        }

        /* KOTAK EDIT */
        .card {
            border: none;
            border-radius: 13px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .card-header {
            padding: 14px 18px;
            font-weight: bold;
        }

        /* MODAL */
        .modal-content {
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .modal-header {
            background-color: #f4f7fb;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.2rem rgba(25,135,84,0.15);
        }

        @media (max-width: 768px) {
            .kotak-data {
                padding: 18px;
                margin-top: 20px;
            }

            .judul {
                font-size: 21px;
            }
        }

    </style>

</head>

<body>

<!-- NAVBAR INAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

    <div class="container-fluid">

        <a class="navbar-brand fw-bold"
           href="<?= site_url('home') ?>">
            INAR
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menuNavbar">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link"
                       href="<?= site_url('home') ?>">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active"
                       href="<?= site_url('mahasiswa') ?>">
                        Data Mahasiswa
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="<?= site_url('matakuliah') ?>">
                        Data Mata Kuliah
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="<?= site_url('jadwalkuliah') ?>">
                        Data Jadwal Kuliah
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- ISI HALAMAN -->
<div class="container-fluid">

    <div class="kotak-data">

        <!-- JUDUL -->
        <h4 class="judul mb-1">
            Data Mahasiswa
        </h4>

        <p class="subjudul mb-4">
            Kelola informasi data mahasiswa INAR
        </p>


        <!-- TOMBOL TAMBAH -->
        <button class="btn btn-primary btn-tambah mb-4"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal">

            + Tambah Mahasiswa

        </button>


        <!-- MODAL TAMBAH -->
        <div class="modal fade"
             id="exampleModal"
             tabindex="-1"
             aria-hidden="true">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title fw-bold">
                            Tambah Data Mahasiswa
                        </h5>

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                        </button>

                    </div>

                    <div class="modal-body">

                        <form action="<?= site_url('mahasiswa/simpan') ?>"
                              method="post">

                            <div class="mb-3">

                                <label class="form-label fw-bold">
                                    NIM
                                </label>

                                <input type="text"
                                       name="nim"
                                       class="form-control"
                                       placeholder="Masukkan NIM"
                                       required>

                            </div>

                            <div class="mb-3">

                                <label class="form-label fw-bold">
                                    Nama
                                </label>

                                <input type="text"
                                       name="nama"
                                       class="form-control"
                                       placeholder="Masukkan Nama"
                                       required>

                            </div>

                            <div class="mb-3">

                                <label class="form-label fw-bold">
                                    Kelas
                                </label>

                                <input type="text"
                                       name="kelas"
                                       class="form-control"
                                       placeholder="Masukkan Kelas"
                                       required>

                            </div>

                            <button type="submit"
                                    class="btn btn-primary w-100">

                                Simpan Data

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>


        <!-- FORM EDIT -->
        <?php if (isset($edit_data) && $edit_data != null) : ?>

            <div class="card mb-4">

                <div class="card-header bg-warning">
                    Edit Data Mahasiswa
                </div>

                <div class="card-body">

                    <form action="<?= site_url('mahasiswa/update') ?>"
                          method="post">

                        <input type="hidden"
                               name="nim_lama"
                               value="<?= html_escape($edit_data->nim) ?>">

                        <div class="mb-3">

                            <label>NIM</label>

                            <input type="text"
                                   name="nim"
                                   class="form-control"
                                   value="<?= html_escape($edit_data->nim) ?>"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label>Nama</label>

                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   value="<?= html_escape($edit_data->nama) ?>"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label>Kelas</label>

                            <input type="text"
                                   name="kelas"
                                   class="form-control"
                                   value="<?= html_escape($edit_data->kelas) ?>"
                                   required>

                        </div>

                        <button type="submit"
                                class="btn btn-success">

                            Simpan Perubahan

                        </button>

                        <a href="<?= site_url('mahasiswa') ?>"
                           class="btn btn-secondary">

                            Batal

                        </a>

                    </form>

                </div>

            </div>

        <?php endif; ?>


        <!-- TABEL MAHASISWA -->
        <div class="table-box">

            <div class="table-responsive">

                <table class="table table-bordered table-sm text-center">

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php if (!empty($mahasiswas)) : ?>

                            <?php $no = 1; ?>

                            <?php foreach ($mahasiswas as $mahasiswa) : ?>

                                <tr>

                                    <td><?= $no++ ?></td>

                                    <td>
                                        <?= html_escape($mahasiswa->nim) ?>
                                    </td>

                                    <td>
                                        <?= html_escape($mahasiswa->nama) ?>
                                    </td>

                                    <td>
                                        <?= html_escape($mahasiswa->kelas) ?>
                                    </td>

                                    <td>

                                        <div class="aksi">

                                            <a href="<?= site_url('mahasiswa/edit/' . rawurlencode($mahasiswa->nim)) ?>"
                                               class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <a href="<?= site_url('mahasiswa/hapus/' . rawurlencode($mahasiswa->nim)) ?>"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                Hapus
                                            </a>

                                        </div>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php else : ?>

                            <tr>

                                <td colspan="5">
                                    Belum ada data mahasiswa
                                </td>

                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>


<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>