<?php

for ($x = 0; $x <= 100; $x++) {
	if ($x % 3 == 0 && $x % 5 != 0) {
		print "$x Fizz<br>";
	}
	else if ($x %5 == 0 && $x % 3 != 0) {
		print "$x Buzz <br>";
	}
	else if ($x % 3 == 0 && $x % 5 == 0) 
		print "$x FizzBuzz<br>";
}