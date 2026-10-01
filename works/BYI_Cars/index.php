<?php
require_once __DIR__ . '/config.php';
$cars = $pdo->query("SELECT * FROM cars ORDER BY featured DESC, id ASC")->fetchAll();
$hero = $cars[0] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BYI Motors — Beyond the Drive</title>
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
</head>
<body>
<div class="noise"></div>
<header class="nav">
  <a class="brand" href="index.php">
    <span class="jc-mark">JC</span><span><b>BYI</b><small>MOTORS</small></span>
  </a>
  <nav>
    <a href="#fleet">Fleet</a><a href="#experience">Experience</a><a href="#about">About</a><a href="contact.php">Contact</a>
  </nav>
  <a class="nav-btn" href="#fleet">Explore Cars <span>↗</span></a>
</header>

<main>
<section class="hero">
  <div id="hero3d" class="hero-canvas"></div>
  <div class="hero-copy">
    <p class="eyebrow">JC × BYI AUTOMOTIVE</p>
    <h1>DRIVE<br><em>BEYOND.</em></h1>
    <p class="hero-text">Precision engineered automobiles for people who refuse ordinary. Discover the new generation of BYI performance.</p>
    <div class="hero-actions"><a class="primary" href="#fleet">Discover the fleet</a><a class="ghost" href="#experience">The BYI experience <span>↓</span></a></div>
  </div>
  <div class="hero-stat"><strong>01</strong><span>/</span><small>01 — SIGNATURE<br>PERFORMANCE</small></div>
  <div class="scroll">SCROLL TO EXPLORE <span>↓</span></div>
</section>

<section id="fleet" class="fleet section">
  <div class="section-head"><div><p class="eyebrow">THE COLLECTION</p><h2>Built to <em>move</em> you.</h2></div><p>Every BYI is a statement of design, engineering and presence. Explore the collection.</p></div>
  <div class="car-grid">
  <?php foreach($cars as $car): ?>
    <article class="car-card">
      <div class="car-image" style="background-image:url('<?=htmlspecialchars($car['image_url'])?>')">
        <span class="tag"><?=htmlspecialchars($car['category'])?></span><span class="arrow">↗</span>
      </div>
      <div class="car-info"><div><h3><?=htmlspecialchars($car['name'])?></h3><p><?=htmlspecialchars($car['tagline'])?></p></div><div class="spec"><b><?=htmlspecialchars($car['power_hp'])?> HP</b><small><?=htmlspecialchars($car['drive'])?></small></div></div>
    </article>
  <?php endforeach; ?>
  </div>
</section>

<section id="experience" class="experience section">
  <div class="experience-orb" id="orb"></div>
  <div class="experience-copy"><p class="eyebrow">THE BYI EXPERIENCE</p><h2>More than a car.<br><em>A new dimension.</em></h2><p>From the first glance to the first acceleration, every detail is designed around one idea: motion should feel extraordinary.</p><a class="primary" href="contact.php">Book a private viewing</a></div>
  <div class="feature-list">
    <div><span>01</span><b>SCULPTED AERODYNAMICS</b><p>Air becomes part of the design, reducing drag while creating unmistakable presence.</p></div>
    <div><span>02</span><b>INTELLIGENT COCKPIT</b><p>A driver-first digital environment that keeps every control exactly where it belongs.</p></div>
    <div><span>03</span><b>PURE PERFORMANCE</b><p>Responsive power delivery engineered for confidence, control and unforgettable roads.</p></div>
  </div>
</section>

<section id="about" class="manifesto section">
  <p class="eyebrow">THE BYI MANIFESTO</p>
  <h2>“Ordinary gets you there.<br><em>Extraordinary changes the journey.</em>”</h2>
  <div class="manifesto-bottom"><span>BYI / JC COLLECTION</span><span>EST. 2026</span></div>
</section>
</main>
<footer><div class="brand"><span class="jc-mark">JC</span><span><b>BYI</b><small>MOTORS</small></span></div><p>© 2026 BYI Motors. Crafted for the road ahead.</p><a href="contact.php">Contact →</a></footer>
<script src="assets/js/app.js"></script>

<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
</body>
</html>