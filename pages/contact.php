<section class="contact-hero py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-5 fw-bold">Liên hệ</h1>
                <p class="lead mt-3">Hãy để lại lời nhắn, tôi sẽ phản hồi sớm nhất có thể. Tôi luôn sẵn sàng cho những dự án thú vị!</p>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card glass-card h-100">
                    <div class="card-body p-4 p-lg-5">
                        <h2 class="section-title h3 mb-4">Thông tin</h2>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="fa-solid fa-envelope me-2 text-primary"></i><span class="fw-semibold">Email:</span> owner@example.com</li>
                            <li class="mb-3"><i class="fa-solid fa-location-dot me-2 text-primary"></i>Hà Nội, Việt Nam</li>
                            <li class="mb-0"><i class="fa-solid fa-clock me-2 text-primary"></i>Luôn sẵn sàng từ 9h - 18h các ngày trong tuần.</li>
                        </ul>
                        <p class="mb-0">Bạn cũng có thể kết nối với tôi qua <a class="text-decoration-underline" href="https://www.linkedin.com" target="_blank" rel="noopener">LinkedIn</a> hoặc <a class="text-decoration-underline" href="https://github.com/VietHQ2k3" target="_blank" rel="noopener">GitHub</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4 p-lg-5">
                        <h2 class="section-title h3 mb-4">Gửi tin nhắn</h2>
                        <form id="contactForm" class="needs-validation" novalidate data-endpoint="<?= escape(base_url('actions/contact.php')) ?>">
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nguyễn Văn A" required>
                                <div class="invalid-feedback">Vui lòng nhập họ và tên.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                                <div class="invalid-feedback">Vui lòng nhập email hợp lệ.</div>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Nội dung</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Lời nhắn của bạn" required></textarea>
                                <div class="invalid-feedback">Vui lòng nhập nội dung tin nhắn.</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">Gửi đi</button>
                            </div>
                        </form>
                        <div id="formAlert" class="alert mt-4 d-none" role="alert"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
