<center><h1>Zmienne i operatory</h1>
<p>Pierwsze zajęcia - 27.10</p></center>

<html>
<head>
<title> Pierwszy skrypt php</title>
</head>

<?php 
echo "Mój pierwszy plik PHP<BR>"; 
echo "tekst 2 <br>";


$Test = "Hello world <br>";   //zmienna
echo $Test;

echo (gettype(Test)); //typ zmiennej
// settype  - zmiena typu zmiennej
$Test = (string) $Test;  //rzutowanie zmiennej
echo "<br>";
echo 'To jest $Test <br>'; // wyświetla co jest w łańcuchu


$tekst = <<< ID1
tekst wielowierszowy 
druga linijka 
ID1;

echo $tekst; 

$banany = "7 bananów";
$liczba = (double) 10;
echo "<br>";
echo $banany*$liczba;
echo "<br>";
echo $_ENV;
$tablica = array(1,2,3,5,6);
echo "<br>";
echo "Tablica 2 elem $tablica[1]";


$tab2 = array(2, "jabłko");
echo $tab2[1];
$tab2[]='gruszka';
echo "<br>";
echo $tab2[2];
echo "<br>";
print_r($tab2);
echo "<br>";
//tablica asocjacyjna - dla nazwy dluzsze wyrazenia

$tydzien=array();
$tydzien['pn']='dzis poniedzialek';
$tydzien['wt']='wtorek';
$tydzien['sr']='sroda';

echo $tydzien['pn']." a jutro ".$tydzien['wt'];;

echo "<br>";
define("stopka", "kurs php"); // zmienna stała
echo stopka;
echo "<br>";
echo "To jest " .__LINE__." pliku ".__FILE__;
echo "<br>";

//print_r($GLOBALS);


//zadanie 
define("stala", "Sałatki u Cezara");
$jablka=4.30;
$gruszki=6;
$pomidory=7;
$suma=$jablka*3+$gruszki*2+$pomidory*4;
echo "Koszt zakupów wynosi: $suma zł <br>";
echo "Pozdrawiamy <br>".stala;

?>
</body></html>