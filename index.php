<?php
require_once __DIR__ . '/inc/helpers.php';

$page = $_GET['page'] ?? 'home';
$page = trim($page, '/');
$page = $page === '' ? 'home' : $page;

$allowedPages = ['home', 'contact'];

if (!in_array($page, $allowedPages, true)) {
    $page = '404';
}

$data = [
    'currentPage' => $page,
];

if ($page === 'home') {
    $projects = require __DIR__ . '/data/projects.php';
    $data['projects'] = $projects;
    $data['pageTitle'] = 'Trang chủ - ' . get_config('site_name');
}

if ($page === 'contact') {
    $data['pageTitle'] = 'Liên hệ - ' . get_config('site_name');
    $data['metaDescription'] = 'Liên hệ với ' . get_config('site_name') . ' để trao đổi về dự án mới.';
}

if ($page === '404') {
    $data['pageTitle'] = 'Không tìm thấy trang - ' . get_config('site_name');
    $data['metaDescription'] = 'Trang bạn đang tìm kiếm không tồn tại.';
}

render($page, $data);
