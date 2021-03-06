<?php

/**
 * Shuffle sort
 * Sorts an array using shuffle()
 * @param  array  $a
 * @return array
 */
function shufflesort(array $a) {
	$b = $a;
	sort($b);
	while($a != $b) {
		shuffle($a);
	}
	return $a;
}
