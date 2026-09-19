<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | Simple POS</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="<?= base_url('/') ?>">POS</a>
        <nav aria-label="Main navigation">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
        </nav>
    </div>
</header>
<main class="container">