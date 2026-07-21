<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-4">
        <h5 class="fw-bold mb-3">Add Statistic</h5>
        <form method="post" action="<?= site_url('admin/statistics/save'); ?>">
            <input type="hidden" name="id" value="<?= !empty($item) && isset($item->id) ? $item->id : ''; ?>">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= (!empty($item) && is_array($item) ? (array_key_exists('title', $item) ? $item['title'] : '') : (!empty($item) && property_exists($item, 'title') ? $item->title : '')); ?>" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Value</label>
                    <input type="text" name="value" class="form-control" value="<?= (!empty($item) && is_array($item) ? (array_key_exists('value', $item) ? $item['value'] : '') : (!empty($item) && property_exists($item, 'value') ? $item->value : '')); ?>" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control" value="<?= (!empty($item) && is_array($item) ? (array_key_exists('icon', $item) ? $item['icon'] : '') : (!empty($item) && property_exists($item, 'icon') ? $item->icon : '')); ?>" placeholder="users">
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
        <h5 class="fw-bold mb-3">Statistics List</h5>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead><tr><th>#</th><th>Title</th><th>Value</th><th>Action</th></tr></thead>
                <tbody>
                    <?php if (!empty($items)) : foreach ($items as $item) : ?>
                        <tr>
                            <td><?= is_array($item) ? (array_key_exists('id', $item) ? $item['id'] : '') : (property_exists($item, 'id') ? $item->id : ''); ?></td>
                            <td><?= is_array($item) ? (array_key_exists('title', $item) ? $item['title'] : '') : (property_exists($item, 'title') ? $item->title : ''); ?></td>
                            <td><?= is_array($item) ? (array_key_exists('value', $item) ? $item['value'] : '') : (property_exists($item, 'value') ? $item->value : ''); ?></td>
                            <td>
                                <a href="<?= site_url('admin/statistics/edit/' . (is_array($item) ? (array_key_exists('id', $item) ? $item['id'] : '') : (property_exists($item, 'id') ? $item->id : ''))); ?>" class="btn btn-outline-primary btn-sm me-2">Edit</a>
                                <a href="<?= site_url('admin/statistics/delete/' . (is_array($item) ? (array_key_exists('id', $item) ? $item['id'] : '') : (property_exists($item, 'id') ? $item->id : ''))); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this statistic?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; else : ?>
                        <tr><td colspan="4" class="text-center text-muted">No statistics added yet.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
