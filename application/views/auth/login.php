<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- Icon Microlight -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/brand/brand-ponpres_small.svg"
        type="image/x-icon">
    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/auth.css">

    <!-- CSS Libraries -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-4">
                <div class="card my-5">
                    <div class="card-body p-5">
                        <h4 class="fw-bold">Hi, Selamat Datang 👋</h4>
                        <p class="text-secondary-500 lg-text-rg mb-4">Silahkan login dengan benar</p>
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?php echo site_url('auth/process') ?>" class="user" method="post"
                            class="needs-validation" novalidate>
                            <div class="form-group mb-4">
                                <input id="username" type="text" class="form-control form-control-md"
                                    placeholder="Username" name="username" required>
                                <div class="invalid-feedback">
                                    Masukkan username dengan benar
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control form-control-md" id="password"
                                    placeholder="Password" name="password" required>
                                <div class="invalid-feedback">
                                    Masukkan password dengan benar
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <button class="w-100 btn btn-lg btn-success text-bg-success-700 lg-text-md" name="login"
                                    type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?php echo base_url() ?>assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    <!-- Template JS FIle -->
    <script src="<?php echo base_url() ?>assets/node_modules/bootstrap/dist/js/main.js"></script>

    <!-- Js Libraries -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

</body>

</html>
