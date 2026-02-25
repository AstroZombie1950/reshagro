<?php
session_start();
header('Content-Type: application/json');

$to = "TEMPMAIL@gmail.com"; // --------------------------------------------------- email
$subject = "New inquiry from Reshagro website";

/* ===== 1. Honeypot ===== */
if (!empty($_POST['company'])) {
	echo json_encode(["success" => false, "message" => "Greška u proveri."]);// <------------------------------------------------------
	exit;
}

/* ===== 2. Timer (minimum 3 sec) ===== */
if (!isset($_SESSION['form_time']) || (time() - $_SESSION['form_time']) < 3) {
	echo json_encode(["success" => false, "message" => "Forma je poslata prebrzo."]);// <--------------------------------------
	exit;
}

/* ===== 3. CAPTCHA validation ===== */
if (!isset($_SESSION['captcha_answer']) || 
	$_POST['captcha'] != $_SESSION['captcha_answer']) {

	echo json_encode(["success" => false, "message" => "Netačan odgovor na captcha pitanje."]);// <----------------------------------------------
	exit;
}

/* ===== 4. Data validation ===== */

$name = trim($_POST['name']);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$message = trim($_POST['message']);

if (!preg_match("/^[A-Za-zА-Яа-яЁё\s]+$/u", $name)) {
	echo json_encode(["success" => false, "message" => "Neispravno ime."]);// <-----------------------------------------------------
	exit;
}

if (!$email) {
	echo json_encode(["success" => false, "message" => "Neispravan email."]);// <---------------------------------------------------
	exit;
}

/* ===== 5. Email body ===== */

$boundary = md5(time());

$headers = "From: no-reply@" . $_SERVER["SERVER_NAME"] . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

$body = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
$body .= "Name: $name\r\n";
$body .= "Email: $email\r\n\r\n";
$body .= "Message:\r\n$message\r\n\r\n";

/* ===== 6. Attachments ===== */

$allowed = ["zip","jpg","jpeg","png","docx","xlsx","pdf","dxf","dwg"];
$maxSize = 20 * 1024 * 1024;
$maxFiles = 10;

if (!empty($_FILES['files']['name'][0])) {

	if (count($_FILES['files']['name']) > $maxFiles) {
		echo json_encode(["success" => false, "message" => "Previše fajlova."]);// <---------------------------------------------
		exit;
	}

	for ($i = 0; $i < count($_FILES['files']['name']); $i++) {

		if ($_FILES['files']['error'][$i] === 0) {

			$fileName = basename($_FILES['files']['name'][$i]);
			$fileTmp = $_FILES['files']['tmp_name'][$i];
			$fileSize = $_FILES['files']['size'][$i];

			$ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

			if (!in_array($ext, $allowed)) {
				echo json_encode(["success" => false, "message" => "Nedozvoljen format fajla."]);// <--------------------------------
				exit;
			}

			if ($fileSize > $maxSize) {
				echo json_encode(["success" => false, "message" => "Fajl je prevelik."]);// <-------------------------------------
				exit;
			}

			$fileContent = chunk_split(base64_encode(file_get_contents($fileTmp)));

			$body .= "--$boundary\r\n";
			$body .= "Content-Type: application/octet-stream; name=\"$fileName\"\r\n";
			$body .= "Content-Transfer-Encoding: base64\r\n";
			$body .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n\r\n";
			$body .= "$fileContent\r\n";
		}
	}
}

$body .= "--$boundary--";

/* ===== 7. Sending ===== */

$mailSent = mail($to, $subject, $body, $headers);

if ($mailSent) {
	unset($_SESSION['captcha_answer']);
	echo json_encode(["success" => true]);
} else {
	echo json_encode(["success" => false, "message" => "Greška servera."]);// <-------------------------------------------------------
}