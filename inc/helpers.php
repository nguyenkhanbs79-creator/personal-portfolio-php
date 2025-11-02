<?php

$config = require __DIR__ . '/config.php';

function get_config(string $key, $default = null)
{
    global $config;
    return $config[$key] ?? $default;
}

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
    }

    if (preg_match('#^https?://#i', $path)) {
        return $path;
    }

    return base_url($path);
}

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

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

