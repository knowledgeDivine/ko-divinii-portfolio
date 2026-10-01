
<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
<?php
require_once "config.php"; $page_title="Contact"; $sent=false;
if($_SERVER['REQUEST_METHOD']==='POST'){
  $name=trim($_POST['name']??''); $email=trim($_POST['email']??''); $phone=trim($_POST['phone']??''); $message=trim($_POST['message']??''); $property=trim($_POST['property']??'');
  if($name && filter_var($email,FILTER_VALIDATE_EMAIL) && $message){
    $s=$conn->prepare("INSERT INTO inquiries (name,email,phone,property,message) VALUES (?,?,?,?,?)"); $s->bind_param("sssss",$name,$email,$phone,$property,$message); $s->execute(); $sent=true;
  }
}
include "includes/header.php";
?>
<section class="page-hero contact-hero"><div class="section-kicker">PRIVATE CLIENT DESK</div><h1>Let’s talk about<br><em>your next move.</em></h1><p>Tell us what you're looking for and a MIMI Homes advisor will get in touch.</p></section>
<section class="section contact-grid"><div><div class="section-kicker">GET IN TOUCH</div><h2>Start a conversation.</h2><p class="large-copy">Whether you're buying, selling, investing or simply exploring, we're here to help.</p><div class="contact-details"><p><b>Office</b><br>Lagos, Nigeria</p><p><b>Email</b><br>hello@mimihomes.com</p><p><b>Phone</b><br>+234 800 MIMI HOMES</p></div></div>
<form class="contact-form" method="post"><?php if($sent): ?><div class="success">Thank you. Your inquiry has been received.</div><?php endif; ?><label>Name<input required name="name"></label><label>Email<input required type="email" name="email"></label><label>Phone<input name="phone"></label><label>Property of interest<input name="property" value="<?= htmlspecialchars($_GET['property']??'') ?>"></label><label>Message<textarea required name="message" rows="6" placeholder="Tell us what you're looking for..."></textarea></label><button class="btn btn-dark full">Send inquiry</button></form></section>
<?php include "includes/footer.php"; ?>
<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
