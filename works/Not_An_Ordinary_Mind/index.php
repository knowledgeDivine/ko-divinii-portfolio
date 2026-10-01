<?php
require_once __DIR__ . '/config/db.php';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $pdo->prepare('INSERT INTO waitlist (name, email) VALUES (?, ?)');
        try { $stmt->execute([$name, $email]); $message = 'You are on the list. Welcome to the uncommon.'; }
        catch (PDOException $e) { $message = $e->getCode() === '23000' ? 'That email is already on the list.' : 'Something went wrong. Try again.'; }
    } else $message = 'Please enter a valid name and email.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Not An Ordinar Mind — Beyond Ordinary</title>
<meta name="description" content="Not An Ordinar Mind — a next-generation footwear concept built for uncommon minds.">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">

<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
</head>
<body>
<div class="noise"></div>
<header class="nav"><a class="brand" href="#top"><span class="brand-mark">JC</span><span>NOT AN<br><b>ORDINAR MIND</b></span></a><nav><a href="#story">STORY</a><a href="#design">DESIGN</a><a href="#drop">DROP</a></nav><a class="nav-cta" href="#join">JOIN THE MIND <span>↗</span></a></header>
<main id="top">
<section class="hero">
<div class="hero-copy"><p class="eyebrow">N°01 / MINDSET FOOTWEAR</p><h1>NOT<br><em>ORDINAR</em><br>MIND<span class="dot">.</span></h1><p class="lede">For people who refuse to move through the world on default settings.</p><a class="pill" href="#drop">ENTER THE DROP <span>↓</span></a></div>
<div class="hero-stage"><div class="orb"></div><div class="ring ring-a"></div><div class="ring ring-b"></div><div class="shoe-3d" aria-label="3D conceptual sneaker"><div class="sole"></div><div class="midsole"></div><div class="upper"><i class="heel"></i><i class="tongue"></i><i class="lace l1"></i><i class="lace l2"></i><i class="lace l3"></i><i class="panel p1"></i><i class="panel p2"></i><i class="logo">JC</i></div><div class="toe"></div></div><div class="stage-label">NOM / 001<br><small>OBJECT IN MOTION</small></div></div>
</section>
<section class="ticker"><div>THINK DIFFERENT • MOVE DIFFERENT • STAY UNCOMMON • </div><div>THINK DIFFERENT • MOVE DIFFERENT • STAY UNCOMMON • </div></section>
<section class="manifesto" id="story"><div class="section-num">01</div><div><p class="eyebrow">THE MANIFESTO</p><h2>Ordinary is<br><span>not the brief.</span></h2></div><p class="manifesto-copy">Not An Ordinar Mind is footwear for the restless. We design silhouettes that feel engineered, expressive and slightly unexpected — because your shoes should not be an afterthought. They should be a statement before you say a word.</p></section>
<section class="design" id="design"><div class="design-head"><p class="eyebrow">OBJECT / 001</p><h2>Built like a<br><span>thought.</span></h2><p>Angular geometry. Sculpted cushioning. A visual language that does not ask for permission.</p></div><div class="spec-grid"><article><b>01</b><h3>SCULPTED</h3><p>Layered forms create depth from every angle.</p></article><article><b>02</b><h3>UNCOMMON</h3><p>A signature JC mark sits inside the silhouette.</p></article><article><b>03</b><h3>IN MOTION</h3><p>Designed to look alive even when standing still.</p></article></div></section>
<section class="drop" id="drop"><div class="drop-card"><p class="eyebrow">THE FIRST DROP</p><h2>NOM—001</h2><p>COMING SOON</p><div class="count"><span><b>01</b><small>OBJECT</small></span><span><b>∞</b><small>ATTITUDE</small></span><span><b>00</b><small>ORDINARY</small></span></div></div><div class="drop-side"><p>01 / 01</p><div class="giant">JC</div><p>A concept shoe for the next version of you.</p></div></section>
<section class="join" id="join"><div><p class="eyebrow">EARLY ACCESS</p><h2>Get inside<br>the <span>mind.</span></h2></div><form method="POST"><input name="name" placeholder="YOUR NAME" required><input name="email" type="email" placeholder="YOUR EMAIL" required><button type="submit">JOIN THE LIST <span>↗</span></button><?php if($message): ?><small class="form-msg"><?php echo htmlspecialchars($message); ?></small><?php endif; ?></form></section>
</main>
<footer><span>© 2026 NOT AN ORDINAR MIND</span><span>JC / NOM—001</span><span>MADE FOR THE UNCOMMON</span></footer>
<script src="assets/app.js"></script>

<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
</body></html>
