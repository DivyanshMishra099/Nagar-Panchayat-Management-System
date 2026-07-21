<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <img src="<?= base_url('assets/img/about.jpg'); ?>" class="card-img-top" style="height:320px; object-fit:cover;">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title">
                    <h2><?= $this->lang->line('about_np'); ?></h2>
                    <p><?= $this->lang->line('about_heading'); ?></p>
                </div>
                <p class="text-muted">
                    <?= $this->lang->line('about_para1'); ?>
                </p>
                <p class="text-muted">
                    <?= $this->lang->line('about_para2'); ?>
                </p>
                <div class="row g-3 mt-2">
                    <div class="col-md-6"><div class="border rounded p-3 bg-white"><i class="fas fa-check-circle text-success me-2"></i><?= $this->lang->line('digital_governance'); ?></div></div>
                    <div class="col-md-6"><div class="border rounded p-3 bg-white"><i class="fas fa-check-circle text-success me-2"></i><?= $this->lang->line('public_welfare'); ?></div></div>
                    <div class="col-md-6"><div class="border rounded p-3 bg-white"><i class="fas fa-check-circle text-success me-2"></i><?= $this->lang->line('clean_city'); ?></div></div>
                    <div class="col-md-6"><div class="border rounded p-3 bg-white"><i class="fas fa-check-circle text-success me-2"></i><?= $this->lang->line('online_services'); ?></div></div>
                </div>
            </div>
        </div>
    </div>
</section>
