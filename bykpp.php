<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$kpp = $_POST['kpp'];
$name_car = $_POST['name_car'];
$model = $_POST['model'];
$volume = $_POST['volume'];
$year = $_POST['year']
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$token = "";
$chat_id = "";
$arr = array(
  'Тип коробки: ' =>$kpp,
  'Марка машины: ' => $name_car,
  'Модель машины: ' => $model,
  'Объем двигателя: ' => $volume,
  'Год выпуска: ' => $year,
  
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>