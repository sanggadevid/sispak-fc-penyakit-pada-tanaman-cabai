<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="index.php">
            <img width="50px" src="assets/images/logo.png" alt="Logo" />
        </a>
        <p style="margin-left:6px ; text-align:center"><?= $menu_atas ?></p>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="">
                    <a class="js-arrow" href="index.php">
                        <i class="fas fa-tachometer-alt"></i>Home</a>
                </li>
                <li>
                    <a href="index.php?page=data_fc">
                        <i class="fas fa-user"></i>Forward Chaining
                    </a>
                </li>
                <!-- <li>
                    <a href="index.php?page=data_cf">
                        <i class="fas fa-user"></i>Certainty Factor
                    </a>
                </li> -->
                <li>
                    <a href="index.php?page=data_user">
                        <i class="fas fa-bug"></i>Data User
                    </a>
                </li>
                <li>
                    <a href="index.php?page=data_konsultasi">
                        <i class="fas fa-users"></i>Konsul Forward Chaining
                    </a>
                </li>
                <!-- <li>
                    <a href="index.php?page=data_konsultasi">
                        <i class="fas fa-users"></i>Konsul Certainty Factor
                    </a>
                </li> -->
                <li>
                    <a href="index.php?page=data_history">
                        <i class="fas fa-align-justify"></i>Riwayat Konsul Forward Chaining
                    </a>
                </li>
                <!-- <li>
                    <a href="index.php?page=data_history">
                        <i class="fas fa-align-justify"></i>Riwayat Konsul Certainty Factor
                    </a>
                </li> -->
                <li>
                    <a href="logout.php">
                        <i class="fas fa-power-off"></i>Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->