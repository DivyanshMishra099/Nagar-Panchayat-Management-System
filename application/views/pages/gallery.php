<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2><?= $this->lang->line('gallery'); ?></h2>
            <p><?= $this->lang->line('gallery_desc'); ?></p>
        </div>
        <div class="row g-4">
            <?php if (!empty($gallery)) : foreach ($gallery as $row) : ?>
                <?php if (!empty($row->image)) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm overflow-hidden">
                            <?php
                                $gallery_title = ($this->session->userdata('site_lang') == 'hindi' && !empty($row->title_hi))
                                    ? $row->title_hi
                                    : (!empty($row->title_en) ? $row->title_en : $row->title);
                            ?>
                            <img src="<?= base_url('uploads/gallery/' . $row->image); ?>" class="img-fluid" style="height:220px; object-fit:cover;" alt="<?= !empty($gallery_title) ? $gallery_title : $this->lang->line('gallery_image_alt'); ?>">
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; else : ?>
                <div class="col-12 text-center text-muted"><?= $this->lang->line('gallery_no_images'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>
