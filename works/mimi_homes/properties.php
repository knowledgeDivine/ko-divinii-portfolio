
<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
<?php
require_once "config.php";
$page_title = "Properties";
$types = $conn->query("SELECT DISTINCT type FROM properties ORDER BY type");
$where = "1=1";
$params = []; $typestr = "";
if (!empty($_GET['type'])) { $where .= " AND type=?"; $params[] = $_GET['type']; $typestr .= "s"; }
if (!empty($_GET['q'])) { $where .= " AND (title LIKE ? OR location LIKE ?)"; $q="%".$_GET['q']."%"; $params[]=$q; $params[]=$q; $typestr.="ss"; }
$sql = "SELECT * FROM properties WHERE $where ORDER BY featured DESC, id DESC";
$stmt=$conn->prepare($sql);
if ($params) $stmt->bind_param($typestr,...$params);
$stmt->execute(); $result=$stmt->get_result();
include "includes/header.php";
?>
<section class="page-hero"><div class="section-kicker">THE COLLECTION</div><h1>Properties with <em>presence.</em></h1><p>Explore homes, apartments, land and investment opportunities selected by MIMI Homes.</p></section>
<section class="section">
<form class="filters" method="get"><input name="q" placeholder="Search by name or location" value="<?= htmlspecialchars($_GET['q'] ?? '') ?>"><select name="type"><option value="">All property types</option><?php while($t=$types->fetch_assoc()): ?><option <?= (($_GET['type']??'')===$t['type'])?'selected':'' ?>><?= htmlspecialchars($t['type']) ?></option><?php endwhile; ?></select><button class="btn btn-dark">Filter</button></form>
<div class="property-grid">
<?php while($p=$result->fetch_assoc()): ?>
<article class="property-card"><a href="property.php?id=<?= (int)$p['id'] ?>" class="property-image" style="background-image:url('<?= htmlspecialchars($p['image']) ?>')"><span class="pill"><?= htmlspecialchars($p['type']) ?></span></a><div class="property-body"><div><h3><?= htmlspecialchars($p['title']) ?></h3><p><?= htmlspecialchars($p['location']) ?></p></div><strong><?= htmlspecialchars($p['price']) ?></strong></div><div class="property-meta"><span><?= (int)$p['beds'] ?> Beds</span><span><?= (int)$p['baths'] ?> Baths</span><span><?= number_format($p['area']) ?> sq ft</span></div></article>
<?php endwhile; ?>
</div></section>
<?php include "includes/footer.php"; ?>
<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
