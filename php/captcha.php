<?php
session_start();

$a = rand(1, 9);
$b = rand(1, 9);

$_SESSION['captcha_answer'] = $a + $b;
$_SESSION['form_time'] = time();

echo json_encode([
	'a' => $a,
	'b' => $b
]);