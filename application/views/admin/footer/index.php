<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-4">
        <h5 class="fw-bold mb-3"><?= !empty($item) ? 'Edit Footer Entry' : 'Add New Footer Entry' ?></h5>
        <form method="post" action="<?= site_url('admin/footer/save'); ?>">
            <input type="hidden" name="id" value="<?= !empty($item) && isset($item->id) ? $item->id : ''; ?>">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= (!empty($item) && is_array($item) ? (array_key_exists('title', $item) ? $item['title'] : '') : (!empty($item) && property_exists($item, 'title') ? $item->title : '')); ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Content</label>
                    <textarea name="content" class="form-control" rows="5" required><?= (!empty($item) && is_array($item) ? (array_key_exists('content', $item) ? $item['content'] : '') : (!empty($item) && property_exists($item, 'content') ? $item->content : '')); ?></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm border-0 rounded-4 mt-4">
    <div class="card-body p-4">
        <h5 class="fw-bold mb-3">Footer Entries</h5>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead><tr><th>#</th><th>Title</th><th>Content Preview</th><th>Action</th></tr></thead>
                <tbody>
                    <?php if (!empty($items)) : foreach ($items as $footer_item) : ?>
                        <?php
                            $footer_id = is_array($footer_item) ? (array_key_exists('id', $footer_item) ? $footer_item['id'] : '') : (property_exists($footer_item, 'id') ? $footer_item->id : '');
                            $footer_title = is_array($footer_item) ? (array_key_exists('title', $footer_item) ? $footer_item['title'] : '') : (property_exists($footer_item, 'title') ? $footer_item->title : '');
                            $footer_content = is_array($footer_item) ? (array_key_exists('content', $footer_item) ? $footer_item['content'] : '') : (property_exists($footer_item, 'content') ? $footer_item->content : '');
                        ?>
                        <tr>
                            <td><?= $footer_id ?></td>
                            <td><?= html_escape($footer_title) ?></td>
                            <td style="max-width: 420px;">
                                <?= nl2br(html_escape(mb_strimwidth($footer_content, 0, 140, '...'))) ?>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/footer/edit/' . $footer_id); ?>" class="btn btn-outline-primary btn-sm me-2">Edit</a>
                                <a href="<?= site_url('admin/footer/delete/' . $footer_id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this footer item?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; else : ?>
                        <tr><td colspan="4" class="text-center text-muted">No footer entries yet.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
