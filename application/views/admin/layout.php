<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css'); ?>">
</head>
<body>
<div class="admin-wrapper">
    <?php $this->load->view('admin/includes/sidebar'); ?>

    <div class="admin-content">
        <header class="topbar">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-1"><?= !empty($data['page_title']) ? $data['page_title'] : 'Dashboard'; ?></h4>
                    <p class="text-muted mb-0">Welcome back, <?= $this->session->userdata('admin_username') ?: 'Admin'; ?></p>
                </div>
                <div class="topbar-actions">
                    <a href="<?= base_url('index.php'); ?>" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm rounded-pill">
                        <i class="fas fa-globe me-1"></i> Visit Website
                    </a>
                    <a href="<?= site_url('admin/logout'); ?>" class="btn btn-outline-danger btn-sm rounded-pill">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </a>
                </div>
            </div>
        </header>

        <main class="p-4">
            <?php $this->load->view($page, $data); ?>
        </main>
    </div>
</div>
</body>
</html>