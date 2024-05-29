<?php

$webPage = '';
$name = $_POST['name'];
$phone = urlencode($_POST['phone']);

$token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k";

$chat_id = "-1001376771478"; // chat_id - группы "Правки по сайтам - KIRANO"

$arr = [
	'Новая заявка с сайта: ' => $webPage,
	'Имя: ' => $name,
	'Телефон: ' => $phone
];

foreach ($arr as $key => $value) {
	$txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

// Раскомментировать перед выгрузкой на сервер
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_URL, "https://kiranowork.uz/big-data.php");
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt(
// 	$ch,
// 	CURLOPT_POSTFIELDS,
// 	http_build_query([
// 		'website' => $webPage,
// 		'name' => $name,
// 		'phone' => $phone,
// 		'domain' => $_SERVER['SERVER_NAME']
// 	])
// );

// curl_exec($ch);
// curl_close($ch);

if ($sendToTelegram) {
	header('Location: success.php');
} else {
	header('Location: error_form.php');
}
