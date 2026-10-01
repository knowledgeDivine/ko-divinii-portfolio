
<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
<?php
require_once "config.php";
$id=(int)($_GET['id']??0);
$stmt=$conn->prepare("SELECT * FROM properties WHERE id=?"); $stmt->bind_param("i",$id); $stmt->execute(); $p=$stmt->get_result()->fetch_assoc();
if(!$p){ header("Location: properties.php"); exit; }
$page_title=$p['title']; include "includes/header.php";
?>
<section class="detail-hero" style="background-image:url('<?= htmlspecialchars($p['image']) ?>')"><div class="detail-overlay"><div class="section-kicker light"><?= htmlspecialchars($p['type']) ?></div><h1><?= htmlspecialchars($p['title']) ?></h1><p><?= htmlspecialchars($p['location']) ?></p></div></section>
<section class="section detail-grid"><div><div class="section-kicker">PROPERTY OVERVIEW</div><h2><?= htmlspecialchars($p['headline']) ?></h2><p class="large-copy"><?= nl2br(htmlspecialchars($p['description'])) ?></p><div class="property-meta big"><span><?= (int)$p['beds'] ?> Bedrooms</span><span><?= (int)$p['baths'] ?> Bathrooms</span><span><?= number_format($p['area']) ?> sq ft</span></div></div><aside class="inquiry-box"><span class="label">GUIDE PRICE</span><strong><?= htmlspecialchars($p['price']) ?></strong><p>Want the full brochure, availability and viewing times?</p><a class="btn btn-gold full" href="contact.php?property=<?= urlencode($p['title']) ?>">Request details</a></aside></section>
<?php include "includes/footer.php"; ?>
<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
