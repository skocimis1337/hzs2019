<?php

require_once 'utils/db.php';
require_once 'utils/view.php';
require_once 'sesija.php';

function loginAction(array $niz)
{
    static $user_id;
    global $db;
    $i = 0;
    $username;
    $prom;
    foreach ($niz as $prom)
    {
        $i = $i+1;
        if($i==1)
            $username = $prom;
        else
            $password = $prom;
        

    }
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        if ($user_id) {
            http_response_code(400);
            return;
        }
        if (!$password || !$username) {
            http_response_code(400);
            return;
        }
        if (strlen($password) > 70) {
            http_response_code(400);
            echo "Predugacak password.";
            return;
        }
        if (strlen($username) > 20) {
            http_response_code(400);
            echo "Predugacak username.";
            return;
        }
        $login_stmt = $db->prepare("SELECT id_korisnika, lozinka
FROM korisnici WHERE korisnicko_ime = :u");
        $login_stmt->execute(['u' => $username]);
        $row = $login_stmt->fetchAll()[0] ?? null;
        if (!$row) {
            http_response_code(403);
            echo "Pogresno korisnicko ime ili lozinka.";
            return;
        }
        $user_id = $row['id_korisnika'];
        $hash = $row['lozinka'];
        if (!password_verify($password, $hash)) {
            http_response_code(403);
            echo "Pogresno korisnicko ime ili lozinka.";
            return;
        }
        $session_token = random_bytes(60);
        $newsession_stmt = $db->prepare("INSERT INTO session_tokens (token, user_id) VALUES (:t, :u)");
        $newsession_stmt->execute(['t' => $session_token, 'u' => $user_id]);
        setcookie("session_token", $session_token);
        return;
    }
    else
    {?>
    <html>
        <body>
            <form action="#" method="post">
            <input type="username" name="username"/>
            <input type="password" name="password"/>
            <input type="submit"/>
            </form>
        </body>
        </html><?php
        
    }
}
