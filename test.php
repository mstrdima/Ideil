<html>
	<body>
		Dima_Petrukha<br>
		Usual HTML: Dima Petrukha <br>
		<?php
echo "Usual echo php: Dima Petrukha \n<br>";
$var="Dima Petrukha";
strtolower($var);
echo date('H g Y')."<br>";
echo date('d');
echo "<br>".time();
function convert(){
$zm=time();
$result='<br>Seconds: '.$zm;
$zm_m=floor($zm/60);
$result .='<br>Minutes: ' .$zm_m;
$zm_h=floor($zm_m/60);
$result .='<br>Hours: ' .$zm_h;
echo $result;
}
echo "<br>time from 1970y".convert();
for ($i=2000; $i<=2100; $i++) {
	$res=$i%4;
	if ($res==0) {
		echo "<br> Високосний рік: ".$i;
}
}
echo "<br>var echo php: ".$var;
$name="Dima";
$last=" Petrucha";
echo "<br>var echo 2 php: ".$name."".$last;
$array=array('name' => $name , 'last name' => $last);
echo "<br>echo array in PHP:";
print_r($array);
$mas="<br>1 line var";
		?>
<?=$mas?>

	</body>
</html>