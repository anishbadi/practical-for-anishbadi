<?php
if (isset($_POST['name'])) {
	$num = $_POST['name'];
	$number = check($num);
	header("Location: http://localhost/practical/index.php?num=$num&ugly=".$number); 
}
/**
 * This function how many number are Ugly.
 * @param $n as interger
 * @return number
 */
function check($n) 
{
	$a = [2,3,5];
	$test = 1;
	$final = 1;
	while ($n > $final) {
		$test++;
    	$s = 0;
		$t = $test;
		foreach ($a as $key => $value) {
			$t = checkModule($t, $value);
			$s = ($t == 1) ? 1 : 0;
		}
		if ($s) {
			$final++;
		}
	}
	return $test;          
}

/**
 * check modules of number.
 * @param $t as interger
 * @param $value as interger
 * @return bool
 */
function checkModule($t, $value) 
{ 
    while ($t % $value == 0){
    	$t = $t / $value;  
    } 
    return $t;
}