<!-- =====================================================
HERO SECTION
===================================================== -->

<section class="hero-section p-0">

<div class="container-fluid p-0">

        <div class="row">

    <div class="col-12">

        <div id="heroSlider"
             class="carousel slide carousel-fade shadow rounded overflow-hidden"
             data-bs-ride="carousel"
             data-bs-interval="4000">

            <div class="carousel-inner">

<?php
$lang = $this->session->userdata('site_lang');
$i=0;
foreach($slider as $row):
    $slider_title = ($lang == 'hindi' && !empty($row->title_hi))
        ? $row->title_hi
        : (!empty($row->title_en) ? $row->title_en : $row->title);

    $slider_subtitle = ($lang == 'hindi' && !empty($row->subtitle_hi))
        ? $row->subtitle_hi
        : (!empty($row->subtitle_en) ? $row->subtitle_en : $row->subtitle);
?>

<div class="carousel-item <?=($i==0)?'active':'';?>">

<img src="<?= !empty($row->image) ? base_url('uploads/slider/' . $row->image) : base_url('assets/img/default-slider.jpg'); ?>"
class="d-block w-100 hero-slider-img" alt="<?= !empty($slider_title) ? $slider_title : 'Slider Image'; ?>">

<div class="carousel-caption hero-caption">

<h5><?= $slider_subtitle;?></h5>

<h1><?= $slider_title;?></h1>

</div>

</div>

<?php
$i++;
endforeach;
?>

</div>

            <!-- Previous Button -->
            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#heroSlider"
                    data-bs-slide="prev">

                <span class="carousel-control-prev-icon"></span>

            </button>

            <!-- Next Button -->
            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#heroSlider"
                    data-bs-slide="next">

                <span class="carousel-control-next-icon"></span>

            </button>

        </div>

    </div>

</div>

    </div>
</section>

<!-- =====================================================
QUICK SERVICES
===================================================== -->

<section class="py-5 bg-light">

<div class="container">

<div class="row">

<div class="col-md-4 col-lg-2 mb-4">
<div class="card text-center shadow-sm border-0 p-3 h-100">
<i class="fas fa-file-alt fa-3x text-primary mb-3"></i>
<h6><?= $this->lang->line('birth_certificate'); ?></h6>
</div>
</div>

<div class="col-md-4 col-lg-2 mb-4">
<div class="card text-center shadow-sm border-0 p-3 h-100">
<i class="fas fa-user fa-3x text-success mb-3"></i>
<h6><?= $this->lang->line('death_certificate'); ?></h6>
</div>
</div>

<div class="col-md-4 col-lg-2 mb-4">
<div class="card text-center shadow-sm border-0 p-3 h-100">
<i class="fas fa-home fa-3x text-danger mb-3"></i>
<h6><?= $this->lang->line('property_tax'); ?></h6>
</div>
</div>

<div class="col-md-4 col-lg-2 mb-4">
<div class="card text-center shadow-sm border-0 p-3 h-100">
<i class="fas fa-hand-holding-water fa-3x text-info mb-3"></i>
<h6><?= $this->lang->line('water_tax'); ?></h6>
</div>
</div>

<div class="col-md-4 col-lg-2 mb-4">
<div class="card text-center shadow-sm border-0 p-3 h-100">
<i class="fas fa-bullhorn fa-3x text-warning mb-3"></i>
<h6><?= $this->lang->line('complaints'); ?></h6>
</div>
</div>

<div class="col-md-4 col-lg-2 mb-4">
<div class="card text-center shadow-sm border-0 p-3 h-100">
<i class="fas fa-phone fa-3x text-secondary mb-3"></i>
<h6><?= $this->lang->line('emergency'); ?></h6>
</div>
</div>

</div>

</div>

</section>

<!-- =====================================================
ABOUT NAGAR PANCHAYAT
===================================================== -->

<section class="py-5">

    <div class="container">

        <!-- Section Heading -->

        <div class="section-title">

            <h2><?= $this->lang->line('about_np'); ?></h2>

<p>
<?= $this->lang->line('about_heading'); ?>
</p>

        </div>

        <div class="row align-items-stretch">

            <!-- Image -->

            <div class="col-lg-6 mb-4">

                <img src="<?= base_url('assets/img/about.jpg'); ?>"
                     class="img-fluid rounded shadow w-100 h-100"
                     style="object-fit:cover; min-height:420px;">

            </div>

            <!-- About Card -->

            <div class="col-lg-6 mb-4">

                <div class="card shadow border-0 h-100">

                    <div class="card-body p-5 d-flex flex-column justify-content-center">

                        <h3 class="fw-bold mb-4">
                            <?= $this->lang->line('welcome_np'); ?>
                        </h3>
                        <p>

<?= $this->lang->line('about_para1'); ?>

</p>

                        <p>

<?= $this->lang->line('about_para2'); ?>

</p>

                        <div class="row mt-4">

                            <div class="col-6 mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <?= $this->lang->line('digital_governance'); ?>
                            </div>

                            <div class="col-6 mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <?= $this->lang->line('public_welfare'); ?>
                            </div>

                            <div class="col-6 mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <?= $this->lang->line('clean_city'); ?>
                            </div>

                            <div class="col-6 mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <?= $this->lang->line('online_services'); ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =====================================================
MESSAGE FROM OFFICIALS
===================================================== -->

<section class="py-5 bg-light">

<div class="container">

<div class="section-title">

<h2><?= $this->lang->line('official_message'); ?></h2>

<p>
<?= $this->lang->line('official_subtitle'); ?>
</p>

</div>

<div class="row">

<div class="col-lg-6 mb-4">

<div class="card shadow border-0 h-100">

<div class="card-body text-center p-5">

<img src="<?= base_url('assets/img/chairman.jpg');?>"
class="rounded-circle shadow mb-4"
style="width:180px;height:180px;object-fit:cover;">

<h4 class="fw-bold">

<?= $this->lang->line('chairman'); ?>

</h4>

<p class="text-primary fw-semibold">

<?= $this->lang->line('website_name'); ?>

</p>

<hr>

<p>

<?= $this->lang->line('chairman_msg'); ?>

</p>

</div>

</div>

</div>

<div class="col-lg-6 mb-4">

<div class="card shadow border-0 h-100">

<div class="card-body text-center p-5">

<img src="<?= base_url('assets/img/eo.jpg');?>"
class="rounded-circle shadow mb-4"
style="width:180px;height:180px;object-fit:cover;">

<h4 class="fw-bold">

<?= $this->lang->line('executive_officer'); ?>

</h4>

<p class="text-primary fw-semibold">

<?= $this->lang->line('website_name'); ?>

</p>

<hr>

<p>

<?= $this->lang->line('eo_msg'); ?>

</p>

</div>

</div>

</div>

</div>

</div>

</section>


<!-- =====================================================
LATEST NEWS
===================================================== -->

<section class="py-5">

<div class="container">

<div class="section-title">

<h2><?= $this->lang->line('latest_updates'); ?></h2>

<p><?= $this->lang->line('latest_news_sub'); ?></p>

</div>

<div class="row align-items-stretch">

<!-- Latest News -->

<div class="col-lg-8 mb-4">

<div class="card shadow border-0 h-100">

<div class="card-header bg-primary text-white">

<h5 class="mb-0">

<?= $this->lang->line('latest_updates'); ?>

</h5>

</div>

<div class="list-group list-group-flush">

<?php if(!empty($news)): ?>

<?php foreach($news as $row): ?>

<a href="<?= base_url('index.php'); ?>" class="list-group-item list-group-item-action py-3">

📢

<?php

$lang = $this->session->userdata('site_lang');

echo ($lang == 'hindi')
        ? $row->title_hi
        : $row->title_en;

?>

<span class="badge bg-danger float-end">

<?= date('d M Y', strtotime($row->news_date)); ?>

</span>

</a>

<?php endforeach; ?>

<?php else: ?>

<div class="p-4 text-center text-muted">

<?= $this->lang->line('no_news_available'); ?>

</div>

<?php endif; ?>

</div>

</div>

</div>

<!-- Important Links -->

<div class="col-lg-4 mb-4">

<div class="card shadow border-0 h-100">

<div class="card-header bg-primary text-white">

<h5 class="mb-0">

<?= $this->lang->line('important_links'); ?>

</h5>

</div>

<div class="card-body d-flex flex-column justify-content-center">

<a href="<?= site_url('services'); ?>" class="mb-3 text-decoration-none">

<i class="fas fa-angle-right me-2 text-primary"></i>

<?= $this->lang->line('birth_certificate'); ?>

</a>

<a href="<?= base_url('index.php/services'); ?>" class="mb-3 text-decoration-none">

<i class="fas fa-angle-right me-2 text-primary"></i>

<?= $this->lang->line('death_certificate'); ?>

</a>

<a href="<?= base_url('index.php/services'); ?>" class="mb-3 text-decoration-none">

<i class="fas fa-angle-right me-2 text-primary"></i>

<?= $this->lang->line('property_tax'); ?>

</a>

<a href="<?= base_url('index.php/contact'); ?>" class="mb-3 text-decoration-none">

<i class="fas fa-angle-right me-2 text-primary"></i>

<?= $this->lang->line('complaint_portal'); ?>

</a>

<a href="<?= base_url('index.php/schemes'); ?>" class="text-decoration-none">

<i class="fas fa-angle-right me-2 text-primary"></i>

<?= $this->lang->line('govt_orders'); ?>

</a>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- =====================================================
GOVERNMENT SCHEMES
===================================================== -->

<section class="py-5 bg-light">

<div class="container">

<div class="section-title">

<h2><?= $this->lang->line('government_schemes'); ?></h2>

<p><?= $this->lang->line('government_schemes_sub'); ?></p>

</div>

<div class="row g-4">

<div class="col-lg-3 col-md-6">

<div class="card text-center border-0 shadow h-100">

<div class="card-body p-4">

<i class="fas fa-home fa-3x text-primary mb-4"></i>

<h5 class="fw-bold">

<?= $this->lang->line('scheme1'); ?>

</h5>

<p class="small text-muted">

<?= $this->lang->line('scheme1_desc'); ?>

</p>

</div>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="card text-center border-0 shadow h-100">

<div class="card-body p-4">

<i class="fas fa-heartbeat fa-3x text-danger mb-4"></i>

<h5 class="fw-bold">

<?= $this->lang->line('scheme2'); ?>

</h5>

<p class="small text-muted">

<?= $this->lang->line('scheme2_desc'); ?>

</p>

</div>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="card text-center border-0 shadow h-100">

<div class="card-body p-4">

<i class="fas fa-graduation-cap fa-3x text-warning mb-4"></i>

<h5 class="fw-bold">

<?= $this->lang->line('scheme3'); ?>

</h5>

<p class="small text-muted">

<?= $this->lang->line('scheme3_desc'); ?>

</p>

</div>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="card text-center border-0 shadow h-100">

<div class="card-body p-4">

<i class="fas fa-leaf fa-3x text-success mb-4"></i>

<h5 class="fw-bold">

<?= $this->lang->line('scheme4'); ?>

</h5>

<p class="small text-muted">

<?= $this->lang->line('scheme4_desc'); ?>

</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- =====================================================
STATISTICS
===================================================== -->

<section class="py-5 bg-primary text-white">

<div class="container">

<div class="section-title text-white">

<h2 class="text-white"><?= $this->lang->line('statistics'); ?></h2>

<p class="text-light"><?= $this->lang->line('statistics_desc'); ?></p>

</div>

                <div class="row text-center g-4">

<?php foreach($statistics as $row): ?>

<div class="col-lg-3 col-md-6">

<div class="card bg-transparent border-0 text-white">

<i class="fas <?= $row->icon;?> fa-3x mb-3"></i>

<h1><?= $row->number;?></h1>

<h5><?= $row->title;?></h5>

</div>

</div>

<?php endforeach; ?>

</div>

                </div>

                </section>



<!-- =====================================================
PHOTO GALLERY
===================================================== -->

<section class="py-5">

<div class="container">

<div class="section-title">

<h2><?= $this->lang->line('gallery'); ?></h2>

<p><?= $this->lang->line('gallery_desc'); ?></p>

</div>

<div class="row g-4">

<?php foreach($gallery as $row):
    $gallery_title = ($lang == 'hindi' && !empty($row->title_hi))
        ? $row->title_hi
        : (!empty($row->title_en) ? $row->title_en : $row->title);
?>

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow">

<img src="<?= !empty($row->image) ? base_url('uploads/gallery/' . $row->image) : base_url('assets/img/default-gallery.jpg'); ?>"
class="img-fluid gallery-img" alt="<?= !empty($gallery_title) ? $gallery_title : $this->lang->line('gallery_image_alt'); ?>">

</div>

</div>

<?php endforeach;?>

</div>

</div>

</section>



<!-- =====================================================
DEPARTMENTS
===================================================== -->

<section class="py-5 bg-light">

<div class="container">

<div class="section-title">

<h2><?= $this->lang->line('departments'); ?></h2>

<p><?= $this->lang->line('department_desc'); ?></p>

</div>

<div class="row g-4">

<?php if(!empty($departments)): ?>
<?php foreach($departments as $row): ?>

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow h-100 text-center">

<div class="card-body">

<i class="fas <?= $row->icon;?> fa-3x text-primary mb-3"></i>

<?php
    $dept_name = ($lang == 'hindi' && !empty($row->department_name_hi))
        ? $row->department_name_hi
        : (!empty($row->department_name_en) ? $row->department_name_en : $row->department_name);

    $dept_desc = ($lang == 'hindi' && !empty($row->description_hi))
        ? $row->description_hi
        : (!empty($row->description_en) ? $row->description_en : $row->description);
?>

<h5><?= $dept_name;?></h5>

<p><?= $dept_desc;?></p>

</div>

</div>

</div>

<?php endforeach; ?>
<?php else: ?>
<div class="col-12 text-center text-muted py-3">
<?= $this->lang->line('no_departments_available'); ?>
</div>
<?php endif; ?>

</div>

</div>

</section>



<!-- =====================================================
EMERGENCY
===================================================== -->

<section class="py-5 bg-danger text-white">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-8">

<h2 class="fw-bold">

<?= $this->lang->line('emergency'); ?>

</h2>

<p class="mb-0">

<?= $this->lang->line('emergency_desc'); ?>

</p>

</div>

<div class="col-lg-4 text-lg-end">

<h1 class="display-4 fw-bold">

<?= $this->lang->line('helpline_number'); ?>

</h1>

</div>

</div>

</div>

</section>