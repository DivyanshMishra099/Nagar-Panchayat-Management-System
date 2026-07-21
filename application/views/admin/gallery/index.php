<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-4">
        <h5 class="fw-bold mb-3">Add Gallery Image</h5>
        <form method="post" action="<?= site_url('admin/gallery/save'); ?>" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Title (English)</label>
                    <input type="text" name="title_en" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Title (Hindi)</label>
                    <input type="text" name="title_hi" class="form-control">
                </div>
                <div class="col-12">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm border-0 rounded-4 mt-4">
    <div class="card-body p-4">
        <h5 class="fw-bold mb-3">Gallery Items</h5>
        <div class="row g-3">
            <?php if (!empty($items)) : foreach ($items as $item) : ?>
                <div class="col-md-4">
                    <div class="border rounded-3 p-2">
                        <?php if (!empty($item->image)) : ?>
                            <img src="<?= base_url('uploads/gallery/' . $item->image); ?>" class="img-fluid rounded" style="height:180px; width:100%; object-fit:cover;">
                        <?php endif; ?>
                        <p class="mt-2 mb-2 fw-semibold"><?= isset($item->title_en) ? $item->title_en : $item->title; ?></p>
                        <a href="<?= site_url('admin/gallery/delete/' . $item->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('<?= $this->lang->line('delete_image_confirm'); ?>')"><?= $this->lang->line('delete'); ?></a>
                    </div>
                </div>
            <?php endforeach; else : ?>
                <div class="col-12 text-center text-muted">No gallery items yet.</div>
            <?php endif; ?>
        </div>
    </div>
</div>
