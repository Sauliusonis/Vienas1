<pre>

<?php 
	$vardas;
	$amzius;
	$tiesaDrasa;

	$vardas	= "Povilas";
	$amzius = "28";
	$tiesaDrasa = false;

	print $vardas;	
	echo "<br>";
	print $amzius;
	echo "<br>";

	if ($amzius = "28") {
		$vardas = "Saulius";
	}

print $vardas;
echo "<br>";

$amzius = 8*8*15;
print $amzius;
echo "<br>";
$amzius++;
print $amzius;

echo "<br>";
$amzius+=10;
print $amzius;
 
echo "<br>";
$vardas = "Patrikas";
print $vardas;

echo "<br>";
$vardas .= "a";
print "vardas su nauja galune: " . $vardas;

echo "<br>";
print "tiesa Drasa reiksme: " . $tiesaDrasa . "va kaip";

echo "<br>";
print "Masyyyvai";

$drinks = ["kava", "pienas", "Sultis", "arbata"];
echo "<br>";
echo $drinks[1];
echo "<br>";
print_r($drinks);

$drinks[3]="vynas";
echo "<br>";
print_r($drinks);

echo $drinks[3];

$drinks[]="gira";

print_r($drinks);
$temp = 12;





$tiesaDrasa = false;
print $tiesaDrasa;

if ($tiesaDrasa == true) {
	print " Drasa";
	# code...
} else {

	print "tiesa";
}

if ($temp > 30) {
	print "labai karsta";
	# code...
} else {
	
	print "nelabai karsta";
}

 ?>


