<?php
require_once __DIR__ . '/config.php';
$pageTitle = $pageTitle ?? 'K.O. Divinii Golf Club';
$active = $active ?? 'home';
$success = flash('success');
$error = flash('error');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0b100d">
    <meta name="description" content="K.O. Divinii Golf Club — private golf, elevated hospitality, championship experiences.">
    <title><?= e($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
</head>
<body>
<div class="site-noise"></div>
<div class="cursor-glow" id="cursorGlow"></div>
<header class="topbar" id="topbar">
    <a href="index.php" class="brand" aria-label="K.O. Divinii Golf Club home">
        <span class="brand-mark"><img src="assets/img/jc-logo.svg" alt="JC club emblem"></span>
        <span class="brand-copy"><b>K.O. DIVINII</b><small>PRIVATE GOLF CLUB</small></span>
    </a>
    <nav class="nav" id="mainNav" aria-label="Primary navigation">
        <a class="<?= $active === 'home' ? 'is-active' : '' ?>" href="index.php">The Club</a>
        <a class="<?= $active === 'membership' ? 'is-active' : '' ?>" href="membership.php">Membership</a>
        <a class="<?= $active === 'golf' ? 'is-active' : '' ?>" href="book.php">Tee Time</a>
        <a class="<?= $active === 'events' ? 'is-active' : '' ?>" href="events.php">Club Life</a>
        <a class="<?= $active === 'contact' ? 'is-active' : '' ?>" href="contact.php">Contact</a>
    </nav>
    <a class="topbar-cta" href="book.php">Reserve a round <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
    <button class="menu-btn" id="menuBtn" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
</header>
<?php if ($success || $error): ?>
<div class="toast-wrap">
    <?php if ($success): ?><div class="toast success"><i class="fa-solid fa-circle-check"></i><?= e($success) ?></div><?php endif; ?>
    <?php if ($error): ?><div class="toast error"><i class="fa-solid fa-triangle-exclamation"></i><?= e($error) ?></div><?php endif; ?>
</div>
<?php endif; ?>
<main>

<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
