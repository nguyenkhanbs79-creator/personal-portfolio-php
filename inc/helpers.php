<?php

$config = require __DIR__ . '/config.php';
<<<<<<< ours

function get_config(string $key, $default = null)
=======
$site = $config['site'] ?? [];

function config(string $key, $default = null)
>>>>>>> theirs
{
    global $config;
    return $config[$key] ?? $default;
}

<<<<<<< ours
function base_url(string $path = ''): string
{
    $base = rtrim(get_config('base_url', ''), '/');
    if ($base === '') {
        return '/' . ltrim($path, '/');
    }

    return $base . '/' . ltrim($path, '/');
}

function asset_url(string $path = ''): string
{
    if ($path === '') {
        return '';
=======
function site(string $key, $default = null)
{
    global $site;
    return $site[$key] ?? $default;
}

function base_url(string $path = ''): string
{
    $base = rtrim((string) config('base_url', ''), '/');
    if ($base === '') {
        $base = '';
    }

    $path = ltrim($path, '/');

    if ($base === '') {
        if ($path === '') {
            return '/';
        }

        return '/' . $path;
    }

    if ($path === '') {
        return $base;
    }

    return $base . '/' . $path;
}

function url(string $path = ''): string
{
    $path = (string) $path;

    if ($path === '' || $path === '/') {
        return base_url();
    }

    if ($path[0] === '#') {
        return rtrim(base_url(), '/') . $path;
    }

    return base_url($path);
}

function asset(string $path = ''): string
{
    if ($path === '') {
        return base_url('assets');
>>>>>>> theirs
    }

    if (preg_match('#^https?://#i', $path)) {
        return $path;
    }

<<<<<<< ours
    return base_url($path);
}

=======
    $path = ltrim($path, '/');
    if (strpos($path, 'assets/') !== 0) {
        $path = 'assets/' . $path;
    }

    return base_url($path);
}

function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

>>>>>>> theirs
function view_path(string $page): string
{
    return __DIR__ . '/../pages/' . $page . '.php';
}

function render(string $page, array $data = []): void
{
    extract($data, EXTR_SKIP);
    include __DIR__ . '/header.php';
    include view_path($page);
    include __DIR__ . '/footer.php';
}

function is_active(string $page, string $current): string
{
    return $page === $current ? 'active' : '';
}
<<<<<<< ours

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

=======
>>>>>>> theirs
