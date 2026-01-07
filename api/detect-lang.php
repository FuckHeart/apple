<?php
header("Content-Type: application/json");

// Ambil IP asli (anti proxy / cloudflare)
function getUserIP() {
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    }
    return $_SERVER['REMOTE_ADDR'];
}

$ip = getUserIP();

// Default language
$lang = "en";

// ======== SIMPLE GEO IP =========
// Indonesia IP range (simplified but effective)
if (
    preg_match('/^103\./', $ip) ||
    preg_match('/^36\./', $ip) ||
    preg_match('/^114\./', $ip) ||
    preg_match('/^110\./', $ip) ||
    preg_match('/^118\./', $ip)
) {
    $lang = "id";
}

echo json_encode([
    "ip" => $ip,
    "lang" => $lang
]);
