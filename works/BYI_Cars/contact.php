<?php
require_once __DIR__ . '/config.php';
$sent = false; $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $car = trim($_POST['car'] ?? '');
  $message = trim($_POST['message'] ?? '');
  if ($name && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $stmt = $pdo->prepare("INSERT INTO inquiries (name,email,car,message) VALUES (?,?,?,?)");
    $stmt->execute([$name,$email,$car,$message]);
    $sent = true;
  } else $error = 'Please enter your name and a valid email address.';
}
$cars = $pdo->query("SELECT name FROM cars ORDER BY id")->fetchAll();
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Contact — BYI Motors</title><link rel="stylesheet" href="assets/css/style.css">
<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
</head>
<body><header class="nav"><a class="brand" href="index.php"><span class="jc-mark">JC</span><span><b>BYI</b><small>MOTORS</small></span></a><nav><a href="index.php#fleet">Fleet</a><a href="index.php#experience">Experience</a><a href="index.php#about">About</a></nav></header>
<section class="contact-page"><div><p class="eyebrow">PRIVATE ACCESS</p><h1>Start a<br><em>conversation.</em></h1><p>Request a private viewing, ask about a model, or tell us what you want from your next drive.</p><div class="contact-meta"><span>LAGOS / NIGERIA</span><span>BY APPOINTMENT</span></div></div>
<div class="form-card"><?php if($sent): ?><div class="success">Thank you. Your BYI request has been received.</div><?php else: ?><form method="post"><label>YOUR NAME<input name="name" required></label><label>EMAIL<input type="email" name="email" required></label><label>MODEL<select name="car"><option value="">Select a model</option><?php foreach($cars as $c): ?><option><?=htmlspecialchars($c['name'])?></option><?php endforeach; ?></select></label><label>MESSAGE<textarea name="message" rows="5" placeholder="Tell us what you are looking for..."></textarea></label><?php if($error): ?><p class="error"><?=$error?></p><?php endif; ?><button class="primary" type="submit">Send request ↗</button></form><?php endif; ?></div></section>
<footer><div class="brand"><span class="jc-mark">JC</span><span><b>BYI</b><small>MOTORS</small></span></div><p>© 2026 BYI Motors.</p></footer>
<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
</body></html>