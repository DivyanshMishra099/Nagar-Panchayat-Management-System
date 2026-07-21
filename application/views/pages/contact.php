<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2><?= $this->lang->line('contact'); ?></h2>
            <p><?= $this->lang->line('contact_support_info'); ?></p>
        </div>
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm p-4">
                    <h4 class="mb-3">Get in touch</h4>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="<?= $this->lang->line('your_name'); ?>">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="<?= $this->lang->line('your_email'); ?>">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="<?= $this->lang->line('your_message'); ?>"></textarea>
                        </div>
                        <button class="btn btn-primary"><?= $this->lang->line('send_message'); ?></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h4 class="mb-3"><?= $this->lang->line('office_details'); ?></h4>
                    <p><i class="fas fa-map-marker-alt text-primary me-2"></i> <?= $this->lang->line('office_address'); ?></p>
                    <p><i class="fas fa-phone text-primary me-2"></i> <?= $this->lang->line('office_phone'); ?></p>
                    <p><i class="fas fa-envelope text-primary me-2"></i> <?= $this->lang->line('office_email'); ?></p>
                    <p><i class="fas fa-clock text-primary me-2"></i> <?= $this->lang->line('office_hours'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
