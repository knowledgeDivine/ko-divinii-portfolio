<?php
require_once __DIR__ . '/config.php';
$profile = $pdo->query("SELECT * FROM profile LIMIT 1")->fetch(PDO::FETCH_ASSOC);
$projects = $pdo->query("SELECT * FROM projects ORDER BY featured DESC, id DESC")->fetchAll(PDO::FETCH_ASSOC);
$skills = $pdo->query("SELECT * FROM skills ORDER BY sort_order ASC")->fetchAll(PDO::FETCH_ASSOC);
$experience = $pdo->query("SELECT * FROM experience ORDER BY start_year DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($profile['name'] ?? 'K.O DIVINII') ?> — CV & Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="cursor-glow"></div>
<header class="nav">
  <a href="#home" class="brand"><span class="logo">KO</span><span>K.O <b>DIVINII</b></span></a>
  <button class="menu" onclick="document.body.classList.toggle('nav-open')">☰</button>
  <nav>
    <a href="#home">Home</a><a href="#about">About</a><a href="#experience">Experience</a><a href="#works">Works</a><a href="#skills">Skills</a><a href="#contact">Contact</a>
  </nav>
  <a href="#contact" class="nav-btn">Let's Talk ↗</a>
</header>

<main>
<section id="home" class="hero">
  <div class="hero-bg"></div>
  <div class="hero-copy">
    <div class="eyebrow">CREATIVE PROFESSIONAL • PORTFOLIO</div>
    <h1>Ideas into<br><span>impact.</span></h1>
    <p class="lead"><?= htmlspecialchars($profile['tagline'] ?? 'A creative professional building bold digital experiences, brands and ideas.') ?></p>
    <div class="hero-actions"><a href="#works" class="btn primary">Explore My Work ↗</a><a href="assets/images/cv.pdf" class="btn ghost" target="_blank">View CV ↓</a></div>
    <div class="mini-stats"><div><strong><?= count($projects) ?>+</strong><span>Projects</span></div><div><strong><?= count($skills) ?>+</strong><span>Skills</span></div><div><strong>100%</strong><span>Commitment</span></div></div>
  </div>
  <div class="hero-card">
    <div class="card-orbit"></div>
    <div class="portrait-placeholder">KO</div>
    <div class="floating-tag tag1">CREATIVE</div><div class="floating-tag tag2">DIGITAL</div><div class="floating-tag tag3">VISION</div>
  </div>
</section>

<section id="about" class="section about">
  <div class="section-label">01 / ABOUT</div>
  <div class="two-col">
    <div><h2>More than a CV.<br><em>A personal brand.</em></h2></div>
    <div><p class="big-text"><?= nl2br(htmlspecialchars($profile['bio'] ?? 'Welcome to my portfolio. This space presents my background, capabilities, experience and selected work.')) ?></p><p>I believe strong work combines clarity, creativity and execution. Browse my selected projects below and get in touch if you would like to collaborate.</p></div>
  </div>
</section>

<section id="experience" class="section dark">
  <div class="section-label">02 / EXPERIENCE</div>
  <div class="two-col"><h2>Experience that<br><em>moves forward.</em></h2>
  <div class="timeline"><?php foreach($experience as $e): ?><article><span><?= htmlspecialchars($e['start_year']) ?> — <?= htmlspecialchars($e['end_year'] ?: 'PRESENT') ?></span><h3><?= htmlspecialchars($e['role']) ?></h3><h4><?= htmlspecialchars($e['company']) ?></h4><p><?= htmlspecialchars($e['description']) ?></p></article><?php endforeach; ?></div></div>
</section>

<section id="works" class="section works">
  <div class="section-label">03 / SELECTED WORKS</div>
  <div class="works-head"><h2>My <em>work.</em></h2><p>Drop your projects, websites, designs, documents and other work into the <code>/works</code> folder. Add project records through the database.</p></div>
  <div class="project-grid">
  <?php foreach($projects as $p): ?>
    <article class="project">
      <div class="project-image project-live"><span><?= htmlspecialchars($p['category']) ?></span><a href="<?= htmlspecialchars($p['link'] ?: '#') ?>" target="_blank" rel="noopener">↗</a><div class="live-mark">LIVE PROJECT</div><div class="project-monogram">KO</div></div>
      <div class="project-meta"><h3><?= htmlspecialchars($p['title']) ?></h3><p><?= htmlspecialchars($p['description']) ?></p><a class="project-open" href="<?= htmlspecialchars($p['link'] ?: '#') ?>" target="_blank" rel="noopener">OPEN WEBSITE ↗</a></div>
    </article>
  <?php endforeach; ?>
  </div>
</section>

<section id="skills" class="section skills dark">
  <div class="section-label">04 / SKILLS</div><div class="two-col"><h2>What I<br><em>bring.</em></h2><div class="skill-list">
  <?php foreach($skills as $s): ?><div class="skill"><div><b><?= htmlspecialchars($s['name']) ?></b><span><?= (int)$s['level'] ?>%</span></div><div class="bar"><i style="width:<?= (int)$s['level'] ?>%"></i></div></div><?php endforeach; ?>
  </div></div>
</section>

<section id="contact" class="section contact">
  <div class="section-label">05 / CONTACT</div><div class="contact-box"><div><h2>Let's create<br><em>something.</em></h2><p>Available for opportunities, collaborations and creative projects.</p></div>
  <div class="contact-links"><a href="mailto:<?= htmlspecialchars($profile['email'] ?? 'your@email.com') ?>"><?= htmlspecialchars($profile['email'] ?? 'your@email.com') ?> ↗</a><a href="tel:<?= htmlspecialchars($profile['phone'] ?? '') ?>"><?= htmlspecialchars($profile['phone'] ?? '+234 000 000 0000') ?></a><span><?= htmlspecialchars($profile['location'] ?? 'Lagos, Nigeria') ?></span></div></div>
</section>
</main>
<footer><div class="brand"><span class="logo">KO</span><span>K.O <b>DIVINII</b></span></div><span>© <?= date('Y') ?> K.O DIVINII. All rights reserved.</span><a href="#home">BACK TO TOP ↑</a></footer>
<script src="assets/js/app.js"></script>
</body></html>