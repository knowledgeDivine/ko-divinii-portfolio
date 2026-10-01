<?php
$projects = [
 ['name'=>'BYI Cars','slug'=>'BYI_Cars','path'=>'BYI_Cars/index.php','desc'=>'Premium automotive website and digital showroom.'],
 ['name'=>'K.O Gaming','slug'=>'KO_Gaming','path'=>'KO_Gaming/index.php','desc'=>'Gaming brand website with an immersive digital experience.'],
 ['name'=>'MIMI Homes','slug'=>'MIMI_Homes','path'=>'MIMI_Homes/index.php','desc'=>'Real-estate website with property browsing and contact flows.'],
 ['name'=>'Not An Ordinary Mind','slug'=>'Not_An_Ordinary_Mind','path'=>'Not_An_Ordinary_Mind/index.php','desc'=>'Creative shoe / brand launch website.'],
 ['name'=>'K.O DIVINII VIP Golf Club','slug'=>'KO_DIVINII_VIP_Golf_Club','path'=>'KO_DIVINII_VIP_Golf_Club/index.php','desc'=>'Premium golf club experience with bookings and membership pages.']
];
?><!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>K.O DIVINII — Works</title><style>body{margin:0;background:#080808;color:#fff;font-family:Arial,sans-serif;padding:50px}.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:24px;max-width:1200px;margin:auto}.card{border:1px solid #333;padding:25px;background:#111}.card h2{font-size:28px}.card p{color:#999;line-height:1.6}.btn{display:inline-block;background:#d7ff45;color:#000;padding:12px 18px;text-decoration:none;font-weight:bold}</style>
<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
</head><body><p>K.O DIVINII / WORKS</p><h1>My Websites</h1><div class="grid"><?php foreach($projects as $p): ?><div class="card"><small>WEBSITE PROJECT</small><h2><?=htmlspecialchars($p['name'])?></h2><p><?=htmlspecialchars($p['desc'])?></p><a class="btn" href="<?=htmlspecialchars($p['path'])?>">Open Website ↗</a></div><?php endforeach; ?></div>
<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
</body></html>
