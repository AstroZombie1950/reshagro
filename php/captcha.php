<?php
session_start();

$a = rand(1, 9);
$b = rand(1, 9);

$_SESSION['captcha_answer'] = $a + $b;

echo json_encode([
	'a' => $a,
	'b' => $b
]);