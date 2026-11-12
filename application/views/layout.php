<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="<?= site_url('home') ?>">
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
                    <a class="nav-link" href="<?= site_url('home') ?>">
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