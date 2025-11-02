<?php
<<<<<<< ours
/** @var string $pageTitle */
/** @var string $currentPage */
/** @var string $bodyClass */
$pageTitle = $pageTitle ?? get_config('site_title');
$metaDescription = $metaDescription ?? get_config('meta_description');
$metaKeywords = $metaKeywords ?? get_config('meta_keywords');
$ogImagePath = $ogImage ?? get_config('og_image');
$ogImageUrl = asset_url($ogImagePath);
$bodyClass = trim('page-' . ($currentPage ?? 'home') . ' ' . ($bodyClass ?? ''));
?>
<!DOCTYPE html>
=======
/** @var string|null $pageTitle */
/** @var string|null $pageDesc */
/** @var string|null $currentPage */
/** @var string|null $bodyClass */

$pageTitle = $pageTitle ?? site('title', 'Portfolio');
$pageDesc = $pageDesc ?? site('description', '');
$currentPage = $currentPage ?? 'home';
$bodyClass = trim('page-' . $currentPage . ' ' . ($bodyClass ?? ''));
$ogUrl = url($currentPage === 'home' ? '' : $currentPage);
$ogImage = site('avatar') ? asset('images/' . site('avatar')) : asset('images/favicon.png');
?>
<!doctype html>
>>>>>>> theirs
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< ours
    <title><?= escape($pageTitle) ?></title>
    <meta name="description" content="<?= escape($metaDescription) ?>">
    <?php if (!empty($metaKeywords)) : ?>
        <meta name="keywords" content="<?= escape($metaKeywords) ?>">
    <?php endif; ?>
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= escape($pageTitle) ?>">
    <meta property="og:description" content="<?= escape($metaDescription) ?>">
    <meta property="og:image" content="<?= escape($ogImageUrl) ?>">
    <link rel="icon" type="image/png" href="<?= escape(asset_url('assets/images/favicon.png')) ?>">
=======
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDesc) ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDesc) ?>">
    <meta property="og:url" content="<?= e($ogUrl) ?>">
    <meta property="og:image" content="<?= e($ogImage) ?>">
    <link rel="icon" href="<?= e(asset('images/favicon.png')) ?>">
    <script>
        (function () {
            try {
                window.__portfolioTheme = localStorage.getItem('portfolio-theme');
            } catch (error) {
                window.__portfolioTheme = null;
            }
        })();
    </script>
>>>>>>> theirs
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >
<<<<<<< ours
    <link rel="stylesheet" href="<?= escape(asset_url('assets/css/style.css')) ?>">
    <link rel="stylesheet" href="<?= escape(asset_url('assets/css/dark.css')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-RXf+QSDCUQs6qD0CPjaHgNsx3Rp3XIanFkFJxuxMxDPZWS9Vyuk3F7S3Uz7Dnk3a1JpN96CB2mu+qsYqS+8z0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="<?= escape($bodyClass) ?>">
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="<?= escape(base_url()) ?>"><?= escape(get_config('site_name')) ?></a>
=======
    <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
    <link rel="stylesheet" href="<?= e(asset('css/dark.css')) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-RXf+QSDCUQs6qD0CPjaHgNsx3Rp3XIanFkFJxuxMxDPZWS9Vyuk3F7S3Uz7Dnk3a1JpN96CB2mu+qsYqS+8z0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="<?= e($bodyClass) ?>">
<script>
    (function () {
        if (window.__portfolioTheme === 'dark') {
            document.body.classList.add('dark');
        }
    })();
</script>
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="<?= e(url()) ?>"><?= e(site('title', 'Portfolio')) ?></a>
>>>>>>> theirs
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<<<<<<< ours
                        <li class="nav-item"><a class="nav-link <?= escape(is_active('home', $currentPage ?? 'home')) ?>" href="<?= escape(base_url()) ?>">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= escape(base_url('#about')) ?>">Giới thiệu</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= escape(base_url('#skills')) ?>">Kỹ năng</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= escape(base_url('#projects')) ?>">Dự án</a></li>
                        <li class="nav-item"><a class="nav-link <?= escape(is_active('contact', $currentPage ?? 'home')) ?>" href="<?= escape(base_url('contact')) ?>">Liên hệ</a></li>
=======
                        <li class="nav-item"><a class="nav-link <?= e(is_active('home', $currentPage)) ?>" href="<?= e(url()) ?>">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= e(url('#about')) ?>">Giới thiệu</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= e(url('#skills')) ?>">Kỹ năng</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= e(url('#projects')) ?>">Dự án</a></li>
                        <li class="nav-item"><a class="nav-link <?= e(is_active('contact', $currentPage)) ?>" href="<?= e(url('contact')) ?>">Liên hệ</a></li>
>>>>>>> theirs
                    </ul>
                    <button class="btn btn-outline-light ms-lg-3" id="themeToggle" type="button" aria-label="Toggle theme">
                        <i class="fa-solid fa-moon"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <main class="site-main">
