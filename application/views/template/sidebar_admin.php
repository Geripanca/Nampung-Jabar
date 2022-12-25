<!-- Sidebar -->
<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/index');?>">
    <div class="sidebar-brand-icon">
    <i class="fa fa-map-marker" aria-hidden="true"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Nampung Jabar Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Beranda -->
<?php
if ($title == 'Beranda'){
    echo "<li class='nav-item active'>";
}else{
    echo "<li class='nav-item'>";
}
?>
    <a class="nav-link" href="<?= base_url('admin/index');?>">
    <i class="fa fa-home" aria-hidden="true"></i>
        <span>Beranda</span></a>
</li>
<!-- Nav Item - Pengaturan -->
<li class="nav-item">
    <a class="nav-link" href="index.html">
    <i class="fa fa-cog" aria-hidden="true"></i>
        <span>Pengaturan</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Admin
</div>

<!-- Nav Item - Database Kelola -->
    <li class='nav-item'>
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-database"  aria-hidden="true"></i>
        <span>Database Kelola</span>
    </a>
    <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar" >
        <div class="bg py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= site_url('listdesa/index')?>">
            <i class="fa fa-clipboard rotated" style="color: white;" aria-hidden="true"></i>
            <span style="color: white;">List Desa Wisata</span>
            </a>
            <a class="collapse-item" href="<?= site_url('rekomendasi/index')?>">
            <i class="fa fa-clipboard rotated" style="color: white;" aria-hidden="true"></i>
            <span style="color: white;">Rekomendasi</span>
            </a>
            <a class="collapse-item" href="<?= site_url('artikel/index');?>">
            <i class="fa fa-clipboard rotated" style="color: white;" aria-hidden="true"></i>
            <span style="color: white;">Artikel</span>
            </a>
            <a class="collapse-item" href="<?= site_url('pengguna/index')?>">
            <i class="fa fa-clipboard rotated" style="color: white;" aria-hidden="true"></i>
            <span style="color: white;">Pengguna</span>
            </a>
        </div>
    </div>
</li>
<!-- Nav Item - Hak Akses -->
<li class="nav-item">
    <a class="nav-link" href="index.html">
    <i class="fa fa-key" aria-hidden="true"></i>
        <span>Hak Akses</span></a>
</li>
<!-- Nav Item - Peran -->
<li class="nav-item">
    <a class="nav-link" href="index.html">
    <i class="fa fa-user" aria-hidden="true"></i>
        <span>Peran</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Mitra
</div>
<!-- Nav Item - Data -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Data</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->