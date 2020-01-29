<?php

$eesNimi = 'Enn-Erik';
$pereNimi = 'Tasso';
$vanus = 21;
$pikkus = 1.98;
$kaal = 74;

echo '<h1>Minu andmed</h1>';
echo 'Eesnimi: '.$eesNimi.'<br>';
echo 'Perenimi: '.$pereNimi.'<br>';
echo 'Vanus: '.$vanus.'<br>';
echo 'Pikkus: '.$pikkus.'<br>';
echo 'Kaal: '.$kaal.'<br>';

// arvutused
// $muutuja  = väärtus;
$kmi = $kaal / ($pikkus * $pikkus);
echo 'Minu kehamassiindeks: '.$kmi.'<br>';

