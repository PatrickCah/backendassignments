<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HTML php test</title>
</head>

<body>
<?php 
//minimum age is 1 and max is 115
if(isset($_GET['fir']) && ctype_alpha($_GET['fir']) 
&& isset($_GET['las']) && ctype_alpha($_GET['las']) 
&& isset($_GET['age']) && ctype_digit($_GET['age'])
&& $_GET['age'] != "0" && $_GET['age'] < "115")
{
	echo "Hello my name is ", 
		$_GET['fir'], " ",
		$_GET['las'], ". ",
		"I am ",
		$_GET['age'],
		" years old and ";
		
		if($_GET['age']<18) { 
			echo "I am not old enough to vote in the United States."; 
			echo " I have ";
			//changing requirment 3 because its too vauge. Its now years instead of days. (how am i supposed to know the days until, they dont input their birthday, just age number.)
			//i know this is ineffecent and sloppy but i dont have the time to make up a forloop, or the effort. I waited kinda til the last minute to see how long this project would take.
			//i left alot of ineffencies in the code (reusing $_GET instead of applying it to a variable, ect, ect).
			switch ($_GET['age']) {
				case 1: echo "17"; break;
				case 2: echo "16"; break;
				case 3: echo "15"; break;
				case 4: echo "14"; break;
				case 5: echo "13"; break;
				case 6: echo "12"; break;
				case 7: echo "11"; break;
				case 8: echo "10"; break;
				case 9: echo "9"; break;
				case 10: echo "8"; break;
				case 11: echo "7"; break;
				case 12: echo "6"; break;
				case 13: echo "5"; break;
				case 14: echo "4"; break;
				case 15: echo "3"; break;
				case 16: echo "2"; break;
				case 17: echo "1"; break;
			}
			echo " year(s) until i can vote. ";
		} 
		else { 
			echo "I am old enough to vote in the United States. "; 
		} 
		
		echo "Todays date is ", gmdate("Y-m-d", time()), ".";
}
	else {
		echo "input parameters invalid!";
	}
?>


</body>

</html>
