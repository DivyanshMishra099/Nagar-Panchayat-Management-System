<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2><?= $this->lang->line('notice'); ?></h2>
            <p><?= $this->lang->line('notice_description'); ?></p>
        </div>
        <div class="card border-0 shadow-sm">
            <div class="list-group list-group-flush">
                <?php $notices = array(
                    $this->lang->line('notice1'),
                    $this->lang->line('notice2'),
                    $this->lang->line('notice3'),
                    $this->lang->line('notice4'),
                    $this->lang->line('notice5')
                ); ?>
                <?php foreach($notices as $notice): ?>
                    <div class="list-group-item py-3">
                        <i class="fas fa-bullhorn text-warning me-2"></i>
                        <?= $notice; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
