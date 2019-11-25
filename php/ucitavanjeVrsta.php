<?php
require "konekcija.php";

$upit = "SELECT naziv FROM vrste_dogadjaja";
$rezultat = $konekcija->query($upit);
if ( !$rezultat = $konekcija->query($upit) ) {
    echo "Neuspesno povezivanje";
} else {
    if ( $rezultat->num_rows > 0 ) {
        
        $niz = array();

        while ( $red = $rezultat->fetch_object() ) {
            echo "<a href = 'desavanja?vrsta_dogadjaja=1'>".$red->naziv."</a>";
        }
    } else {
        echo "nema podataka";
    }
}