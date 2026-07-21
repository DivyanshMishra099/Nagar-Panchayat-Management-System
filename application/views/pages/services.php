<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2><?= $this->lang->line('services'); ?></h2>
            <p><?= $this->lang->line('service_section_desc'); ?></p>
        </div>
        <div class="row g-4">
            <?php $services = array(
                array('title'=>$this->lang->line('birth_certificate'),'icon'=>'fa-id-card'),
                array('title'=>$this->lang->line('death_certificate'),'icon'=>'fa-file-medical'),
                array('title'=>$this->lang->line('property_tax'),'icon'=>'fa-home'),
                array('title'=>$this->lang->line('complaints'),'icon'=>'fa-exclamation-triangle')
            ); ?>
            <?php foreach($services as $service): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100 text-center p-3">
                        <div class="card-body">
                            <i class="fas <?= $service['icon']; ?> fa-3x text-success mb-3"></i>
                            <h5><?= $service['title']; ?></h5>
                            <p class="text-muted mb-0"><?= $this->lang->line('service_delivery_desc'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
