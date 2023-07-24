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
                        <i class="fas fa-list"></i>Tentang (FC)
                    </a>
                </li>
                <!-- <li>
                    <a href="index.php?page=data_cf">
                        <i class="fas fa-user"></i>Certainty Factor
                    </a>
                </li> -->
                <li>
                    <a href="index.php?page=login">
                        <i class="fas fa-power-off"></i>Login</a>
                </li>
                <li>
                    <a href="index.php?page=registrasi">
                        <i class="fas fa-user"></i>Registrasi</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->