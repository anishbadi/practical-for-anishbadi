<?php
if (isset($_POST['name'])) {
	$string = $_POST['name'];
	$bool = checkPalindrome($string);
	header("Location: http://localhost/practical/index.php?check=".$bool); 
}

/**
 * It return 1 if string is Palindrome else it return 0.
 * @param $value as string
 * @return bool
 */
function checkPalindrome($value)
{
	$value = preg_replace("/[^A-Za-z0-9 ]/", '', $value);
	$value = str_replace(" ", "", $value);
	if (strrev(strtolower($value)) == strtolower($value)) {
		return 1;
	}
	return 0;
}

?>