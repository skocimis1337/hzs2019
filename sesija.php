<?php

require_once 'utils/db.php';
$db = dbConnect();
global $user_id, $user_email, $user_korisnicko_ime;
function ucitajSesiju()
{
    global $db;
    $user_id = $user_email = $user_korisnicko_ime =  null;
    if ($_COOKIE['session_token'] ?? null)
    {
        $session_stmt = $db->prepare('SELECT s.user_id ui, u.email ue, u.korisnicko_ime uu
    FROM session_tokens AS s JOIN korisnici AS u ON s.user_id = u.id
WHERE token = :t');
        $session_stmt->execute(['t' => $_COOKIE['session_token']]);
        $sesija_redovi = $session_stmt->fetchAll();
        $session_stmt->close();
        $user_id = $sesija_redovi['ui'];
        $user_email = $sesija_redovi['ue'];
        $user_korisnicko_ime = $sesija_redovi['ua'];
        
    }

}

ucitajSesiju();
