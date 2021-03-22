<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Home</div>
                    <a class="nav-link" href="/admin">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Account</div>
                    <a class="nav-link" href="/login-collection">
                        <div class="sb-nav-link-icon"><i class="bi bi-shield-lock media"></i></div>
                        Login Collection
                    </a>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Login Information
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/">Beranda</a>
                            <a class="nav-link" href="/profil">Profil</a>
                            <a class="nav-link" href="/pendidikan">Pendidikan</a>
                            <a class="nav-link" href="/galeri">Galeri</a>
                            <a class="nav-link" href="/berita">Berita</a>
                            <a class="nav-link" href="/hubungi">Hubungi</a>
                        </nav>
                    </div>                    

                    <div class="sb-sidenav-menu-heading">PPDB</div>
                    <a class="nav-link" href="/admin/linkform">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Link Form
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Masuk Sebagai :</div>
                <?= session()->get('admin'); ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">