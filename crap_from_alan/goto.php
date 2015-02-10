<?php
// This is a good feature.
try {
	a:
	throw new Exception(1);
}
catch (Exception $e) {
	goto a;
}
