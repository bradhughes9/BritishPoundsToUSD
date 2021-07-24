<?php
$pound = 0;
$rich = ('rich.gif');

if (isset($_POST['submit']))
	{
		if (is_numeric($_POST ['usdollar']))
		{
			$pound = $_POST['usdollar'] * .73;
		}
	}
	

	echo "<h1>Your Currency Total:</h1>";
	echo "<p> Your total will be $pound British Pounds. </p>";
		if($pound > 25)
	{
		echo "<img src=\"".$rich."\">";
	}
?>
