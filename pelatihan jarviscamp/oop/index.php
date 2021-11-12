<?php
require_once "animal.php";
require_once "Frog.php";
require_once "Apes.php";

$sheep = new animal("shaun", 4, "no");
echo "sheep :";
echo "<br>";
echo "Nama: ";
echo  $sheep->get_name() ;
echo "<br>";
echo "kaki : ";
echo $sheep->get_legs() ;
echo "<br>";
echo "darah dingin: ";
echo  $sheep->get_CB();
echo "<br>";
echo "<br>";

$frog = new Frog("buduk", 4, "no");
echo "kodok ";
echo "Nama: ";
echo  $frog->get_name() ;
echo "<br>";
echo "kaki : ";
echo  $frog->get_legs();
echo "<br>";
echo "darah dingin : ";
echo  $frog->get_CB();
echo "<br>";
echo "Bunyi: ";
echo  $frog->jump() ;
echo "<br>";
echo "<br>";

$sungokong = new Apes("kera sakti", 2, "no");
echo "kera ";
echo "Nama: ";
echo  $sungokong->get_name() ;
echo "<br>";
echo "kaki : ";
echo  $sungokong->get_legs();
echo "<br>";
echo "darah dingin: ";
echo  $sungokong->get_CB()  ;
echo "<br>";
echo "Bunyi: ";
echo  $sungokong->yell() ;
echo "<br>";
echo "<br>";
?>