<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title><?= $this->lang->line('website_name'); ?> | <?= $this->lang->line('government'); ?></title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?= $this->lang->line('meta_keywords'); ?>" name="keywords">
    <meta content="<?= $this->lang->line('meta_description'); ?>" name="description">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Animation -->
    <link href="<?= base_url('assets/lib/animate/animate.min.css') ?>" rel="stylesheet">

    <!-- Owl -->
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

</head>

<body>

<!-- DEBUG MARKER -->
<div style="display:none;">route-template-active</div>

<!--=====================================================
TOP HEADER
======================================================-->

<div class="container-fluid bg-dark text-white py-2">

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <small>

                    <i class="fas fa-map-marker-alt me-2"></i>

                    <?= $this->lang->line('website_name'); ?>

                </small>

            </div>

            <div class="col-lg-4 text-center">

                <small>

                    <i class="fas fa-phone-alt me-2"></i>

                    <?= $this->lang->line('helpline'); ?> : <?= $this->lang->line('helpline_number'); ?>

                </small>

            </div>

            <div class="col-lg-4 text-end">

                <a href="<?= site_url('language/english'); ?>" class="btn btn-sm btn-outline-light">
                    English
                </a>

                <a href="<?= site_url('language/hindi'); ?>" class="btn btn-sm btn-warning ms-2">
                    हिन्दी
                </a>

            </div>

        </div>

    </div>

</div>


<!--=====================================================
OFFICIAL LOGO AREA
======================================================-->

<div class="container-fluid government-header border-bottom">

    <div class="container py-3">

        <div class="row align-items-center">

            <!-- Left Logo -->
            <div class="col-lg-2 col-md-2 col-3 text-center">

                <img src="<?= base_url('assets/img/logo.png'); ?>"
                     class="img-fluid government-logo"
                     alt="Government Logo">

            </div>

            <!-- Center Heading -->
            <div class="col-lg-8 col-md-8 col-6 text-center">

                <h2 class="website-title mb-1">

                    <?= $this->lang->line('website_name'); ?>

                </h2>

                <h5 class="website-subtitle mb-2">

                    <?= $this->lang->line('government'); ?>

                </h5>

                <p class="website-tagline mb-0">

                    <?= $this->lang->line('tagline'); ?>

                </p>

            </div>

            <!-- Right Logo -->
            <div class="col-lg-2 col-md-2 col-3 text-center">

                <img src="<?= base_url('assets/img/logo.png'); ?>"
                     class="img-fluid government-logo"
                     alt="Swachh Bharat">

            </div>

        </div>

    </div>

</div>


<!--=====================================================
NAVBAR
======================================================-->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

    <div class="container">

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="navbar">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('index.php'); ?>"><?= $this->lang->line('home'); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/about'); ?>"><?= $this->lang->line('about'); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/departments'); ?>"><?= $this->lang->line('departments'); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/services'); ?>"><?= $this->lang->line('services'); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/schemes'); ?>"><?= $this->lang->line('schemes'); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/gallery'); ?>"><?= $this->lang->line('gallery'); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/contact'); ?>"><?= $this->lang->line('contact'); ?></a>
                </li>

            </ul>

            <a href="<?= base_url('index.php/admin/login'); ?>"

               class="btn btn-outline-light rounded-pill px-4 ms-2">

                <i class="fas fa-sign-in-alt me-2"></i>

                <?= $this->lang->line('login'); ?>

            </a>

        </div>

    </div>

</nav>

<?= isset($content) ? $content : ''; ?>


<!-- =====================================================
FOOTER
===================================================== -->

<footer class="bg-dark text-white mt-5">

    <div class="container py-5">

        <div class="row">

            <!-- About -->
            <div class="col-lg-3 col-md-6 mb-4">

                <img src="<?= base_url('assets/img/logo.png') ?>" style="height:70px;">

                <h4 class="text-warning mt-3">
                    <?= $this->lang->line('footer_brand_title'); ?>
                </h4>

                <p class="mt-3 mb-0">
                    <?= $this->lang->line('footer_brand_description'); ?>
                </p>

            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6 mb-4">

                <h4 class="text-warning mb-4">
                    <?= $this->lang->line('quick_links'); ?>
                </h4>

                <ul class="list-unstyled">

                    <li class="mb-2"><a href="<?= base_url('index.php'); ?>" class="text-white text-decoration-none"><i class="fas fa-angle-right me-2"></i><?= $this->lang->line('home'); ?></a></li>

                    <li class="mb-2"><a href="<?= base_url('index.php/about'); ?>" class="text-white text-decoration-none"><i class="fas fa-angle-right me-2"></i><?= $this->lang->line('about'); ?></a></li>

                    <li class="mb-2"><a href="<?= base_url('index.php/departments'); ?>" class="text-white text-decoration-none"><i class="fas fa-angle-right me-2"></i><?= $this->lang->line('departments'); ?></a></li>

                    <li class="mb-2"><a href="<?= base_url('index.php/services'); ?>" class="text-white text-decoration-none"><i class="fas fa-angle-right me-2"></i><?= $this->lang->line('services'); ?></a></li>

                    <li class="mb-2"><a href="<?= base_url('index.php/gallery'); ?>" class="text-white text-decoration-none"><i class="fas fa-angle-right me-2"></i><?= $this->lang->line('gallery'); ?></a></li>

                    <li><a href="<?= base_url('index.php/contact'); ?>" class="text-white text-decoration-none"><i class="fas fa-angle-right me-2"></i><?= $this->lang->line('contact_us'); ?></a></li>

                </ul>

            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6 mb-4">

                <h4 class="text-warning mb-4">
                    <?= $this->lang->line('contact_us'); ?>
                </h4>

                <p>
                    <i class="fas fa-map-marker-alt text-warning me-2"></i>
                    <?= $this->lang->line('office_address'); ?>
                </p>

                <p>
                    <i class="fas fa-phone text-warning me-2"></i>
                    <?= $this->lang->line('office_phone'); ?>
                </p>

                <p>
                    <i class="fas fa-envelope text-warning me-2"></i>
                    <?= $this->lang->line('office_email'); ?>
                </p>

                <p>
                    <i class="fas fa-clock text-warning me-2"></i>
                    <?= $this->lang->line('office_hours'); ?>
                </p>

                <div class="mt-3">

                    <span class="text-white d-block mb-2"><?= $this->lang->line('follow_us'); ?>:</span>
                    <a href="https://www.facebook.com" target="_blank" class="btn btn-outline-light btn-sm me-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://twitter.com" target="_blank" class="btn btn-outline-light btn-sm me-2">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a href="https://www.youtube.com" target="_blank" class="btn btn-outline-light btn-sm">
                        <i class="fab fa-youtube"></i>
                    </a>

                </div>

            </div>

            <!-- Map -->
            <div class="col-lg-3 col-md-6 mb-4">

                <h4 class="text-warning mb-4">
                    <?= $this->lang->line('location'); ?>
                </h4>

                <iframe
                    src="https://www.google.com/maps?q=Lucknow&output=embed"
                    width="100%"
                    height="220"
                    style="border:0;border-radius:10px;"
                    loading="lazy">
                </iframe>

            </div>

        </div>

    </div>

</footer>

<!-- Copyright -->

<div class="bg-primary text-center text-white py-3">

    © <?= date('Y'); ?> <?= $this->lang->line('website_name'); ?> |
    <?= $this->lang->line('government'); ?> |
    <?= $this->lang->line('copyright_text'); ?>

</div>

 <!-- JavaScript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/lib/wow/wow.min.js') ?>"></script>

<script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>

<script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>