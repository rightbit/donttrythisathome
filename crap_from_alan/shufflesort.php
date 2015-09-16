<?php

/**
 * Shuffle sort
 * Sorts an array using shuffle()
 * @param  array  $a
 * @return array
 */
function shufflesort(array $a) {
	while($a != sort($a)) {
		shuffle($a);
	}
	return $a;
}
