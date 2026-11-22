<?php
echo "Введите фамилию: ";
$lastname = trim(fgets(STDIN));

echo "Введите имя: ";
$firstname = trim(fgets(STDIN));

echo "Введите отчество: "; 
$patronymic = trim(fgets(STDIN));

$firstname = mb_convert_case($firstname, MB_CASE_TITLE);
$lastname = mb_convert_case($lastname, MB_CASE_TITLE);
$patronymic = mb_convert_case($patronymic, MB_CASE_TITLE);

$fullname = "'" .  $lastname . ' ' . $firstname . ' ' . $patronymic . "'";

$surnameAndInitials = "'" . $lastname . ' ' . mb_substr($firstname, 0, 1) . '.' . mb_substr($patronymic, 0, 1) . '.' . "'";

$fio = "'" . mb_substr($lastname, 0, 1) . mb_substr($firstname, 0, 1) . mb_substr($patronymic, 0, 1) . "'";

echo  "Полное имя: " . $fullname . PHP_EOL . "Фамилия и инициалы: " . $surnameAndInitials . PHP_EOL . "Аббревиатура: " . $fio;