<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light font-weight-bold">TUTORIAL</span>
    </a>

    <div class="sidebar p-0">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex pl-1">
            <div class="image">
                <img src="<?= base_url() ?>assets/img/admin.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $first_name ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header p-0 pl-2">MAIN</li>
                <li class="nav-item pl-2 <?= ($page === "Dashboard") ? "active" : "" ?>">
                    <a href="<?= base_url() ?>home" class="nav-link">
                        <i class="fas fa-tachometer-alt mr-1"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header p-0 pl-2">MANAGEMENT</li>
                <li class="nav-item pl-2 <?= ($page === "Customer Search") ? "active" : "" ?>">
                    <a href="<?= base_url() ?>customer" class="nav-link">
                        <i class="fas fa-users mr-1"></i>
                        <p>Customer</p>
                    </a>
                </li>
                <li class="nav-header p-0 pl-2">REPORTS</li>
                <li class="nav-item pl-2">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="fas fa-file pl-1 mr-1"></i>
                        <p>Sales Report</p>
                    </a>
                </li>
                <li class="nav-item pl-2">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="fas fa-exclamation-triangle mr-1"></i>
                        <p>Failed Report</p>
                    </a>
                </li>
                <li class="nav-header p-0 pl-2">EDIT</li>
                <li class="nav-item pl-2">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="fas fa-calendar-alt mr-1"></i>
                        <p>Production Plans</p>
                    </a>
                </li>
                <li class="nav-item pl-2">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="fas fa-list mr-1"></i>
                        <p>Publication</p>
                    </a>
                </li>
                <li class="nav-item pl-2">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="fas fa-envelope mr-1"></i>
                        <p>Email Templates</p>
                    </a>
                </li>
                <li class="nav-item pl-2">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="fa fa-address-card mr-1"></i>
                        <p>Staff Accounts</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>