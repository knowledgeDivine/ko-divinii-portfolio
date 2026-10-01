<?php
require_once "config.php";

$games = [];
$result = $conn->query("SELECT * FROM games ORDER BY featured DESC, id DESC");
if ($result) {
    while ($row = $result->fetch_assoc()) $games[] = $row;
}

$news = [];
$result = $conn->query("SELECT * FROM news ORDER BY published_at DESC LIMIT 3");
if ($result) {
    while ($row = $result->fetch_assoc()) $news[] = $row;
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["newsletter_email"])) {
    $email = trim($_POST["newsletter_email"]);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("INSERT IGNORE INTO subscribers (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $message = "You're on the list. Welcome to K.O.";
    } else {
        $message = "Please enter a valid email address.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>K.O — Gaming Beyond Limits</title>
<meta name="description" content="K.O is a next-generation gaming company creating unforgettable worlds, competitive experiences and digital entertainment.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;600;700;800;900&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="assets/favicon.svg"><link rel="stylesheet" href="assets/style.css">

<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
</head>
<body>
<div class="cursor-glow"></div>

<header class="site-header">
  <a class="brand" href="#home" aria-label="K.O Gaming home">
    <span class="brand-mark"><span>K</span><b>O</b></span>
    <span class="brand-name">K.O<span>.</span></span>
  </a>
  <nav>
    <a href="#games">Games</a>
    <a href="#about">Studio</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
  </nav>
  <a class="header-btn" href="#games">Explore <span>↗</span></a>
  <button class="menu-btn" aria-label="Open menu">☰</button>
</header>

<main>
<section id="home" class="hero">
  <div class="hero-grid"></div>
  <div class="scanlines"></div>
  <div class="hero-copy">
    <div class="eyebrow"><span></span> K.O GAMING STUDIOS</div>
    <h1>PLAY<br><em>WITHOUT</em><br>LIMITS.</h1>
    <p>We build bold digital worlds, competitive experiences and games designed to leave a mark.</p>
    <div class="hero-actions">
      <a class="btn primary" href="#games">DISCOVER GAMES <span>→</span></a>
      <a class="btn ghost" href="#about">OUR STUDIO</a>
    </div>
  </div>
  <div class="hero-logo">
    <div class="logo-ring ring-one"></div>
    <div class="logo-ring ring-two"></div>
    <div class="ko-symbol"><span>K</span><strong>O</strong></div>
    <div class="orbit-dot"></div>
  </div>
  <div class="hero-stats">
    <div><strong>01</strong><span>Independent<br>Studio</span></div>
    <div><strong>∞</strong><span>Worlds<br>to explore</span></div>
    <div><strong>24/7</strong><span>Players<br>connected</span></div>
  </div>
  <div class="scroll-cue">SCROLL <span>↓</span></div>
</section>

<section id="games" class="section games-section">
  <div class="section-head">
    <div>
      <div class="eyebrow"><span></span> OUR UNIVERSE</div>
      <h2>GAMES THAT<br><em>HIT DIFFERENT.</em></h2>
    </div>
    <p>From high-intensity competition to cinematic adventures, K.O creates experiences built around the player.</p>
  </div>
  <div class="game-grid">
  <?php foreach ($games as $game): ?>
    <article class="game-card" style="--accent: <?php echo htmlspecialchars($game['accent']); ?>">
      <div class="game-art">
        <div class="art-noise"></div>
        <div class="game-index">0<?php echo (int)$game['id']; ?></div>
        <div class="art-symbol"><?php echo htmlspecialchars($game['symbol']); ?></div>
        <span class="status"><?php echo htmlspecialchars($game['status']); ?></span>
      </div>
      <div class="game-info">
        <div><small><?php echo htmlspecialchars($game['genre']); ?></small><h3><?php echo htmlspecialchars($game['title']); ?></h3></div>
        <span class="arrow">↗</span>
      </div>
    </article>
  <?php endforeach; ?>
  </div>
</section>

<section id="about" class="section studio-section">
  <div class="studio-visual">
    <div class="visual-grid"></div>
    <div class="big-ko">K<span>.</span>O</div>
    <div class="floating-tag tag-a">CREATIVE<br>ENGINE</div>
    <div class="floating-tag tag-b">PLAYER<br>FIRST</div>
  </div>
  <div class="studio-copy">
    <div class="eyebrow"><span></span> THE K.O. STUDIO</div>
    <h2>WE DON'T<br>JUST MAKE<br><em>GAMES.</em></h2>
    <p>K.O is a gaming company focused on original worlds, sharp design and unforgettable player moments. Our studio brings together game design, art, technology and community to create experiences that keep moving.</p>
    <div class="principles">
      <div><b>01</b><span>Original IP<br><small>Fresh worlds, fresh rules.</small></span></div>
      <div><b>02</b><span>Built Together<br><small>Players shape what comes next.</small></span></div>
      <div><b>03</b><span>Never Static<br><small>Always evolving.</small></span></div>
    </div>
  </div>
</section>

<section class="ticker"><div>K.O GAMING <span>✦</span> CREATE <span>✦</span> COMPETE <span>✦</span> CONNECT <span>✦</span> K.O GAMING <span>✦</span> CREATE <span>✦</span> COMPETE <span>✦</span></div></section>

<section id="news" class="section news-section">
  <div class="section-head">
    <div><div class="eyebrow"><span></span> TRANSMISSIONS</div><h2>FROM THE<br><em>STUDIO.</em></h2></div>
    <a class="text-link" href="#contact">VIEW ALL <span>→</span></a>
  </div>
  <div class="news-grid">
  <?php foreach ($news as $item): ?>
    <article class="news-card">
      <div class="news-date"><?php echo date("d.m.Y", strtotime($item['published_at'])); ?></div>
      <span class="news-tag"><?php echo htmlspecialchars($item['category']); ?></span>
      <h3><?php echo htmlspecialchars($item['title']); ?></h3>
      <p><?php echo htmlspecialchars($item['excerpt']); ?></p>
      <a href="#contact">READ STORY <span>↗</span></a>
    </article>
  <?php endforeach; ?>
  </div>
</section>

<section id="contact" class="join-section">
  <div class="join-inner">
    <div class="eyebrow"><span></span> K.O. NETWORK</div>
    <h2>READY TO<br><em>ENTER?</em></h2>
    <p>Join the K.O. network for game announcements, studio drops and exclusive updates.</p>
    <form method="post" class="signup">
      <input type="email" name="newsletter_email" placeholder="ENTER YOUR EMAIL" required>
      <button type="submit">JOIN K.O. <span>→</span></button>
    </form>
    <?php if ($message): ?><div class="form-message"><?php echo htmlspecialchars($message); ?></div><?php endif; ?>
  </div>
</section>
</main>

<footer>
  <div class="footer-brand"><span class="mini-mark">K<span>O</span></span><b>K.O.</b></div>
  <p>© <?php echo date("Y"); ?> K.O Gaming. All rights reserved.</p>
  <div class="socials"><a href="#">IG</a><a href="#">X</a><a href="#">YT</a><a href="#">DC</a></div>
</footer>

<script src="assets/app.js"></script>

<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
</body>
</html>