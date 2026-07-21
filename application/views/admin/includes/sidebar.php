<aside class="sidebar">
    <div class="sidebar-header">
        <h3>Nagar Panchayat</h3>
        <p>Admin Panel</p>
    </div>

    <nav class="nav flex-column">
        <a href="<?= site_url('admin'); ?>" class="nav-link"><i class="fas fa-home me-2"></i> Dashboard</a>
        <a href="<?= site_url('admin/slider'); ?>" class="nav-link"><i class="fas fa-images me-2"></i> Slider</a>
        <a href="<?= site_url('admin/news'); ?>" class="nav-link"><i class="fas fa-newspaper me-2"></i> News</a>
        <a href="<?= site_url('admin/gallery'); ?>" class="nav-link"><i class="fas fa-photo-video me-2"></i> Gallery</a>
        <a href="<?= site_url('admin/departments'); ?>" class="nav-link"><i class="fas fa-building me-2"></i> Departments</a>
        <a href="<?= site_url('admin/statistics'); ?>" class="nav-link"><i class="fas fa-chart-bar me-2"></i> Statistics</a>
        <a href="<?= site_url('admin/contact'); ?>" class="nav-link"><i class="fas fa-phone me-2"></i> Contact</a>
        <a href="<?= site_url('admin/footer'); ?>" class="nav-link"><i class="fas fa-file-code me-2"></i> Footer</a>
    </nav>

    <div class="mt-auto px-3 pb-3 sidebar-actions">
        <a href="<?= base_url('index.php'); ?>" target="_blank" rel="noopener" class="btn btn-outline-info w-100 rounded-pill">
            <i class="fas fa-globe me-2"></i> Visit Website
        </a>
        <a href="<?= site_url('admin/logout'); ?>" class="btn btn-outline-light w-100 rounded-pill">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </div>
</aside>