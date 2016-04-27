<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Форматирование</title>
</head>
<body>
<?php
$string = $_POST['string'];
$num = preg_replace( "~(\d(?=(?:\d{3})+(?!\d)))~s", "\\1,", $string);
?>
<form action="" method="post" 
 <p>Введите число <input type="text" name="string" SIZE="90"/></p>
 <p><input type="submit"  value = "Отправить"/></p>
 <? echo "Результат: <br /> $num"?>
</form>
</body>