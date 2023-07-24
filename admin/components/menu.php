<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="index.php">
            <img width="50px" src="assets/images/logo.png" alt="Logo" />
        </a>
        <p style="margin-left:6px ; text-align:center"><?= $menu_atas ?> </p>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="">
                    <a class="js-arrow" href="index.php">
                        <i class="fas fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="index.php?page=data_admin">
                        <i class="fas fa-user"></i>Admin
                    </a>
                </li>
                <li>
                    <a href="index.php?page=data_user">
                        <i class="fas fa-users"></i>User
                    </a>
                </li>
                <li>
                    <a href="index.php?page=data_gejala">
                        <i class="fas fa-code-fork"></i>Gejala
                    </a>
                </li>
                <li>
                    <a href="index.php?page=data_penyakit">
                        <i class="fas fa-bug"></i>Penyakit
                    </a>
                </li>
                <li>
                    <a href="index.php?page=data_rule">
                        <i class="fas fa-list"></i>Rule
                    </a>
                </li>
                <li>
                    <a href="index.php?page=data_solusi">
                        <i class="fas fa-ambulance"></i>Solusi
                    </a>
                </li>
                <li>
                    <a href="index.php?page=data_konsultasi">
                        <i class="fas fa-institution"></i>Laporan Konsultasi
                    </a>
                </li>
                <li>
                    <a href="index.php?page=data_member">
                        <i class="fas fa-institution"></i>Laporan User
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fas fa-power-off"></i>Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->