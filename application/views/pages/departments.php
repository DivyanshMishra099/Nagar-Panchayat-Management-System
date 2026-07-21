<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2><?= $this->lang->line('departments'); ?></h2>
            <p><?= $this->lang->line('department_desc'); ?></p>
        </div>
        <div class="row g-4">
            <?php $items = array(
                array('icon'=>'fa-users-cog','title'=>$this->lang->line('administration'),'desc'=>$this->lang->line('administration_desc')),
                array('icon'=>'fa-hard-hat','title'=>$this->lang->line('public_works'),'desc'=>$this->lang->line('public_works_desc')),
                array('icon'=>'fa-trash','title'=>$this->lang->line('sanitation'),'desc'=>$this->lang->line('sanitation_desc')),
                array('icon'=>'fa-tint','title'=>$this->lang->line('water_supply'),'desc'=>$this->lang->line('water_supply_desc')),
                array('icon'=>'fa-tree','title'=>$this->lang->line('parks'),'desc'=>$this->lang->line('parks_desc')),
                array('icon'=>'fa-lightbulb','title'=>$this->lang->line('street_lights'),'desc'=>$this->lang->line('street_lights_desc')),
                array('icon'=>'fa-coins','title'=>$this->lang->line('tax_department'),'desc'=>$this->lang->line('tax_department_desc')),
                array('icon'=>'fa-hands-helping','title'=>$this->lang->line('citizen_welfare'),'desc'=>$this->lang->line('citizen_welfare_desc')),
            ); ?>
            <?php foreach($items as $item): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100 text-center p-3">
                        <div class="card-body">
                            <i class="fas <?= $item['icon']; ?> fa-3x text-primary mb-3"></i>
                            <h5><?= $item['title']; ?></h5>
                            <p class="text-muted mb-0"><?= $item['desc']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
