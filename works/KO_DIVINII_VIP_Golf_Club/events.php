
<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
<?php $pageTitle='Club Life | K.O. Divinii'; $active='events'; require 'includes/header.php'; $events=[]; if($pdo){$stmt=$pdo->query("SELECT * FROM events WHERE event_date >= CURDATE() ORDER BY event_date,event_time LIMIT 12");$events=$stmt->fetchAll();} ?>
<section class="page-hero"><div class="container reveal"><div class="section-kicker">K.O. Divinii • Club life</div><h1>Beyond the course, there is a <em>calendar.</em></h1><p>Member dinners, tournament days, clinics and the small rituals that turn a course into a club.</p></div></section>
<section class="section"><div class="container"><div class="events-grid">
<?php if(!$events): ?><div class="card"><h2>No events loaded yet.</h2><p class="body-copy">Import the included SQL file, then refresh this page.</p></div><?php endif; ?>
<?php foreach($events as $event): ?><article class="event-card reveal" data-tilt><div class="event-date"><b><?= e(date('d',strtotime($event['event_date']))) ?></b><span><?= e(date('M Y',strtotime($event['event_date']))) ?></span></div><span class="chip"><?= e($event['category']) ?></span><h3><?= e($event['title']) ?></h3><p><?= e($event['description']) ?></p><div class="event-meta"><span><i class="fa-regular fa-clock"></i><?= e(date('g:i A',strtotime($event['event_time']))) ?></span><span><i class="fa-solid fa-location-dot"></i><?= e($event['location']) ?></span></div></article><?php endforeach; ?>
</div></div></section>
<?php require 'includes/footer.php'; ?>

<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
