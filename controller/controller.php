<?php
/**
*Контроллер содержит функции - экшены,
*которые заставляют модель вывести нужную информацию
****************************************************
*/

/**
*Массив $posts содержит выборкуу всех полей из
*таблицы posts.
*Погружает файл list.php,содержащий вид вывода
*информации из $posts в браузере.
**/
$posts=get_all_posts();
require "view/templates/list.php";
?>