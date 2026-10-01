
<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
<?php
require_once '../includes/config.php';
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: ../contact.php');exit;}
$name=trim($_POST['name']??'');$email=trim($_POST['email']??'');$subject=trim($_POST['subject']??'');$message=trim($_POST['message']??'');
if(!$name||!filter_var($email,FILTER_VALIDATE_EMAIL)||!$message){flash('error','Please enter your name, email and message.');header('Location: ../contact.php');exit;}
if(!$pdo){flash('error','Database connection unavailable. Import the SQL and check XAMPP MySQL.');header('Location: ../contact.php');exit;}
$stmt=$pdo->prepare('INSERT INTO contact_messages (name,email,subject,message) VALUES (?,?,?,?)');$stmt->execute([$name,$email,$subject,$message]);flash('success','Message sent to the concierge.');header('Location: ../contact.php');

<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
