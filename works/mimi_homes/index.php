
<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
<?php
require_once "config.php";
$page_title = "Find a Place Worth Coming Home To";
$featured = [];
$res = $conn->query("SELECT * FROM properties WHERE featured=1 ORDER BY id DESC LIMIT 3");
if ($res) while ($row = $res->fetch_assoc()) $featured[] = $row;
include "includes/header.php";
?>
<section class="hero">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="eyebrow">MIMI HOMES · EST. 2026</div>
    <h1>Find a place<br><em>worth coming home to.</em></h1>
    <p>Exceptional residences, prime land and refined investments — selected with intention.</p>
    <div class="hero-actions"><a class="btn btn-gold" href="properties.php">Explore Properties</a><a class="text-link" href="contact.php">Speak with an advisor →</a></div>
  </div>
  <div class="hero-stat"><strong>01</strong><span>Curated<br>collection</span></div>
</section>

<section class="search-card">
  <div><span class="label">I'M LOOKING FOR</span><strong>My next property</strong></div>
  <div><span class="label">LOCATION</span><strong>Lagos & beyond</strong></div>
  <div><span class="label">PROPERTY TYPE</span><strong>Any type</strong></div>
  <a class="btn btn-dark" href="properties.php">Search homes</a>
</section>

<section class="section intro">
  <div class="section-kicker">THE MIMI STANDARD</div>
  <div class="intro-grid"><h2>Real estate,<br><em>reimagined.</em></h2><div><p>We believe a home is more than an address. It is the setting for your next chapter. MIMI Homes brings together design-led residences, trusted opportunities and a personal service built around your ambitions.</p><a class="arrow-link" href="about.php">Discover MIMI Homes <span>↗</span></a></div></div>
</section>

<section class="section featured">
  <div class="section-head"><div><div class="section-kicker">CURATED FOR YOU</div><h2>Featured residences</h2></div><a class="arrow-link" href="properties.php">View all <span>↗</span></a></div>
  <div class="property-grid">
  <?php foreach ($featured as $p): ?>
    <article class="property-card">
      <a href="property.php?id=<?= (int)$p['id'] ?>" class="property-image" style="background-image:url('<?= htmlspecialchars($p['image']) ?>')"><span class="pill"><?= htmlspecialchars($p['type']) ?></span></a>
      <div class="property-body"><div><h3><?= htmlspecialchars($p['title']) ?></h3><p><?= htmlspecialchars($p['location']) ?></p></div><strong><?= htmlspecialchars($p['price']) ?></strong></div>
      <div class="property-meta"><span><?= (int)$p['beds'] ?> Beds</span><span><?= (int)$p['baths'] ?> Baths</span><span><?= number_format($p['area']) ?> sq ft</span></div>
    </article>
  <?php endforeach; ?>
  </div>
</section>

<section class="dark-banner"><div><div class="section-kicker light">PRIVATE CLIENT SERVICE</div><h2>Your next move deserves<br><em>the right guidance.</em></h2></div><a class="btn btn-outline" href="contact.php">Book a private consultation</a></section>
<?php include "includes/footer.php"; ?>
<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
