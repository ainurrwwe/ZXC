<?php
/*

Автор данного скрипта - https://vk.com/web_koder_url, по всем вопросам пишите.

*/
$bd_server = "localhost";

$bd_login = 'aisnybestg';//логин базы данных

$bd_pass = 'Donkimoret666';//пароль базы данных

$bd_name = 'aisnybestg';//имя базы данных
 
mysql_connect($bd_server, $bd_login, $bd_pass)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных!</p>");
mysql_select_db($bd_name)//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных!</p>");
mysql_query("SET NAMES utf8");
?>