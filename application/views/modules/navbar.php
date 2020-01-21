<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <?= $first_name ?>
                <i class="fas fa-caret-down dropdown-menu-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right user-dropdown">
                <div class="d-flex justify-content-center mt-4 dropdown-menu-header">
                    <img src="<?= base_url() ?>assets/img/admin.png" class="user-image border border-dark rounded-circle">
                </div>

                <div class="text-center mt-2 mb-2 dropdown-menu-body">
                    <p class="m-0"><?= $first_name ?></p>
                    <p><?= $email ?></p>
                </div>

                <div class="d-flex justify-content-between p-2 container-fluid dropdown-menu-footer">
                    <a class="btn btn-primary text-white">Edit Profile</a>
                    <a class="btn btn-danger text-white" href="<?= base_url() ?>Authenticates/logout">Logout</a>
                </div>
            </div>
        </li>
    </ul>
</nav>