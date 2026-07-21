<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-bold mb-0">Add Slider</h5>
        </div>
        <form method="post" action="<?= site_url('admin/slider/save'); ?>" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Title (English)</label>
                    <input type="text" name="title_en" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Title (Hindi)</label>
                    <input type="text" name="title_hi" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Subtitle (English)</label>
                    <input type="text" name="subtitle_en" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Subtitle (Hindi)</label>
                    <input type="text" name="subtitle_hi" class="form-control">
                </div>
                <div class="col-12">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">Save Slider</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm border-0 rounded-4 mt-4">
    <div class="card-body p-4">
        <h5 class="fw-bold mb-3">Existing Slides</h5>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($items)) : foreach ($items as $item) : ?>
                        <tr>
                            <td><?= $item->id; ?></td>
                            <td><?= isset($item->title_en) ? $item->title_en : $item->title; ?></td>
                            <td>
                                <?php if (!empty($item->image)) : ?>
                                    <img src="<?= base_url('uploads/slider/' . $item->image); ?>" alt="" style="height:50px; width:80px; object-fit:cover;">
                                <?php else : ?>
                                    <span class="text-muted">No image</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/slider/delete/' . $item->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this slide?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; else : ?>
                        <tr><td colspan="4" class="text-center text-muted">No slides found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
