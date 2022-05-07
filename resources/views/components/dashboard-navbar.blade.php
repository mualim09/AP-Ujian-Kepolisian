<div>
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <img src="{{ asset('assets/ruangadmin') }}/img/logo/logo2.png">
            </div>
            <div class="sidebar-brand-text mx-3">UJIAN POLISI</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Features
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Master Data</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manajemen Data</h6>
                    <a class="collapse-item" href="alerts.html">Master Peserta</a>
                    <a class="collapse-item" href="buttons.html">Master Petugas</a>
                    <a class="collapse-item" href="dropdowns.html">Master UKOM</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ui-colors.html">
                <i class="fas fa-fw fa-palette"></i>
                <span>Bank Soal</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
                aria-expanded="true" aria-controls="collapseForm">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Uji Kompetensi</span>
            </a>
            <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manajemen UKOM</h6>
                    <a class="collapse-item" href="form_basics.html">Jadwal Ujian</a>
                    <a class="collapse-item" href="form_advanceds.html">Hasil Ujian</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                aria-expanded="true" aria-controls="collapseTable">
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan</span>
            </a>
            <div id="collapseTable" class="collapse" aria-labelledby="headingTable"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelola Laporan</h6>
                    <a class="collapse-item" href="simple-tables.html">Jadwal Ujian</a>
                    <a class="collapse-item" href="datatables.html">Hasil Ujian</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            MORE
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                aria-expanded="true" aria-controls="collapseTable">
                <i class="fas fa-fw fa-table"></i>
                <span>User Management</span>
            </a>
            <div id="collapseTable" class="collapse" aria-labelledby="headingTable"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">User Management</h6>
                    <a class="collapse-item" href="simple-tables.html">Administrator</a>
                    <a class="collapse-item" href="datatables.html">User Akun</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                aria-expanded="true" aria-controls="collapseTable">
                <i class="fas fa-fw fa-table"></i>
                <span>Settings</span>
            </a>
            <div id="collapseTable" class="collapse" aria-labelledby="headingTable"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Settings</h6>
                    <a class="collapse-item" href="simple-tables.html">Administrator</a>
                    <a class="collapse-item" href="datatables.html">User Akun</a>
                </div>
            </div>
        </li>
        {{-- <div class="version" id="version-ruangadmin"></div> --}}
    </ul>
</div>
