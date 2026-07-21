<div class="row g-4 mb-4">
    <?php foreach ($stats as $stat) : ?>
        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0 rounded-4 h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-1"><?= $stat['title']; ?></h6>
                        <h2 class="mb-0 fw-bold"><?= $stat['value']; ?></h2>
                    </div>
                    <div class="stat-icon bg-<?= $stat['color']; ?>">
                        <i class="fas fa-<?= $stat['icon']; ?>"></i>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="row g-4">
    <div class="col-lg-8">
        <div class="card shadow-sm border-0 rounded-4 h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold mb-3">Welcome to the admin panel</h5>
                <p class="text-muted mb-4">Use this dashboard to update news, gallery items, and other public information for the Nagar Panchayat website.</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="border rounded-3 p-3 bg-light">
                            <h6 class="fw-bold">Quick management</h6>
                            <p class="text-muted mb-0">Keep the website content fresh, accurate, and up to date.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border rounded-3 p-3 bg-light">
                            <h6 class="fw-bold">Citizen services</h6>
                            <p class="text-muted mb-0">Publish updates and keep public information current instantly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card shadow-sm border-0 rounded-4 h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold mb-3">Quick links</h5>
                <ul class="list-group list-group-flush">
                    <?php foreach ($quick_links as $link) : ?>
                        <li class="list-group-item px-0">
                            <a href="<?= site_url($link['url']); ?>" class="text-decoration-none text-dark">
                                <i class="fas fa-arrow-right text-primary me-2"></i><?= $link['label']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>