
<style id="ko-portfolio-return">
.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Inter,Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}
</style>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mimi_homes_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
<a class="ko-portfolio-return" href="/KO_DIVINII_CV/#works" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
