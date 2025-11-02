    </main>
    <footer class="site-footer bg-dark text-white mt-auto">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6">
                    <h5 class="fw-bold mb-3">Về tôi</h5>
                    <p class="mb-0">Chào! Tôi là Việt, một nhà phát triển web đam mê sáng tạo. Tôi thích học các công nghệ mới giúp tăng năng suất và hiệu quả hơn.</p>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold mb-3">Kết nối</h5>
                    <ul class="list-unstyled d-flex gap-3 mb-0">
                        <li><a class="text-white" href="https://github.com/VietHQ2k3" target="_blank" rel="noopener"><i class="fa-brands fa-github fa-lg"></i><span class="visually-hidden">GitHub</span></a></li>
                        <li><a class="text-white" href="https://www.facebook.com/jn.red.7/" target="_blank" rel="noopener"><i class="fa-brands fa-facebook fa-lg"></i><span class="visually-hidden">Facebook</span></a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold mb-3">Xem CV</h5>
<<<<<<< ours
                    <?php $cvLink = trim((string) get_config('cv_link', '')); ?>
                    <?php if ($cvLink !== '') : ?>
                        <p class="mb-0">Bạn cần CV của tôi? <a class="text-white text-decoration-underline" href="<?= escape(asset_url($cvLink)) ?>" target="_blank" rel="noopener">Tải xuống tại đây</a>.</p>
=======
                    <?php $cvLink = trim((string) config('cv_link', '')); ?>
                    <?php if ($cvLink !== '') : ?>
                        <p class="mb-0">Bạn cần CV của tôi? <a class="text-white text-decoration-underline" href="<?= e(asset($cvLink)) ?>" target="_blank" rel="noopener">Tải xuống tại đây</a>.</p>
>>>>>>> theirs
                    <?php else : ?>
                        <p class="mb-0">CV đang được cập nhật. Vui lòng liên hệ trực tiếp để nhận bản mới nhất.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="bg-black py-3 text-center">
<<<<<<< ours
            <small>© <?= date('Y') ?> <?= escape(get_config('site_name')) ?>. All rights reserved.</small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= escape(asset_url('assets/js/main.js')) ?>" defer></script>
=======
            <small>© <?= date('Y') ?> <?= e(site('title', 'Portfolio')) ?>. All rights reserved.</small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= e(asset('js/main.js')) ?>" defer></script>
>>>>>>> theirs
</body>
</html>
