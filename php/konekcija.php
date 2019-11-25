<?php
$adresaHosta = "localhost";
$korisnickoIme = "root";
$sifra = "";
$imeBaze = "kultura";
$konekcija = new mysqli($adresaHosta, $korisnickoIme, $sifra, $imeBaze);
if ($konekcija->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $konekcija->connect_error);
    exit();
}
$konekcija->set_charset("utf8");
