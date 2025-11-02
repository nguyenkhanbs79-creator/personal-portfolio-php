<section id="home" class="hero-section py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <h1 class="display-5 fw-bold mb-3">Xin chào, tôi là <span class="text-gradient">Hoàng Quốc Việt</span></h1>
                <p class="lead">Front-end Developer với niềm đam mê xây dựng trải nghiệm web sáng tạo, hiện đại và thân thiện với người dùng.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
<<<<<<< ours
                    <a class="btn btn-primary btn-lg" href="#projects">Xem dự án</a>
                    <a class="btn btn-outline-secondary btn-lg" href="<?= escape(base_url('contact')) ?>">Kết nối ngay</a>
=======
                    <a class="btn btn-primary btn-lg" href="<?= e(url('#projects')) ?>">Xem dự án</a>
                    <a class="btn btn-outline-secondary btn-lg" href="<?= e(url('contact')) ?>">Kết nối ngay</a>
>>>>>>> theirs
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center mb-4 mb-lg-0">
                <div class="hero-avatar shadow-lg">
<<<<<<< ours
                    <img src="<?= escape(asset_url('assets/images/tamphuc.webp')) ?>" class="img-fluid" alt="Ảnh đại diện" loading="lazy">
=======
                    <?php $avatar = trim((string) site('avatar', '')); ?>
                    <?php if ($avatar !== '') : ?>
                        <img src="<?= e(asset('images/' . $avatar)) ?>" class="img-fluid rounded-4" alt="Ảnh đại diện" loading="lazy">
                    <?php else : ?>
                        <div class="rounded-4 bg-light border d-flex align-items-center justify-content-center" style="height:140px"><span class="text-muted">No avatar</span></div>
                    <?php endif; ?>
>>>>>>> theirs
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section-divider py-5">
    <div class="container py-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="section-title">Giới thiệu</h2>
                <p class="mb-3">Tôi là sinh viên chuyên ngành Công nghệ thông tin, yêu thích việc biến ý tưởng thành sản phẩm kỹ thuật số có giá trị. Tôi tập trung vào trải nghiệm người dùng, hiệu năng và khả năng mở rộng.</p>
                <p class="mb-4">Bên cạnh việc viết code, tôi còn tham gia vào việc thiết kế giao diện, viết tài liệu kỹ thuật và làm việc nhóm với quy trình Agile.</p>
                <div class="d-flex gap-3">
<<<<<<< ours
                    <?php $cvLink = trim((string) get_config('cv_link', '')); ?>
                    <?php if ($cvLink !== '') : ?>
                        <a class="btn btn-outline-primary" href="<?= escape(asset_url($cvLink)) ?>" target="_blank" rel="noopener">Tải CV</a>
=======
                    <?php $cvLink = trim((string) config('cv_link', '')); ?>
                    <?php if ($cvLink !== '') : ?>
                        <a class="btn btn-outline-primary" href="<?= e(asset($cvLink)) ?>" target="_blank" rel="noopener">Tải CV</a>
>>>>>>> theirs
                    <?php else : ?>
                        <span class="btn btn-outline-secondary disabled" aria-disabled="true">CV đang cập nhật</span>
                    <?php endif; ?>
                    <a class="btn btn-link text-decoration-none" href="https://github.com/VietHQ2k3" target="_blank" rel="noopener">GitHub <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card glass-card h-100">
                    <div class="card-body">
                        <h3 class="h4 fw-bold mb-3">Thông tin nhanh</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fa-solid fa-location-dot me-2 text-primary"></i>Sống tại Hà Nội, Việt Nam</li>
                            <li class="mb-2"><i class="fa-solid fa-graduation-cap me-2 text-primary"></i>Sinh viên năm 3 CNTT</li>
                            <li class="mb-2"><i class="fa-solid fa-code me-2 text-primary"></i>Yêu thích HTML, CSS, PHP, JavaScript</li>
                            <li class="mb-0"><i class="fa-solid fa-language me-2 text-primary"></i>Tiếng Việt (bản địa), Tiếng Anh (IELTS 6.5)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="py-5">
    <div class="container py-4">
        <h2 class="section-title text-center">Kỹ năng</h2>
        <p class="section-subtitle text-center">Tổng hợp những kỹ năng kỹ thuật và mềm mà tôi tích lũy trong quá trình học tập và làm việc.</p>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mt-4">
            <div class="col">
                <div class="skill-card h-100 text-center p-4">
                    <i class="fa-solid fa-code fa-2x text-primary mb-3"></i>
                    <h3 class="h5 fw-bold">Front-end</h3>
                    <p>Thành thạo HTML5, CSS3, Bootstrap 5, JavaScript ES6+, tối ưu UI/UX.</p>
                </div>
            </div>
            <div class="col">
                <div class="skill-card h-100 text-center p-4">
                    <i class="fa-solid fa-database fa-2x text-primary mb-3"></i>
                    <h3 class="h5 fw-bold">Back-end</h3>
                    <p>Xây dựng API với PHP thuần, MySQL, quản lý phiên và bảo mật cơ bản.</p>
                </div>
            </div>
            <div class="col">
                <div class="skill-card h-100 text-center p-4">
                    <i class="fa-solid fa-people-group fa-2x text-primary mb-3"></i>
                    <h3 class="h5 fw-bold">Teamwork</h3>
                    <p>Kỹ năng giao tiếp, làm việc nhóm Agile/Scrum, thích nghi nhanh với yêu cầu mới.</p>
                </div>
            </div>
            <div class="col">
                <div class="skill-card h-100 text-center p-4">
                    <i class="fa-solid fa-lightbulb fa-2x text-primary mb-3"></i>
                    <h3 class="h5 fw-bold">Sáng tạo</h3>
                    <p>Luôn tìm kiếm giải pháp mới, cải thiện trải nghiệm người dùng và quy trình phát triển.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="section-divider py-5">
    <div class="container py-4">
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-4 gap-3">
            <div>
                <h2 class="section-title mb-2">Dự án nổi bật</h2>
                <p class="section-subtitle mb-0">Các dự án thực tế tôi đã thực hiện hoặc tham gia, tập trung vào trải nghiệm người dùng và hiệu suất.</p>
            </div>
            <a class="btn btn-outline-primary" href="https://github.com/VietHQ2k3" target="_blank" rel="noopener">Xem thêm trên GitHub</a>
        </div>
        <div class="row g-4">
<<<<<<< ours
            <?php foreach ($projects as $project) : ?>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card h-100">
                        <div class="project-thumb">
                            <?php $projectImg = $project['img'] ?? ''; ?>
                            <?php if (!empty($projectImg)) : ?>
                                <img src="<?= escape(asset_url($projectImg)) ?>" class="img-fluid" alt="<?= escape($project['title']) ?>" loading="lazy">
=======
            <?php foreach ($projects as $p) : ?>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card h-100">
                        <div class="project-thumb">
                            <?php if (!empty($p['img'])) : ?>
                                <img src="<?= e(asset('images/' . $p['img'])) ?>" class="card-img-top" alt="<?= e($p['title']) ?>" loading="lazy">
>>>>>>> theirs
                            <?php else : ?>
                                <div class="d-flex align-items-center justify-content-center bg-light" style="height: 220px;">
                                    <span class="text-muted">Chưa có hình ảnh</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="project-body">
<<<<<<< ours
                            <h3 class="h5 fw-bold mb-2"><?= escape($project['title']) ?></h3>
                            <p class="mb-3"><?= escape($project['desc']) ?></p>
                            <ul class="list-inline mb-3 small text-muted">
                                <?php foreach ($project['tech'] as $tech) : ?>
                                    <li class="list-inline-item badge text-bg-secondary fw-normal"><?= escape($tech) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="d-flex gap-2">
                                <?php if (!empty($project['link'])) : ?>
                                    <a class="btn btn-sm btn-primary" href="<?= escape($project['link']) ?>" target="_blank" rel="noopener">Xem demo</a>
                                <?php endif; ?>
                                <?php if (!empty($project['repo'])) : ?>
                                    <a class="btn btn-sm btn-outline-secondary" href="<?= escape($project['repo']) ?>" target="_blank" rel="noopener">Source code</a>
=======
                            <h3 class="h5 fw-bold mb-2"><?= e($p['title']) ?></h3>
                            <p class="mb-3"><?= e($p['desc']) ?></p>
                            <ul class="list-inline mb-3 small text-muted">
                                <?php foreach ($p['tech'] as $tech) : ?>
                                    <li class="list-inline-item badge text-bg-secondary fw-normal"><?= e($tech) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="d-flex gap-2">
                                <?php if (!empty($p['link'])) : ?>
                                    <a class="btn btn-sm btn-primary" href="<?= e($p['link']) ?>" target="_blank" rel="noopener">Xem demo</a>
                                <?php endif; ?>
                                <?php if (!empty($p['repo'])) : ?>
                                    <a class="btn btn-sm btn-outline-secondary" href="<?= e($p['repo']) ?>" target="_blank" rel="noopener">Source code</a>
>>>>>>> theirs
                                <?php endif; ?>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section py-5">
    <div class="container text-center py-4">
        <h2 class="section-title">Hợp tác cùng tôi</h2>
        <p class="section-subtitle mx-auto">Bạn có ý tưởng thú vị hoặc muốn trao đổi về cơ hội làm việc? Tôi luôn sẵn sàng lắng nghe!</p>
<<<<<<< ours
        <a class="btn btn-primary btn-lg" href="<?= escape(base_url('contact')) ?>">Liên hệ ngay</a>
=======
        <a class="btn btn-primary btn-lg" href="<?= e(url('contact')) ?>">Liên hệ ngay</a>
>>>>>>> theirs
    </div>
</section>
