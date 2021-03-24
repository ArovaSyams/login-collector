<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Home</div>
                    <a class="nav-link" href="/pages">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Login Collection</div>
                    <a class="nav-link" href="/social-account">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                        Social Media Account
                    </a>
                    <a class="nav-link" href="/games-account">
                        <div class="sb-nav-link-icon"><i class="fas fa-gamepad"></i></div>
                        Games Account
                    </a>
                    <a class="nav-link" href="/other-account">
                        <div class="sb-nav-link-icon"><i class="bi bi-shield-lock media"></i></div>
                        Other Account
                    </a>     

                    <div class="sb-sidenav-menu-heading">ADDER</div>
                    <a class="nav-link" href="/account/create">
                        <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                        Add Account
                    </a>
                    <a class="nav-link" href="/pages/logo">
                        <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                        Add Logos
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Enter as :</div>
                <?= session()->get('admin'); ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">